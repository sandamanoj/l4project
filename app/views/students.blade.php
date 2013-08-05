@extends('projLayout')

@section('studentlist')

@if($users->count())
    <table cellspacing="10">
    	<thead>
    		<tr>
    			<td colspan="2"><h1>Students</h1></td>
    			<td></td>
    		</tr>
    	</thead>
    	
    	<?php $i=1; ?>
    	<tbody>
    		@foreach ($users as $user)
    		<tr>
    			<td>{{ $i++ }}.</td>
    			<td>{{ $user->name }}</td>
    			<td>{{ link_to_route('user.show', 'Show', array($user->id)) }}</td>
    			<td>{{ link_to_route('user.edit', 'Edit', array($user->id)) }}</td>
    			<td>
    				{{ Form::open(array('method' => 'DELETE', 'route' => array('user.destroy', $user->id))) }}
    				{{ Form::submit('Delete') }}
    				{{ Form::close() }}
    			</td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
@else
	<p>There are no Student records.</p>
@endif

</br></br>
<p>{{ link_to_route('user.create', 'Add New Student Record') }}  </p>

@stop