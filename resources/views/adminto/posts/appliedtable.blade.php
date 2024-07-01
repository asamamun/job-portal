<table>
    <thead>
        <tr>
            <th>#</th>
            <th>image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        {{$i = 1}}
        @forelse ($applicantposts as $applicantpost)
        <tr>
            <td tabindex="0">{{$i++}}</td>
            <td tabindex="0">
                <img src="{{asset('storage/'.($applicantpost->applicant->user->image ? $applicantpost->applicant->user->image : 'img/no_image.png'))}}" alt="image" height="50" width="50" />
            </td>
            <td tabindex="0">{{$applicantpost->applicant->user->name}}</td>
            <td>{{$applicantpost->applicant->user->email}}</td>
            <td>{{$applicantpost->applicant->user->contact}}</td>
            <td>{{$applicantpost->status}}</td>
        </tr>
        @empty
        <tr>
            <td class="" colspan="100">empty</td>
        </tr>
        @endforelse
    </tbody>
</table>