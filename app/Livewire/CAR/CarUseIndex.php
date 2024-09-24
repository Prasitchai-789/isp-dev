<?php

namespace App\Livewire\CAR;

use Carbon\Carbon;
use App\Models\HRE\Emp;
use Livewire\Component;
use App\Models\CAR\CarUse;
use Livewire\WithPagination;
use App\Models\CAR\CarReport;
use App\Models\HRE\CarRequest;
use App\Models\HRE\Department;


class CarUseIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'deleteConfirmed' => 'deleteItem',
    ];
    public $edit = false;
    public $deleteId;
    public $updateId;
    public CarUse $carUse;
    public $card_id;
    public $car_id;
    public $user_request;
    public $use_job;
    public $use_start;
    public $use_end;
    public $use_distance;
    public $use_status;
    public $endId;
    public $carId;
    public $user_name;
    public $car;
    public $car_province;

    protected $rules = [
        'card_id' => 'nullable|string|max:255',
        'car_id' => 'nullable|string|max:255',
        'user_request' => 'nullable|string|max:255',
        'use_job' => 'nullable|string|max:255',
        'use_start' => 'nullable|string|max:255',
        'use_end' => 'nullable|string|max:255',
        'use_distance' => 'nullable|string|max:255',
        'use_status' => 'nullable|string|max:255',
    ];
    public function mount(CarUse $carUse)
    {
        $this->carUse = $carUse;
    }

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }
    public function render()
    {
        Carbon::setLocale('th');
        $carReports = CarReport::with(['province', 'brand'])->orderBy('id', 'desc')->get();
        $carRequests = CarRequest::with(['emp', 'department', 'car'])
            ->where(function ($query) {
                $query->where('additionalNotes_request', '!=', 1)
                    ->orWhereNull('additionalNotes_request');
            })
            ->orderBy('id', 'desc')
            ->get();
        $carUses = CarUse::with(['emp', 'department', 'car'])->orderBy('id', 'desc')->get();
        $users = Emp::orderBy('EmpName', 'ASC')->get();
        $departments = Department::orderBy('DeptID', 'ASC')->get();
        return view('livewire.CAR.car-use-index', [
            'carRequests' => $carRequests,
            'departments' => $departments,
            'carReports' => $carReports,
            'users' => $users,
            'carUses' => $carUses,
        ]);
    }
    //  public function addCarUse()
    // {
    //     $this->edit = false;
    // }

    public function addCarUse($id)
    {
        try {
            $carRequest = CarRequest::findOrFail($id);
            $carReport = CarReport::findOrFail($carRequest->car_request);
            $this->user_request = $carRequest->user_request;
            $this->car_id = $carRequest->car_request;
            $this->use_job = $carRequest->job_request;
            $this->use_start = $carReport->car_mileage;
            $this->use_status = 1;
            $this->card_id = '';

            $carUse = new CarUse(); // สมมุติว่าเป็น Model ชื่อ CarUse
            $carUse->card_id = $this->card_id;
            $carUse->user_request = $this->user_request;
            $carUse->car_id = $this->car_id;
            $carUse->use_job = $this->use_job;
            $carUse->use_start = $this->use_start;
            $carUse->use_status = $this->use_status;

            $carRequest->update([
                'additionalNotes_request' => 1,
            ]);
            $carUse->save();
            $this->dispatch('close-modal');
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
    public function end($id)
    {
        $this->endId = $id;
        $carUse = CarUse::with(['emp','car'])->findOrFail($id);
        $carReports = CarReport::with(['province'])->findOrFail($carUse->car->id);

        $carId = CarReport::findOrFail($carUse->car_id);
        $this->carId = $carId->id;
        $this->user_request = $carUse->user_request;
        $this->user_name = $carUse->emp->EmpName;
        $this->car = $carUse->car->car_number;
        $this->car_province = $carReports->province->ProvinceName;
        $this->car_id = $carUse->car_request;
        $this->use_job = $carUse->job_request;
    }

    public function updateCarUseEnd()
    {
        try {
            $carUse = CarUse::findOrFail($this->endId);
            $carReport = CarReport::findOrFail($this->carId);
            $this->use_distance = (intval($this->use_end) - intval($carUse->use_start));
            $carUse->update([
                'use_status' => 2,
                'use_end' => $this->use_end,
                'use_distance' => $this->use_distance,
            ]);
            $carReport->update([
                'car_mileage' => $this->use_end,
            ]);
            $this->dispatch('close-modal');
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
        $this->user_request = '';
        $this->car_id = '';
        $this->use_job = '';
        $this->use_start = '';
        $this->use_status = '';
        $this->card_id = '';
    }
    public function Close()
    {
        $this->resetInputFields();
        $this->dispatch('close-modal');
    }
}
