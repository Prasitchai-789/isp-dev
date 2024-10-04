<?php

namespace App\Livewire\SEC;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\SEC\PassCard;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Events\TestNotification;

class PassCardLive extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'deleteConfirmed' => 'deleteItem',
        'approvePassRequest' => 'approvePassRequest',
    ];
    public $edit = false;
    public PassCard $passCard;
    public $deleteId;
    public $updateId;
    public $prefix;
    public $first_name;
    public $last_name;
    public $id_card;
    public $birthday;
    public $address;
    public $district;
    public $county;
    public $province;
    public $car_number;
    public $pass_order;
    public $pass_dept;
    public $pass_contact;
    public $pass_remark;
    public $pass_status = 1;
    public $passRequestId;

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    public function pusher()
    {
        event(new TestNotification([]));
    }
    protected $rules = [
        'prefix' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'id_card' => 'required|string|max:255',
        'birthday' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'district' => 'nullable|string|max:255',
        'county' => 'nullable|string|max:255',
        'province' => 'nullable|string|max:255',
        'car_number' => 'nullable|string|max:255',
        'pass_dept' => 'nullable|string|max:255',
        'pass_contact' => 'nullable|string|max:255',
        'pass_remark' => 'nullable|string|max:255',
    ];

    public function mount(PassCard $passCard)
    {
        $this->passCard = $passCard;
    }
    public function addPassCard()
    {
        $this->edit = false;
    }
    public function render()
    {
        Carbon::setLocale('th');
        $passCards = PassCard::orderBy('id', 'desc')->paginate(10);
        return view('livewire.SEC.pass-card-live', [
            'passCards' => $passCards,
        ]);
    }
    public function savePassCard()
    {
        try {
            $validateData = $this->validate(
                [
                    'prefix' => 'required|string|max:255',
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'id_card' => 'required|string|max:255',
                    'birthday' => 'nullable|string|max:255',
                    'address' => 'nullable|string|max:255',
                    'district' => 'nullable|string|max:255',
                    'county' => 'nullable|string|max:255',
                    'province' => 'nullable|string|max:255',
                    'car_number' => 'nullable|string|max:255',
                    'pass_dept' => 'nullable|string|max:255',
                    'pass_contact' => 'nullable|string|max:255',
                    'pass_remark' => 'nullable|string|max:255',
                ]
            );
            $validateData['pass_status'] = 1;
            PassCard::create($validateData);

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
    public function passEnd($id)
    {
        $this->passRequestId = $id;
        $passRequest = PassCard::find($id);
        if ($passRequest) {
            $this->dispatch('confirmPassCard', [
                'passRequestId' => $this->passRequestId,
            ]);
        } else {
            session()->flash('error', 'Request not found.');
        }
    }

    public function approvePassRequest()
    {
        $passRequest = PassCard::find($this->passRequestId);
        if ($passRequest) {
            $passRequest->update([
                'pass_status' => 2,

            ]);
            session()->flash('message', 'Successfully.');
        } else {
            session()->flash('error', 'Request not found.');
        }
    }

    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        $passCard = PassCard::find($id);
        $this->prefix = $passCard->prefix;
        $this->first_name = $passCard->first_name;
        $this->last_name = $passCard->last_name;
        $this->id_card = $passCard->id_card;
        $this->birthday = $passCard->birthday;
        $this->address = $passCard->address;
        $this->district = $passCard->district;
        $this->county = $passCard->county;
        $this->province = $passCard->province;
        $this->car_number = $passCard->car_number;
        $this->pass_status = $passCard->pass_status;
        $this->pass_dept = $passCard->pass_dept;
        $this->pass_contact = $passCard->pass_contact;
        $this->pass_remark = $passCard->pass_remark;
    }
    public function updatePassCard()
    {
        try {
            $validateData = $this->validate(
                [
                    'prefix' => 'required|string|max:255',
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'id_card' => 'required|string|max:255',
                    'birthday' => 'nullable|string|max:255',
                    'address' => 'nullable|string|max:255',
                    'district' => 'nullable|string|max:255',
                    'county' => 'nullable|string|max:255',
                    'province' => 'nullable|string|max:255',
                    'car_number' => 'nullable|string|max:255',
                    'pass_dept' => 'nullable|string|max:255',
                    'pass_contact' => 'nullable|string|max:255',
                    'pass_remark' => 'nullable|string|max:255',
                ]
            );

            $passCard = PassCard::findOrFail($this->updateId);

            $passCard->update($validateData);
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
    public function closeModal()
    {
        $this->resetInputFields();
        $this->dispatch('close-modal');
    }

    public function resetInputFields()
    {
        $this->prefix = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->id_card = '';
        $this->birthday = '';
        $this->address = '';
        $this->district = '';
        $this->county = '';
        $this->province = '';
        $this->car_number = '';
        $this->pass_order = '';
        $this->pass_dept = '';
        $this->pass_contact = '';
        $this->pass_remark = '';
    }
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $passCard = PassCard::find($id);

        if ($passCard) {
            $this->dispatch(
                'alertconfirmDelete',
                [
                    'deleteId' => $this->deleteId,
                ]
            );
        } else {
            session()->flash('error', 'not found.');
        }
    }

    public function deleteItem()
    {
        $passCard = PassCard::find($this->deleteId);
        if ($passCard) {
            $passCard->delete();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1600
            );
        } else {
            session()->flash('error', 'not found.');
        }
    }
}
