<?php

namespace App\Livewire\PRO;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PRO\Machinery;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class MachineryIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public $name_machinery;
    public $number_machinery;
    public $register_machinery;
    public $job_machinery;
    public $agency_machinery;
    public $type;
    public $status_machinery;
    public $plan_machinery;
    public $breakdown_machinery;
    public $remark_machinery;
    public $photo_machinery;
    public $start_machinery;
    public Machinery $machinery;
    public $deleteId;
    public $updateId;

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected $rules = [
        'name_machinery' => 'required|string|max:255',
        'number_machinery' => 'required|string|max:255',
        'register_machinery' => 'required|string|max:255',
        'job_machinery' => 'nullable|string|max:255',
        'agency_machinery' => 'nullable|string|max:255',
        'type' => 'nullable|string|max:255',
        'status_machinery' => 'nullable|string|max:255',
        'plan_machinery' => 'nullable|string|max:255',
        'breakdown_machinery' => 'nullable|string|max:255',
        'remark_machinery' => 'nullable|string|max:255',
        'photo_machinery' => 'nullable|image|max:1024',
        'start_machinery' => 'nullable',
    ];

    public function mount(Machinery $machinery)
    {
        $this->machinery = $machinery;
    }

    public function render()
    {
        $machinerys = Machinery::orderBy('id', 'desc')->get();
        return view('livewire.pro.machinery-index', [
            'machinerys' => $machinerys,
        ]);
    }

    public function addMachinery()
    {
        $this->edit = false;
    }

    public function saveMachinery()
    {
        try {
            $validateData = $this->validate(
                [
                    'name_machinery' => 'required|string|max:255',
                    'number_machinery' => 'required|string|max:255',
                    'register_machinery' => 'required|string|max:255',
                    'job_machinery' => 'nullable|string|max:255',
                    'agency_machinery' => 'nullable|string|max:255',
                    'type' => 'nullable|string|max:255',
                    'status_machinery' => 'nullable|string|max:255',
                    // 'plan_machinery' => 'nullable|string|max:255',
                    // 'breakdown_machinery' => 'nullable|string|max:255',
                    'remark_machinery' => 'nullable|string|max:255',
                    'photo_machinery' => 'nullable|image|max:1024',
                    // 'start_machinery' => 'nullable',
                ]
            );
            if ($this->photo_machinery) {
                $fileName = $this->photo_machinery->getClientOriginalName(); // ดึงชื่อไฟล์เดิม
                $filePath = 'Image_upload/' . $fileName;

                // ตรวจสอบว่ามีไฟล์ชื่อเดียวกันอยู่ในโฟลเดอร์หรือไม่
                if (Storage::disk('public')->exists($filePath)) {
                    // เพิ่มเวลาปัจจุบันลงในชื่อไฟล์เพื่อให้ชื่อไฟล์ไม่ซ้ำกัน
                    $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . $this->photo_machinery->getClientOriginalExtension();
                }

                $filePath = $this->photo_machinery->storeAs('Image_upload', $fileName, 'public');
                $validateData['photo_machinery'] = $filePath; // เก็บเส้นทางไฟล์ที่เก็บไว้
            }
            Machinery::create($validateData);

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
        $this->name_machinery = '';
        $this->number_machinery = '';
        $this->register_machinery = '';
        $this->job_machinery = '';
        $this->agency_machinery = '';
        $this->type = '';
        $this->status_machinery = '';
        $this->plan_machinery = '';
        $this->breakdown_machinery = '';
        $this->remark_machinery = '';
        $this->photo_machinery = '';
        $this->start_machinery = '';
    }

    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        $machinery = Machinery::find($id);
        $this->name_machinery = $machinery->name_machinery;
        $this->number_machinery = $machinery->number_machinery;
        $this->register_machinery = $machinery->register_machinery;
        $this->job_machinery = $machinery->job_machinery;
        $this->agency_machinery = $machinery->agency_machinery;
        $this->type = $machinery->type;
        $this->status_machinery = $machinery->status_machinery;
        $this->plan_machinery = $machinery->plan_machinery;
        $this->breakdown_machinery = $machinery->breakdown_machinery;
        $this->remark_machinery = $machinery->remark_machinery;
        $this->photo_machinery = $machinery->photo_machinery;
        $this->start_machinery = $machinery->start_machinery;
    }
}
