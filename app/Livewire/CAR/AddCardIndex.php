<?php

namespace App\Livewire\CAR;

use App\Models\CAR\AddCard;
use App\Models\CAR\CarReport;
use Livewire\Component;
use Livewire\WithPagination;

class AddCardIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public $deleteId;
    public $updateId;
    public AddCard $addCard;
    public $card_number;
    public $car_id;

    protected $rules = [
        'card_number' => 'required|string|max:255|unique:add_cards,card_number',
        'car_id' => 'required|string|max:255',
    ];
    public function mount(AddCard $addCard)
    {
        $this->addCard = $addCard;
    }

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    public function render()
    {
        $addCards = AddCard::with('carReport.province')->orderBy('id', 'desc')->get();
        $carReports = CarReport::with('province')
            ->where('car_card', 0)
            ->orderBy('id', 'desc')
            ->get();
        return view('livewire.CAR.add-card-index', [
            'addCards' => $addCards,
            'carReports' => $carReports,
        ]);
    }

    public function addCard()
    {
        $this->edit = false;
    }
    public function saveCard()
    {
        try {
            $validatedData = $this->validate([
                'card_number' => 'required|string|max:255|unique:add_cards,card_number',
                'car_id' => 'string|max:255',
            ]);

            $carReport = CarReport::findOrFail($validatedData['car_id']);
            $carReport->update([
                'car_card' => 1
            ]);

            AddCard::create($validatedData);

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
        } catch (\Exception $e) {
            session()->flash('error', 'เกิดข้อผิดพลาด: ' . $e->getMessage());
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
            $this->dispatch('close-modal');
        }
    }

    public function resetInputFields()
    {
        $this->card_number = '';
        $this->car_id = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $addCard = AddCard::findOrFail($id);
        $this->card_number = $addCard->card_number;
        $this->car_id = $addCard->car_id;
    }

    public function updateCard()
    {
        try {
            $validatedData = $this->validate([
                'card_number' => 'required|string|max:255|unique:add_cards,card_number,' . $this->updateId,
                'car_id' => 'required|string|max:255',
            ]);

            $carReport = CarReport::findOrFail($validatedData['car_id']);
            $carReport->update([
                'car_card' => 1
            ]);

            $addCard = AddCard::findOrFail($this->updateId);

            $addCard->update($validatedData);

            // $this->edit = false;
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
        } catch (\Exception $e) {

            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
            $this->dispatch('close-modal');
        }
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $addCard = AddCard::find($id);

        if ($addCard) {
            $this->dispatch('alertconfirmDelete', [
                'deleteId' => $this->deleteId,
            ]);
        } else {
            session()->flash('error', 'Report Car not found.');
        }
    }

    public function deleteItem()
    {
        $addCard = AddCard::find($this->deleteId);
        $carReport = CarReport::findOrFail($addCard->car_id);

        $carReport->update([
            'car_card' => 0
        ]);

        if ($addCard) {
            $addCard->delete();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
        } else {
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

    public function Close()
    {
        $this->resetInputFields();
        $this->dispatch('close-modal');
    }
}
