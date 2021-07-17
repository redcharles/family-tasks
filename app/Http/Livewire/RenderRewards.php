<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class RenderRewards extends Component
{
    public $rewards;
    public $name;
    public $cost;
    public $rewardId; 

    public function submit(){
        DB::table('rewards')->insert([
            'name' => $this->name,
            'cost' => $this->cost
        ]);
        session()->flash('message', 'Reward successfully added.');
    }

    public function delete($rewardId){
        DB::table('rewards')->where([
            'id' => $rewardId
        ])->delete();
        session()->flash('message', 'Reward has been removed.');
    }

    public function render()
    {
        $this->rewards = DB::table('rewards')->get();
        return view('livewire.render-rewards');
    }
}
