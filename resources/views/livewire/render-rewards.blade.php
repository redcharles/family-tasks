<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Add Reward</div>
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
                        <input class="form-control" type="text" wire:model="name" id="name" placeholder="Name of Reward">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" wire:model="cost" id="cost" placeholder="Cost of Reward">
                        @error('cost') <span class="error">{{ $message }}</span> @enderror
                    </div>
                
                    <button class="btn btn-primary w-100" type="submit">Save Reward</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Cost</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($rewards as $reward)
                    <tr>
                        <td>{{$reward->name}}</td>
                        <td>{{$reward->cost}}</td>
                        <td>
                            <button class="btn btn-danger" wire:click="delete({{$reward->id}})">Delete</button>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
