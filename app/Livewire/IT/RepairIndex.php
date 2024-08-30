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
    public $typework;
    public $filterType;


    public function getData()
    {
        $workOrders = WorkOrder::all();
        return response()->json($workOrders);
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
        // $workOrders = WorkOrder::all();
        return view('livewire.IT.repair-index',[
            // 'workOrders' => $workOrders,
        ]);
    }
}
