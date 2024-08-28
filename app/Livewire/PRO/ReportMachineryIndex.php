<?php

namespace App\Livewire\Pro;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\PRO\Machinery;
use App\Models\PRO\SparePart;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ReportMachineryIndex extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $deleteId;
    public $updateId;
    public SparePart $sparepart;
    public Machinery $machinery;
    public $edit = false;
    public $id_machinery;
    public $name_spare;
    public $brand_spare;
    public $type_spare;
    public $model_spare;
    public $number_spare;
    public $size_spare;
    public $lubricant;
    public $kw_spare;
    public $quantity_spare;
    public $status_spare;
    public $plan_spare;
    public $breakdown_spare;
    public $remark_spare;
    public $photo_spare;
    public $start_spare;
    public $id;
    public $machineryId;
    public $plan_startDate;
    public $plan_endDate;
    public $status;



    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected $rules = [
        'id_machinery' => 'required|string|max:255',
        'name_spare' => 'required|string|max:255',
        'brand_spare' => 'nullable|string|max:255',
        'type_spare' => 'nullable|string|max:255',
        'model_spare' => 'nullable|string|max:255',
        'number_spare' => 'nullable|string|max:255',
        'size_spare' => 'nullable|string|max:255',
        'lubricant' => 'nullable|string|max:255',
        'kw_spare' => 'nullable|string|max:255',
        'quantity_spare' => 'nullable|string|max:255',
        'status_spare' => 'nullable|string|max:255',
        'plan_spare' => 'nullable|max:255',
        // 'breakdown_spare' => 'nullable',
        'remark_spare' => 'nullable',
        'photo_spare' => 'nullable|image|max:1024',
        'start_spare' => 'nullable',
    ];

    public function mount(SparePart $sparepart, $machineryId)
    {

        $this->machinery = Machinery::findOrFail($machineryId);
        $this->sparepart = $sparepart;

        $spareparts = SparePart::where('id_machinery', $this->machinery->id)
            ->orderBy('plan_spare', 'desc')
            ->get();

        $this->plan_startDate = Carbon::now();
        foreach ($spareparts as $sparepart) {
            $this->plan_endDate = Carbon::parse($sparepart->plan_spare);
            $this->calculateStatus($sparepart);
        }
    }

    public function calculateStatus($sparepart)
    {
        $daysDifference = $this->plan_startDate->diffInDays($this->plan_endDate);

        // if ($daysDifference < 1) {
        //     $sparepart->status_spare = 3;
        // } elseif ($daysDifference < 7) {
        //     $sparepart->status_spare = 2;
        // } else {
        //     $sparepart->status_spare = 1;
        // }
        // $sparepart->update();
    }

    public function render()
    {
        Carbon::setLocale('th');
        $spareparts = SparePart::where('id_machinery', $this->machinery->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('livewire.pro.report-machinery-index', [
            'spareparts' => $spareparts,
            'machinery' => $this->machinery,
        ]);
    }

    public function addSparePart()
    {
        $this->edit = false;
    }

    public function saveSparePart()
    {
        try {
            $validateData = $this->validate(
                [
                    // 'id_machinery' => 'required|string|max:255',
                    'name_spare' => 'required|string|max:255',
                    'brand_spare' => 'nullable|string|max:255',
                    'type_spare' => 'nullable|string|max:255',
                    'model_spare' => 'nullable|string|max:255',
                    'number_spare' => 'nullable|string|max:255',
                    'size_spare' => 'nullable|string|max:255',
                    'lubricant' => 'nullable|string|max:255',
                    'kw_spare' => 'nullable|string|max:255',
                    'quantity_spare' => 'nullable|string|max:255',
                    'status_spare' => 'nullable|string|max:255',
                    'plan_spare' => 'nullable|max:255',
                    // 'breakdown_spare' => 'nullable',
                    'remark_spare' => 'nullable',
                    'photo_spare' => 'nullable|image|max:1024',
                    'start_spare' => 'nullable',
                ]
            );
            if ($this->photo_spare) {
                $fileName = $this->photo_spare->getClientOriginalName(); // ดึงชื่อไฟล์เดิม
                $filePath = 'Image_upload/' . $fileName;

                // ตรวจสอบว่ามีไฟล์ชื่อเดียวกันอยู่ในโฟลเดอร์หรือไม่
                if (Storage::disk('public')->exists($filePath)) {
                    // เพิ่มเวลาปัจจุบันลงในชื่อไฟล์เพื่อให้ชื่อไฟล์ไม่ซ้ำกัน
                    $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . $this->photo_spare->getClientOriginalExtension();
                }

                $filePath = $this->photo_spare->storeAs('Image_upload', $fileName, 'public');
                $validateData['photo_spare'] = $filePath; // เก็บเส้นทางไฟล์ที่เก็บไว้
            }
            $validateData['id_machinery'] = $this->machinery->id;
            SparePart::create($validateData);

            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
            $this->dispatch('close-modal');
        } catch (\Throwable $th) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
        }
    }

    public function resetInputFields()
    {
        $this->id_machinery = '';
        $this->name_spare = '';
        $this->brand_spare = '';
        $this->type_spare = '';
        $this->model_spare = '';
        $this->number_spare = '';
        $this->size_spare = '';
        $this->lubricant = '';
        $this->kw_spare = '';
        $this->quantity_spare = '';
        $this->status_spare = '';
        $this->plan_spare = '';
        $this->breakdown_spare = '';
        $this->remark_spare = '';
        $this->photo_spare = '';
        $this->start_spare = '';
    }

    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        $sparepart = SparePart::find($id);
        $this->id_machinery = $sparepart->id_machinery;
        $this->name_spare = $sparepart->name_spare;
        $this->brand_spare = $sparepart->brand_spare;
        $this->type_spare = $sparepart->type_spare;
        $this->model_spare = $sparepart->model_spare;
        $this->number_spare = $sparepart->number_spare;
        $this->size_spare = $sparepart->size_spare;
        $this->lubricant = $sparepart->lubricant;
        $this->kw_spare = $sparepart->kw_spare;
        $this->quantity_spare = $sparepart->quantity_spare;
        $this->status_spare = $sparepart->status_spare;
        $this->breakdown_spare = $sparepart->breakdown_spare;
        $this->remark_spare = $sparepart->remark_spare;
        $this->photo_spare = $sparepart->photo_spare;
        if ($sparepart) {
            $this->start_spare = date_format(date_create($sparepart->start_spare), "Y-m-d");
            $this->plan_spare = date_format(date_create($sparepart->plan_spare), "Y-m-d");
        } else {
            return redirect()->back()->with('error', '');
        }
    }

    public function updateSparePart()
    {
        try {
            $validateData = $this->validate(
                [
                    'id_machinery' => 'required|string|max:255',
                    'name_spare' => 'required|string|max:255',
                    'brand_spare' => 'nullable|string|max:255',
                    'type_spare' => 'nullable|string|max:255',
                    'model_spare' => 'nullable|string|max:255',
                    'number_spare' => 'nullable|string|max:255',
                    'size_spare' => 'nullable|string|max:255',
                    'lubricant' => 'nullable|string|max:255',
                    'kw_spare' => 'nullable|string|max:255',
                    'quantity_spare' => 'nullable|string|max:255',
                    'status_spare' => 'nullable|string|max:255',
                    'plan_spare' => 'nullable|date',
                    // 'breakdown_spare' => 'nullable',
                    'remark_spare' => 'nullable',
                    'photo_spare' => 'nullable|image|max:3072',
                    'start_spare' => 'nullable|date',
                ]
            );

            $sparepart = SparePart::findOrFail($this->updateId);

            if ($this->photo_spare) {
                $fileName = $this->photo_spare->getClientOriginalName(); // ดึงชื่อไฟล์เดิม
                $filePath = 'Image_upload/' . $fileName;

                // ตรวจสอบว่ามีไฟล์ชื่อเดียวกันอยู่ในโฟลเดอร์หรือไม่
                if (Storage::disk('public')->exists($filePath)) {
                    // เพิ่มเวลาปัจจุบันลงในชื่อไฟล์เพื่อให้ชื่อไฟล์ไม่ซ้ำกัน
                    $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . $this->photo_spare->getClientOriginalExtension();
                }

                $filePath = $this->photo_spare->storeAs('Image_upload', $fileName, 'public');
                $validateData['photo_spare'] = $filePath; // เก็บเส้นทางไฟล์ที่เก็บไว้
            }
            $validateData['id_machinery'] = $this->machinery->id;

            $sparepart->update($validateData);

            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "อัพเดทข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
            $this->dispatch('close-modal');
        } catch (\Throwable $th) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1600
            );
        }
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $sparepart = SparePart::find($id);

        if ($sparepart) {
            $this->dispatch(
                'alertconfirmDelete',
                [
                    'deleteId' => $this->deleteId,
                ]
            );
        } else {
            session()->flash('error', 'User not found.');
        }
    }

    public function deleteItem()
    {
        $sparepart = SparePart::find($this->deleteId);
        if ($sparepart->photo_spare) {
            Storage::delete('public/' . $sparepart->photo_spare);
        }
        if ($sparepart) {
            $sparepart->delete();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1600
            );
        } else {
            session()->flash('error', 'Computer not found.');
        }
    }
}
