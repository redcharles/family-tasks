<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Add Task</div>
            <div class="card-body">
                <form wire:submit.prevent="submit">
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <select wire:model="selectedMember" class="form-control" required>
                            <option value="#">Select a Family Member</option>
                            @foreach ($familyMembers as $member)
                                <option value="{{$member->id}}">{{$member->name}}</option>
                            @endforeach
                        </select>
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" wire:model="taskName" placeholder="Name of Task?">
                        @error('cost') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" wire:model="taskDescription" placeholder="Describe the Task?">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" wire:model="points" placeholder="How many points will be earned?">
                    </div>
                    <div class="mb-3">
                        <select wire:model="recurring" class="form-control">
                            <option value="#">Should this task occur more than just once? (Select Yes/no)</option>
                            <option value="false">No</option>
                            <option value="true">Yes</option>
                        </select>
                    </div>
                    @if ($recurring == 'true')
                        <div class="mb-3">
                            <select wire:model="frequency" class="form-control" required>
                                <option value="">Select a Frequency</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                            </select>
                        </div>
                    @endif
                
                    <button class="btn btn-primary w-100" type="submit">Create Task</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Assigned To</th>
                <th scope="col">Task Name</th>
                <th scope="col">Task Description</th>
                <th scope="col">Points Earned</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->name}}</td>
                        <td>{{$task->task_name}}</td>
                        <td>{{$task->task_description}}</td>
                        <td>{{$task->points}}</td>
                        <td>
                            <button class="btn btn-danger" wire:click="delete({{$task->id}})">Delete</button>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
