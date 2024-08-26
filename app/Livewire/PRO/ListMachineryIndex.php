<?php

namespace App\Livewire\Pro;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\PRO\SparePart;

class ListMachineryIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    public SparePart $sparepart;
    public $sparepartId;

    public function mount(SparePart $sparepartId)
    {
        $this->sparepart = SparePart::findOrFail($sparepartId->id);
    }
    public function render()
    {
        Carbon::setLocale('th');
        return view('livewire.pro.list-machinery-index',[
            'sparepart' => $this->sparepart,
        ]);
    }
}
