<?php

namespace App\Livewire\Technician;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PRO\Machinery;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

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
    // public $breakdown_machinery;
    public $remark_machinery;
    public $photo_machinery;
    public $start_machinery;
    public Machinery $machinery;
    public $deleteId;
    public $updateId;
    public $message;


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
        // 'breakdown_machinery' => 'nullable|string|max:255',
        'remark_machinery' => 'nullable|string|max:255',
        // 'photo_machinery' => 'nullable|image|max:3072',
        'start_machinery' => 'nullable',
    ];

    public function mount(Machinery $machinery)
    {
        $this->machinery = $machinery;
    }


    public function render()
    {
        Carbon::setLocale('th');
        $machineries = Machinery::orderBy('id', 'desc')->get();
        if ($machineries->isEmpty()) {
            return view('livewire.Technician.machinery-index', ['machineries' => []]);
        } else {
            return view('livewire.Technician.machinery-index', [
                'machineries' => $machineries,
            ]);
        }
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
                    'plan_machinery' => 'nullable|string|max:255',
                    // 'breakdown_machinery' => 'nullable|string|max:255',
                    'remark_machinery' => 'nullable|string|max:255',
                    'photo_machinery' => 'nullable|image|max:3072',
                    'start_machinery' => 'nullable',
                ]
            );
            if ($this->photo_machinery) {

                if ($this->photo_machinery instanceof \Illuminate\Http\UploadedFile) {

                    $fileName = pathinfo($this->photo_machinery->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $this->photo_machinery->getClientOriginalExtension();


                    $filePath = 'Image_upload/' . $fileName . '.' . $extension;
                    if (Storage::disk('public')->exists($filePath)) {

                        $fileName = $fileName . '_' . time() . '.' . $extension;
                    }


                    $filePath = $this->photo_machinery->storeAs('Image_upload', $fileName, 'public');
                    $validateData['photo_machinery'] = $filePath;
                } else {

                    $validateData['photo_machinery'] = $this->photo_machinery;
                }
            }

            Machinery::create($validateData);

            $this->dispatch('close-modal');
            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
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
        // $this->breakdown_machinery = $machinery->breakdown_machinery;
        $this->remark_machinery = $machinery->remark_machinery;
        $this->photo_machinery = $machinery->photo_machinery;
        $this->start_machinery = $machinery->start_machinery ? date_format(date_create($machinery->start_machinery), "Y-m-d") : null;
        $this->plan_machinery = $machinery->plan_machinery ? date_format(date_create($machinery->plan_machinery), "Y-m-d") : null;
    }

    public function updateMachinery()
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
                    'plan_machinery' => 'nullable|string|max:255',
                    // 'breakdown_machinery' => 'nullable|string|max:255',
                    'remark_machinery' => 'nullable|string|max:255',
                    // 'photo_machinery' => 'nullable|image|max:3072',
                    'start_machinery' => 'nullable',
                ]
            );

            $machinery = Machinery::findOrFail($this->updateId);

            if ($this->photo_machinery) {
                $machinery = Machinery::findOrFail($this->updateId);


                if ($machinery->photo_machinery) {
                    Storage::delete('public/' . $machinery->photo_machinery);
                }


                if ($this->photo_machinery instanceof \Illuminate\Http\UploadedFile) {

                    $fileName = pathinfo($this->photo_machinery->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $this->photo_machinery->getClientOriginalExtension();


                    $filePath = 'Image_upload/' . $fileName . '.' . $extension;
                    if (Storage::disk('public')->exists($filePath)) {

                        $fileName = $fileName . '_' . time() . '.' . $extension;
                    }


                    $filePath = $this->photo_machinery->storeAs('Image_upload', $fileName, 'public');
                    $validateData['photo_machinery'] = $filePath;
                } else {

                    $validateData['photo_machinery'] = $this->photo_machinery;
                }
            }




            $machinery->update($validateData);
            $this->dispatch('close-modal');
            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "อัพเดทข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
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
        $machinery = Machinery::find($id);

        if ($machinery) {
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
        $machinery = Machinery::find($this->deleteId);
        if ($machinery->photo_machinery) {
            Storage::delete('public/' . $machinery->photo_machinery);
        }
        if ($machinery) {
            $machinery->delete();
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

    public function Close()
    {
        $this->resetInputFields();
        $this->dispatch('close-modal');
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
        // $this->breakdown_machinery = '';
        $this->remark_machinery = '';
        $this->photo_machinery = '';
        $this->start_machinery = '';
    }
}
