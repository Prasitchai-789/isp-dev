<?php

namespace App\Livewire\Pro;

use Livewire\Component;
use App\Models\PRO\Machinery;
use App\Models\PRO\SparePart;
use Illuminate\Support\Facades\Storage;

class ReportMachineryIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $deleteId;
    public $updateId;
    public SparePart $sparepart;
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



    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected $rules = [
        'id_machinery' => 'required|string|max:255',
        'name_spare' => 'required|string|max:255',
        'brand_spare' => 'required|string|max:255',
        'type_spare' => 'nullable|string|max:255',
        'model_spare' => 'nullable|string|max:255',
        'number_spare' => 'nullable|string|max:255',
        'size_spare' => 'nullable|string|max:255',
        'lubricant' => 'nullable|string|max:255',
        'kw_spare' => 'nullable|string|max:255',
        'quantity_spare' => 'nullable|string|max:255',
        'status_spare' => 'nullable|string|max:255',
        'plan_spare' => 'nullable|max:255',
        'breakdown_spare' => 'nullable',
        'remark_spare' => 'nullable',
        'photo_spare' => 'nullable|image|max:1024',
        'start_spare' => 'nullable',
    ];

    public function mount(SparePart $sparepart)
    {
        $this->sparepart = $sparepart;
    }

    public function render()
    {
        $spareparts = SparePart::orderBy('id', 'desc')->get();
        return view('livewire.pro.report-machinery-index', [
            'spareparts' => $spareparts,
        ]);
    }

    public function addSparePart()
    {
        $this->edit = false;
    }

    public function saveSparePart()
    {
        // try {
            $validateData = $this->validate(
                [
                    // 'id_machinery' => 'required|string|max:255',
                    'name_spare' => 'required|string|max:255',
                    'brand_spare' => 'required|string|max:255',
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
            $validateData['id_machinery'] = $this->id_machinery;
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
        // } catch (\Throwable $th) {
        //     $this->dispatch(
        //         'alert',
        //         position: "center",
        //         icon: "error",
        //         title: "เกิดข้อผิดพลาด",
        //         showConfirmButton: false,
        //         timer: 1500
        //     );
        // }
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
        $this->plan_spare = $sparepart->plan_spare;
        $this->breakdown_spare = $sparepart->breakdown_spare;
        $this->remark_spare = $sparepart->remark_spare;
        $this->photo_spare = $sparepart->photo_spare;
        $this->start_spare = $sparepart->start_spare;
    }
}
