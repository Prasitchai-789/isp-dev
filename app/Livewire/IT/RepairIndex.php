<?php

namespace App\Livewire\IT;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Notify\LineNotify;
use App\Models\Technical\TypeWork;
use Illuminate\Support\Facades\DB;
use App\Models\Technical\WorkOrder;

class RepairIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public WorkOrder $workOrder;
    public $deleteId;
    public $updateId;
    public $typework;
    public $filterType = "";
    public $NameOfInformant;
    public $Status = 1;
    public $created_at;
    public $updated_at;
    public $TypeWork;
    public $Number;
    public $MachineName;
    public $MachineCode;
    public $Detail;
    public $Location;
    public $Telephone;
    public $WorkStatus;
    public $Technician;
    public $RepairReport;
    public $RepairDate;
    public $Remark;
    public $Image;

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected function rules()
    {
        return [
            // 'Date' => 'required | Date',
            'NameOfInformant' => 'required',
            'Status' => 'required',
            'TypeWork' => 'required',
            'Number' => 'nullable',
            'MachineName' => 'required',
            'MachineCode' => 'required',
            'Detail' => 'required',
            'Location' => 'nullable',
            'Telephone' => 'required',
            'WorkStatus' => 'nullable',
            'Technician' => 'required',
            'RepairReport' => 'required',
            'RepairDate' => 'nullable',
            'Remark' => 'nullable',
            'Image' => 'nullable',
        ];
    }


    public function generateReferenceNumber()
    {
        $yearTH = date('Y') + 543;
        $shortYear = substr($yearTH, 2);

        $month = date('m');
        $workOrder = WorkOrder::where('TypeWork', 1)->orderBy('id', 'desc')->first();

        if ($workOrder) {

            $latestNumber = $workOrder->Number;

            $latestNumber = (int)substr($workOrder->Number, -3);
            $newNumber = $latestNumber + 1;
        } else {
            $latestNumber = null;
        }
        $referenceNumber = sprintf('IT%s%s%03d', $shortYear, $month, $newNumber);
        return $referenceNumber;
    }
    public function addWorkOrder()
    {
        $this->edit = false;
    }

    public function setFilterType($value)
    {
        $this->filterType = $value;
    }

    public function render()
    {
        $query = WorkOrder::query();
        if ($this->filterType != "") {
            $query->where("Status", $this->filterType);
        } else {
        }

        $typeWorks = TypeWork::orderBy('TypeWorkID', 'ASC')->get();
        $workOrders = $query->orderBy('id', 'DESC')
            ->orderBy('updated_at', 'DESC')
            ->paginate(15);
        if ($workOrders->isNotEmpty()) {
            $typeWorkID = $typeWorks[0]->TypeWorkID;
            $type = TypeWork::where('TypeWorkID', $typeWorkID)->first();
            if ($type) {
                $this->typework = $type->TypeWork;
            } else {
                $this->typework = 'ไม่พบข้อมูล TypeWork';
            }
        } else {
            $this->typework = 'ไม่มีข้อมูล TypeWork ID';
        }


        $CountStatus1 = WorkOrder::where('Status', 1)
            ->whereNull('deleted_at')
            ->count();
        $CountStatus2 = WorkOrder::where('Status', 2)
            ->whereNull('deleted_at')
            ->count();
        $CountStatus3 = WorkOrder::where('Status', 3)
            ->whereNull('deleted_at')
            ->count();
        $CountStatus4 = WorkOrder::where('Status', 4)
            ->whereNull('deleted_at')
            ->count();
        $CountStatus5 = WorkOrder::where('Status', 5)
            ->whereNull('deleted_at')
            ->count();

        $workOrders = WorkOrder::orderBy('id', 'desc')
            ->paginate(10);
        return view('livewire.IT.repair-index', [
            'workOrders' => $workOrders,
            'typeWorks' => $typeWorks,
        ]);
    }
    public function saveTypeWorkOrder()
    {
        $validatedData = $this->validate([
            'TypeWork' => 'required',
        ]);
        DB::transaction(function () use ($validatedData) {
            TypeWork::create($validatedData);
        });
        $this->dispatch(
            'alert',
            position: "center",
            icon: "success",
            title: "บันทึกข้อมูลสำเร็จ",
            showConfirmButton: false,
            timer: 1500
        );
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function saveWorkOrder()
    {
        try {
            $validatedData = $this->validate([
                'NameOfInformant' => 'required',
                'Status' => 'required',
                'TypeWork' => 'required',
                'MachineName' => 'required',
                'MachineCode' => 'required',
                'Detail' => 'required',
                'Location' => 'nullable',
                'Telephone' => 'nullable',
                'Number' => 'nullable',
            ]);

            $validatedData['Number'] = $this->generateReferenceNumber();
            DB::transaction(function () use ($validatedData) {
                WorkOrder::create($validatedData);
            });
            if ($this->TypeWork == 1) {
                $header = "แจ้งซ่อม";
                $name = $this->NameOfInformant;
                $type = TypeWork::where('TypeWorkID', $validatedData['TypeWork'])->first()->TypeWork;
                $MachineName = $this->MachineName;
                $Detail = $this->Detail;
                $Location = $this->Location;
                $Telephone = $this->Telephone;
                //IT
                $token = "jrrXorziVwPvBqVGT6KSHxaFHcGMR4jgWgvuDlhF2YY";
                $message = $header .
                    "\n" . "ชื่อผู้แจ้ง: " . $name .
                    "\n" . "ประเภท: " . $type .
                    "\n" . "ชื่อเครื่อง: " . $MachineName .
                    "\n" . "รายละเอียด: " . $Detail .
                    "\n" . "สถานที่: " . $Location .
                    "\n" . "เบอร์: " . $Telephone;
            } else {
                $header = "แจ้งซ่อม";
                $name = $this->NameOfInformant;
                $type = TypeWork::where('TypeWorkID', $validatedData['TypeWork'])->first()->TypeWork;
                $MachineName = $this->MachineName;
                $Detail = $this->Detail;
                $Location = $this->Location;
                $Telephone = $this->Telephone;

                $token = "lIUwI7lXmUKstWmHJENkRAerhEFnNvCUxyAhWSn4MiM";
                $message = $header .
                    "\n" . "ชื่อผู้แจ้ง: " . $name .
                    "\n" . "ประเภท: " . $type .
                    "\n" . "ชื่อเครื่อง: " . $MachineName .
                    "\n" . "รายละเอียด: " . $Detail .
                    "\n" . "สถานที่: " . $Location .
                    "\n" . "เบอร์: " . $Telephone;
            }
            $lineNotify = new LineNotify();
            $lineNotify->sendLine($message, $token);
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
            $this->reset();
            $this->resetInputFields();
            $this->dispatchBrowserEvent('close-modal');
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

    public function closeModal()
    {
        $this->resetInputFields();
        $this->dispatch('reloadPage');
    }

    public function resetInputFields()
    {
        $this->created_at = '';
        $this->updated_at = '';
        $this->NameOfInformant = '';
        $this->Status = '';
        $this->TypeWork = '';
        $this->MachineName = '';
        $this->MachineCode = '';
        $this->Detail = '';
        $this->Number = '';
        $this->Technician = '';
        $this->RepairReport = '';
        $this->Location = '';
        $this->Telephone = '';
        $this->WorkStatus = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        $workOrder = WorkOrder::find($id);
        $this->created_at = $workOrder->created_at;
        $this->updated_at = $workOrder->updated_at;
        $this->NameOfInformant = $workOrder->NameOfInformant;
        $this->Status = $workOrder->Status;
        $this->TypeWork = $workOrder->TypeWork;
        $this->MachineName = $workOrder->MachineName;
        $this->MachineCode = $workOrder->MachineCode;
        $this->Detail = $workOrder->Detail;
        $this->Number = $workOrder->Number;
        $this->Technician = $workOrder->Technician;
        $this->RepairReport = $workOrder->RepairReport;
        $this->Location = $workOrder->Location;
        $this->Telephone = $workOrder->Telephone;
        $this->WorkStatus = $workOrder->WorkStatus;
    }

    public function updateWorkOrder()
    {

        try {
            $validatedData = $this->validate(
                [
                    'Number' => 'required',
                    'Status' => 'required',
                    'Technician' => 'required',
                    'RepairReport' => 'required',
                ]
            );

            $WorkOrder = WorkOrder::findOrFail($this->updateId);

            if ($validatedData['Status'] == 4) {
                $validatedData['WorkStatus'] = "ส่งมอบงาน";
            } else {
                if ($validatedData['Status'] == 5) {
                    $validatedData['WorkStatus'] = "ยกเลิก";
                } else {
                    $validatedData['WorkStatus'] = "มอบหมายงาน";
                }
            }
            $WorkOrder->update($validatedData);

            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
            $this->resetInputFields();
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
        $workOrder = WorkOrder::find($id);

        if ($workOrder) {
            $this->dispatch(
                'alertconfirmDelete',
                [
                    'deleteId' => $this->deleteId,
                ]
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

    public function deleteItem()
    {
        $workOrder = WorkOrder::find($this->deleteId);
        if ($workOrder) {
            $workOrder->delete();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 2000
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

    public function generatePdf($id)
    {

        $workOrder = WorkOrder::find($id);
        if ($workOrder->TypeWork == 1) {

            $this->dispatch(
                'modifyPdf',
                NameOfInformant: $workOrder->NameOfInformant,
                Location: $workOrder->Location,
                MachineName: $workOrder->MachineName,
                Detail: $workOrder->Detail,
                Number: $workOrder->Number,
                Date: Carbon::parse($workOrder->created_at)->locale('th')->translatedFormat('j F Y'),
            );
        } else {
            $this->dispatch(
                'newDispatchAction',
                NameOfInformant: $workOrder->NameOfInformant,
                Location: $workOrder->Location,
                MachineName: $workOrder->MachineName,
                Detail: $workOrder->Detail,
                Number: $workOrder->Number,
            );
        }
    }
}
