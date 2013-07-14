@extends('layouts.default')

@section('content')
	<legend>{{ $title }}&nbsp;
		<a href="{{ URL::to('authors/create') }}" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
		<a href="{{ URL::to('authors') }}" class="btn"><i class="icon-list-alt"></i>&nbsp;Users</a>
    </legend>

	<table class="table table-bordered table-condensed table-striped">
        <tr>
            <td>ID</td>
            <td>{{ Form::text('id',$author->id,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ Form::text('name',$author->name,array('class'=>'span5 validate[required,custom[onlyLetterSp]]','id'=>'name','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{ Form::textarea('address',$author->address,array('class'=>'span8','rows'=>'2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>DOB</td>
            <td>{{ Form::text('dob',$author->dob,array('id'=>'dob','class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>{{ Form::select('gender',array('M'=>'Male','F'=>'Female'),$author->gender,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ Form::select('active',array('1'=>'Active','0'=>'Non-Active'),$author->active,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            	{{ link_to_route('authors.edit', 'Edit', array($author->id), array('class'=>'btn')) }}
            </td>
        </tr>
    </table>  
@endsection