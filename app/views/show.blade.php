@extends('projLayout')

@section('studentlist')
<h1>Student</h1>

    <table cellspacing="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>City</th>
                <th>Branch</th>
                <th>Prof Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->branch }}</td>
                <td>{{ $user->prof_name }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ link_to_route('user.edit', 'Edit', array($user->id)) }}</td>
                <td>
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('user.destroy', $user->id))) }}
                    {{ Form::submit('Delete') }}
                    {{ Form::close() }}
                </td>
            </tr>
        </tbody>
    </table>

</br></br>

{{ link_to_route('user.index', 'Back to View All Students')}}
@stop