<?php

namespace App\Livewire\HRE;

use DateTime;
use Carbon\Carbon;
use App\Models\HRE\Emp;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CAR\CarReport;
use App\Models\HRE\CarRequest;
use App\Models\HRE\Department;
use App\Http\Notify\LineNotify;
use App\Events\TestNotification;
use Illuminate\Support\Facades\Auth;

class CarRequestIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'deleteConfirmed' => 'deleteItem',
        'approveCarRequest' => 'approveCarRequest',
        'rejectCarRequest' => 'rejectCarRequest'
    ];
    public $edit = false;
    public $deleteId;
    public $updateId;
    public CarRequest $carRequest;
    public $user_request;
    public $job_request;
    public $department_request;
    public $approver_request;
    public $status_request = 0;
    public $car_request;
    public $additionalNotes_request;
    public $carRequestId;

    protected $rules = [
        'user_request' => 'required|string|max:255',
        'job_request' => 'nullable|string|max:255',
        'department_request' => 'required|string|max:255',
        'approver_request' => 'nullable|string|max:255',
        // 'status_request' => 'nullable|string|max:255',
        'car_request' => 'nullable|string|max:255',
        'additionalNotes_request' => 'nullable|string|max:255',
    ];
    public function mount(CarRequest $carRequest)
    {
        $this->carRequest = $carRequest;
        $this->approver_request = Auth::user()->name;
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
        $carRequests = CarRequest::with(['emp', 'department', 'car'])->orderBy('id', 'desc')->get();
        $users = Emp::orderBy('EmpName', 'ASC')->get();
        $departments = Department::orderBy('DeptID', 'ASC')->get();
        return view('livewire.HRE.car-request-index', [
            'carRequests' => $carRequests,
            'departments' => $departments,
            'carReports' => $carReports,
            'users' => $users,
        ]);
    }
    public function addRequest()
    {
        $this->edit = false;
    }

    public function saveCarRequest()
    {
        try {
            $validatedData = $this->validate([
                'user_request' => 'required|string|max:255',
                'job_request' => 'nullable|string|max:255',
                'department_request' => 'required|string|max:255',
                // 'approver_request' => 'nullable|string|max:255',
                // 'status_request' => 'nullable|string|max:255',
                'car_request' => 'nullable|string|max:255',
                'additionalNotes_request' => 'nullable|string|max:255',
            ]);

            CarRequest::create($validatedData);
            $empName = Emp::where('EmpID', '=', $validatedData['user_request'])->get();
            $carReports = CarReport::with(['province'])->where('id', '=', $validatedData['car_request'])->get();

            $header = "แจ้งขออนุญาต";
            $user_name = $empName[0]->EmpName;
            $jop = $this->job_request;
            $car_number = $carReports[0]->car_number ." ". $carReports[0]->province->ProvinceName;
            $token = "B2OdLlX2hjFy1azXo3HTqPADhHBK2sW1dZVyWtKGFL9"; //แจ้งขออนุญาต
            $message = $header .
                "\n" . "🙋‍♂️ : " . $user_name .
                "\n" . "💼 : "  . $jop .
                "\n" . "🚘 : " . $car_number .
                "\n" . "🌐 : "  . "isanpalm.dyndns.info:8001";

            $lineNotify = new LineNotify();
            $lineNotify->sendLine($message, $token);

            event(new TestNotification([
                'author' => $this->user_request,
                'title' => $this->car_request,
            ]));

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
        $this->user_request = '';
        $this->job_request = '';
        $this->department_request = '';
        $this->approver_request = '';
        $this->car_request = '';
        $this->additionalNotes_request = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = true;
        $this->updateId = $id;
        $carRequest = CarRequest::findOrFail($id);
        $this->user_request = $carRequest->user_request;
        $this->job_request = $carRequest->job_request;
        $this->department_request = $carRequest->department_request;
        $this->approver_request = $carRequest->approver_request;
        $this->car_request = $carRequest->car_request;
        $this->additionalNotes_request = $carRequest->additionalNotes_request;
    }
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $carRequest = CarRequest::find($id);

        if ($carRequest) {
            $this->dispatch('alertconfirmDelete', [
                'deleteId' => $this->deleteId,
            ]);
        } else {
            session()->flash('error', 'Report Car not found.');
        }
    }

    public function deleteItem()
    {
        $carRequest = CarRequest::find($this->deleteId);

        if ($carRequest) {
            $carRequest->delete();
            event(new TestNotification([
                'author' => $this->user_request,
                'title' => $this->car_request,
            ]));
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

    public function confirmApprove($id)
    {
        $this->carRequestId = $id;
        $carRequest = CarRequest::find($id);
        if ($carRequest) {
            $this->dispatch('confirmApprove', [
                'carRequestId' => $this->carRequestId,
            ]);
        } else {
            session()->flash('error', 'Car Request not found.');
        }
    }

    public function approveCarRequest()
    {
        $carRequest = CarRequest::find($this->carRequestId);
        if ($carRequest) {
            $carRequest->update([
                'status_request' => 1,
                'approver_request' => Auth::user()->name,
            ]);
            event(new TestNotification([
                'author' => $this->user_request,
                'title' => $this->car_request,
            ]));
            session()->flash('message', 'Car Request Approved Successfully.');
        } else {
            session()->flash('error', 'Car Request not found.');
        }
    }

    public function rejectCarRequest()
    {
        $carRequest = CarRequest::find($this->carRequestId);
        if ($carRequest) {
            $carRequest->update([
                'status_request' => 2,
                'approver_request' => Auth::user()->name,
            ]);
            event(new TestNotification([
                'author' => $this->user_request,
                'title' => $this->car_request,
            ]));
            session()->flash('message', 'Car Request Rejected Successfully.');
        } else {
            session()->flash('error', 'Car Request not found.');
        }
    }
}
