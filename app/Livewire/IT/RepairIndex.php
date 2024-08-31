<?php

namespace App\Livewire\IT;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Technical\TypeWork;
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
    public $filterType;
    public $message;

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }


    // public function getData()
    // {
    //     $workOrders = WorkOrder::all();
    //     return response()->json($workOrders);
    // }

    public function addWorkOrder()
    {
        $this->edit = false;
    }

    public function render()
    {
        $query = WorkOrder::query();
        if ($this->filterType != "") {
            $query->where("Status", $this->filterType);
        }else{

        }

        $typeworks = TypeWork::orderBy('TypeWorkID', 'ASC')->get();
        $workorders = $query->orderBy('id', 'DESC')
            ->orderBy('updated_at', 'DESC')
            ->paginate(15);
        if ($workorders->isNotEmpty()) {
            $typeworkid = $typeworks[0]->TypeWorkID;
            $type = TypeWork::where('TypeWorkID', $typeworkid)->first();
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
        $workOrders = WorkOrder::orderBy('id','desc')->paginate('10');
        return view('livewire.IT.repair-index',[
            'workOrders' => $workOrders,
            'typeworks' => $typeworks,
        ]);
    }

    public function closeModal()
    {
        $this->resetInputFields();
        $this->dispatch('reloadPage');
    }

    public function resetInputFields()
    {
        // $this->version = '';
        // $this->licensed = '';
        // $this->type = '';
        // $this->buy = '';
        // $this->status = '';
        // $this->remark = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        // $wins = Windows::find($id);
        // $this->version = $wins->version;
        // $this->licensed = $wins->licensed;
        // $this->type = $wins->type;
        // $this->buy = $wins->buy;
        // $this->status = $wins->status;
        // $this->remark = $wins->remark;
    }
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $workorder = WorkOrder::find($id);

        if ($workorder) {
            $this->dispatch(
                'alertconfirmDelete',
                [
                    'deleteId' => $this->deleteId,
                ]
            );
        } else {
            // จัดการกรณีที่ไม่พบผู้ใช้
            session()->flash('error', 'User not found.');
        }
    }

    public function deleteItem()
    {
        dd($this->deleteId);
        // $workorder = WorkOrder::find($this->deleteId);
        // if ($workorder) {
        //     $workorder->delete();
        //     $this->dispatch(
        //         'alert',
        //         position: "center",
        //         icon: "success",
        //         title: "ลบข้อมูลสำเร็จ",
        //         showConfirmButton: false,
        //         timer: 2000
        //     );
        // } else {
            session()->flash('error', 'Computer not found.');
        // }
    }

    public function generatePdf($id)
    {
        $workorder = WorkOrder::find($id);
        // dd($workorder);
        $this->dispatch('modifyPdf',
        NameOfInformant : $workorder->NameOfInformant,
        Location : $workorder->Location,
        MachineName : $workorder->MachineName,
        Detail : $workorder->Detail,

    );
    }


}
