<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class RenderTasks extends Component
{
    public $familyMembers;
    public $selectedMember;
    public $taskName;
    public $taskDescription;
    public $points;
    public $recurring;
    public $frequency;
    public $tasks;
    public $taskId;

    public function submit(){
        DB::table('tasks')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'family_member' => $this->selectedMember,
            'task_name' => $this->taskName,
            'task_description' => $this->taskDescription,
            'points' => $this->points,
            'recurring' => ($this->recurring == 'true' ? true : false),
            'frequency' => ($this->recurring == 'true' ? $this->frequency : null)
        ]);
        session()->flash('message', 'Task successfully created.');

    }

    public function delete($taskId){
        DB::table('tasks')->where('id', $taskId)->delete();
        session()->flash('message', 'Task has been deleted.');
    }

    public function render()
    {
        $this->familyMembers = DB::table('family_members')->get();
        $this->tasks = DB::table('family_members')->rightJoin('tasks', 'family_members.id', '=', 'tasks.family_member')->get();
        return view('livewire.render-tasks');
    }
}
