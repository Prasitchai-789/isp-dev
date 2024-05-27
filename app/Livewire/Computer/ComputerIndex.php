<?php

namespace App\Livewire\Computer;

use App\Models\Computer;
use GuzzleHttp\Promise\Create;
use Illuminate\Console\Command;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ComputerIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public $code_com;
    public $cpu;
    public $socket;
    public $ram;
    public $storage;
    public $cd_rom;
    public $graphice;
    public $mainboard;
    public $model;
    public $monitor;
    public $os;
    public $photo;
    public    $service_tag;
    public    $remark;
    public Computer $computer;
    public $deleteId;
    public $updateId;




    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected $rules = [
        'code_com' => 'required|string|max:255',
        'cpu' => 'required|string|max:255',
        'socket' => 'required|string|max:255',
        'ram' => 'required|string|max:255',
        'storage' => 'required|string|max:255',
        'cd_rom' => 'required|string|max:255',
        'graphice' => 'required|string|max:255',
        'mainboard' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'service_tag' => 'required|string|max:255',
        'monitor' => 'nullable',
        'os' => 'nullable',
        'photo' => 'nullable',
        'remark' => 'nullable',
    ];
    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(Computer $computer)
    {
        $this->computer = $computer;
    }
    public function render()
    {
        $computers = Computer::orderBy('id', 'desc')->get();
        return view('livewire.computer.computer-index', [
            'computers' => $computers,
        ]);
    }

    public function addComputer()
    {
        $this->edit = false;
    }
    public function saveComputer()
    {
        try {
            $validateData = $this->validate(
                [
                    'code_com' => 'required|string|max:255',
                    'cpu' => 'required|string|max:255',
                    'socket' => 'required|string|max:255',
                    'ram' => 'required|string|max:255',
                    'storage' => 'required|string|max:255',
                    'cd_rom' => 'required|string|max:255',
                    'graphice' => 'required|string|max:255',
                    'mainboard' => 'required|string|max:255',
                    'model' => 'required|string|max:255',
                    'service_tag' => 'required|string|max:255',
                    'monitor' => 'nullable',
                    'os' => 'nullable',
                    'photo' => 'nullable',
                    'remark' => 'nullable',
                ]
            );
            Computer::create($validateData);

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
        $this->code_com = '';
        $this->cpu = '';
        $this->socket = '';
        $this->ram = '';
        $this->storage = '';
        $this->cd_rom = '';
        $this->graphice = '';
        $this->mainboard = '';
        $this->model = '';
        $this->service_tag = '';
        $this->remark = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        $computer = Computer::find($id);
        $this->code_com = $computer->code_com;
        $this->cpu = $computer->cpu;
        $this->socket = $computer->socket;
        $this->ram = $computer->ram;
        $this->storage = $computer->storage;
        $this->cd_rom = $computer->cd_rom;
        $this->graphice = $computer->graphice;
        $this->mainboard = $computer->mainboard;
        $this->model = $computer->model;
        $this->service_tag = $computer->service_tag;
        $this->remark = $computer->coremarkde_com;
    }

    public function updateComputer()
    {
        try {
            $validateData = $this->validate(
                [
                    'code_com' => 'required|string|max:255',
                    'cpu' => 'required|string|max:255',
                    'socket' => 'required|string|max:255',
                    'ram' => 'required|string|max:255',
                    'storage' => 'required|string|max:255',
                    'cd_rom' => 'required|string|max:255',
                    'graphice' => 'required|string|max:255',
                    'mainboard' => 'required|string|max:255',
                    'model' => 'required|string|max:255',
                    'service_tag' => 'required|string|max:255',
                    'monitor' => 'nullable',
                    'os' => 'nullable',
                    'photo' => 'nullable',
                    'remark' => 'nullable',
                ]
            );
            $computer = Computer::where('id', $this->updateId)->first();
            $computer->update($validateData);

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
                timer: 1500
            );
        }
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $computer = Computer::find($id);

        if ($computer) {
            $this->dispatch('alertconfirmDelete',
            [
                'deleteId' => $this->deleteId,
                'code' => 'prasit',
        ]);
        } else {
            // จัดการกรณีที่ไม่พบผู้ใช้
            session()->flash('error', 'User not found.');
        }
    }

    public function deleteItem()
    {
        $computer = Computer::find($this->deleteId);
        if ($computer) {
            $computer->delete();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
        } else {
            session()->flash('error', 'Computer not found.');
        }
    }
}