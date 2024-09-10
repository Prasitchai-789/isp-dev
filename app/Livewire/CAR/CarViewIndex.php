<?php

namespace App\Livewire\CAR;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\CAR\CarRepair;
use App\Models\CAR\CarReport;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CarViewIndex extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public $deleteId;
    public $updateId;
    public CarReport $carReport;
    public $car_photo;
    public $carReportId;
    public $car_id;
    public $car_issue;
    public $car_plan = 1;
    public $car_canDrive = 1;
    public $car_lastMaintenanceDate;
    public $car_preferredRepairDate;
    public $car_garage;
    public $car_warrantyInfo;
    public $car_additionalNotes;
    public $car_requesterName;


    protected $rules = [
        'car_id' => 'required|string|max:255',
        'car_issue' => 'required|string|max:255',
        'car_plan' => 'boolean',
        'car_canDrive' => 'boolean',
        'car_lastMaintenanceDate' => 'required|date',
        'car_preferredRepairDate' => 'required|date',
        'car_garage' => 'nullable|string',
        'car_warrantyInfo' => 'nullable|date|max:100',
        'car_additionalNotes' => 'nullable|string|max:100',
        'car_requesterName' => 'nullable|string',
    ];
    public function mount(CarReport $carReportId)
    {
        $this->carReport = CarReport::findOrFail($carReportId->id);
        $this->car_id = $this->carReport->id;
    }

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }
    public function render()
    {
        Carbon::setLocale('th');
        $carReports = CarReport::orderBy("id", 'ASC')->get();
        $carRepairs = CarRepair::orderBy("id", 'ASC')->get();
        return view('livewire.CAR.car-view-index', [
            'carReport' => $this->carReport,
            'carReports' => $carReports,
            'carRepairs' => $carRepairs,
        ]);
    }

    public function addCarRepair()
    {
        $this->edit = false;
    }
    public function Close()
    {
        $this->resetInputFields();
        $this->dispatch('close-modal');
    }
    public function resetInputFields()
    {
        $this->car_id = '';
        $this->car_issue = '';
        $this->car_plan = '';
        $this->car_canDrive = '';
        $this->car_lastMaintenanceDate = '';
        $this->car_preferredRepairDate = '';
        $this->car_garage = '';
        $this->car_warrantyInfo = '';
        $this->car_additionalNotes = '';
        $this->car_requesterName = '';
    }

    public function confirmEdit($id)
    {
        $this->edit = true;
        $this->updateId = $id;
        $carRepair = CarRepair::findOrFail($id);
        $this->car_id = $carRepair->car_id;
        $this->car_issue = $carRepair->car_issue;
        $this->car_plan = $carRepair->car_plan;
        $this->car_canDrive = $carRepair->car_canDrive;
        $this->car_lastMaintenanceDate = $carRepair->car_lastMaintenanceDate ? date_format(date_create($carRepair->car_lastMaintenanceDate), "Y-m-d") : null;
        $this->car_preferredRepairDate = $carRepair->car_preferredRepairDate ? date_format(date_create($carRepair->car_preferredRepairDate), "Y-m-d") : null;
        $this->car_garage = $carRepair->car_garage;
        $this->car_warrantyInfo = $carRepair->car_warrantyInfo;
        $this->car_additionalNotes = $carRepair->car_additionalNotes;
        $this->car_requesterName = $carRepair->car_requesterName;
    }

    public function saveCarRepair()
    {
        try {
            $validatedData = $this->validate([
                // 'car_id' => 'required|string|max:255',
                'car_issue' => 'required|string|max:255',
                'car_plan' => 'boolean',
                'car_canDrive' => 'boolean',
                'car_lastMaintenanceDate' => 'required|date',
                'car_preferredRepairDate' => 'required|date',
                'car_garage' => 'nullable|string',
                'car_warrantyInfo' => 'nullable|date|max:100',
                'car_additionalNotes' => 'nullable|string|max:100',
                'car_requesterName' => 'nullable|string',
            ]);
            $validatedData['car_id'] = $this->car_id;
            CarRepair::create($validatedData);

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
        }
    }

    public function updateCarRepair()
    {
        try {
            $validatedData = $this->validate([
                'car_id' => 'required|string|max:255',
                'car_issue' => 'required|string|max:255',
                'car_plan' => 'boolean',
                'car_canDrive' => 'boolean',
                'car_lastMaintenanceDate' => 'required|date',
                'car_preferredRepairDate' => 'required|date',
                'car_garage' => 'nullable|string',
                'car_warrantyInfo' => 'nullable|date|max:100',
                'car_additionalNotes' => 'nullable|string|max:100',
                'car_requesterName' => 'nullable|string',
            ]);


            $carRepair = CarRepair::findOrFail($this->updateId);
            $carRepair->update($validatedData);

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
        }
    }
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $carRepair = CarRepair::find($id);

        if ($carRepair) {
            $this->dispatch('alertconfirmDelete', [
                'deleteId' => $this->deleteId,
            ]);
        } else {
            session()->flash('error', 'Report Car not found.');
        }
    }
    public function deleteItem()
    {
        $carRepair = CarRepair::find($this->deleteId);

        if ($carRepair) {
            $carRepair->delete();

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
}
