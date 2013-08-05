@extends('projLayout')

@section('studentlist')
<h1>Add a Student</h1>

{{ Form::model($user, array("method"=>"PATCH", 'route' => array('user.update', $user->id)))}}
        <table cellspacing="10">
        <tr>
            <td>{{ Form::label('name', 'Name') }}</td>
            <td>{{ Form::text('name') }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('phone', 'Phone') }}</td>
            <td>{{ Form::text('phone') }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('city', 'City') }}</td>
            <td>{{ Form::text('city') }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('branch', 'Branch') }}</td>
            <td>{{ Form::text('branch') }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('prof_name', 'Prof Name') }}</td>
            <td>{{ Form::text('prof_name') }}</td>
        </tr>
        <tr>
            <td></td>
            <td>{{ Form::submit('Update') }}</td>
        </tr>
    </table>
    {{ Form::close() }}

</br></br>

{{ link_to_route('user.index', 'Back to View All Students')}}
@stop