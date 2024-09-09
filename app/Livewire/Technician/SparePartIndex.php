<?php

namespace App\Livewire\Technician;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\PRO\SparePart;

class SparePartIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    public SparePart $sparePart;
    public $sparePartId;

    public function mount(SparePart $sparePartId)
    {
        $this->sparePart = SparePart::findOrFail($sparePartId->id);
    }

    public function render()
    {
        Carbon::setLocale('th');
        return view('livewire.technician.spare-part-index',[
            'sparePart' => $this->sparePart,
        ]);
    }
}
