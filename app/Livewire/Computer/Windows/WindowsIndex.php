<?php

namespace App\Livewire\Computer\Windows;

use App\Models\Windows;
use Livewire\Component;
use Livewire\WithPagination;

class WindowsIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public Windows $windows;
    public $deleteId;
    public $updateId;
    public $version;
    public $licensed;
    public $type;
    public $buy;
    public $status = '';
    public $remark;
    public $currentPath;


    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected $rules = [
        'version' => 'required|string|max:255',
        'licensed' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'buy' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'remark' => 'nullable',
    ];
    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(Windows $windows)
    {
        $this->windows = $windows;
        $this->currentPath = request()->path();
    }

    public function render()
    {
        $wins = Windows::orderby('id', 'desc')->get();
        return view('livewire.computer.windows.windows-index', [
            'wins' => $wins,
            'currentPath' => $this->currentPath,
        ]);
    }
    public function addWindows()
    {
        $this->edit = false;
    }
    public function saveWindows()
    {
        try {

            $validateData = $this->validate(
                [
                    'version' => 'required|string|max:255',
                    'licensed' => 'required|string|max:255',
                    'type' => 'required|string|max:255',
                    'buy' => 'required|string|max:255',
                    'status' => 'required|string|max:255',
                    'remark' => 'nullable',
                ]
            );
            Windows::create($validateData);


            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 2000
            );
            $this->dispatch('close-modal');
        } catch (\Throwable $th) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 2000
            );
        }
    }


    public function resetInputFields()
    {
        $this->version = '';
        $this->licensed = '';
        $this->type = '';
        $this->buy = '';
        $this->status = '';
        $this->remark = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        $wins = Windows::find($id);
        $this->version = $wins->version;
        $this->licensed = $wins->licensed;
        $this->type = $wins->type;
        $this->buy = $wins->buy;
        $this->status = $wins->status;
        $this->remark = $wins->remark;
    }

    public function updateWindows()
    {
        try {
            $validateData = $this->validate(
                [
                    'version' => 'required|string|max:255',
                    'licensed' => 'required|string|max:255',
                    'type' => 'required|string|max:255',
                    'buy' => 'required|string|max:255',
                    'status' => 'required|string|max:255',
                    'remark' => 'nullable',
                ]
            );
            $wins = Windows::where('id', $this->updateId)->first();
            $wins->update($validateData);

            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "อัพเดทข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 2000
            );
            $this->dispatch('close-modal');
        } catch (\Throwable $th) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 2000
            );
        }
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $wins = Windows::find($id);

        if ($wins) {
            $this->dispatch(
                'alertconfirmDelete',
                [
                    'deleteId' => $this->deleteId,
                    'code' => 'prasit',
                ]
            );
        } else {
            // จัดการกรณีที่ไม่พบผู้ใช้
            session()->flash('error', 'User not found.');
        }
    }

    public function deleteItem()
    {
        $wins = Windows::find($this->deleteId);
        if ($wins) {
            $wins->delete();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 2000
            );
        } else {
            session()->flash('error', 'Computer not found.');
        }
    }
}
