<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class RenderMembers extends Component
{
    public $members; 

    public function render()
    {
        $this->members = DB::table('family_members')->get();
        return view('livewire.render-members');
    }
}
