<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Balance</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->balance}}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>
</div>
