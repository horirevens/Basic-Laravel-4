@extends('layouts.default')

@section('content')
	<legend>{{ $title }}&nbsp;
		<a href="{{ URL::to('authors/create') }}" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
		<a href="{{ URL::to('authors') }}" class="btn"><i class="icon-list-alt"></i>&nbsp;Users</a>
    </legend>
    
	{{ Form::open(array('url'=>URL::action('AuthorsController@update', array($author->id)), 'method'=>'PUT')) }}
	<table class="table table-bordered table-condensed table-striped">
        <tr>
            <td>ID</td>
            <td>{{ Form::text('id',$author->id,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ Form::text('name',$author->name,array('class'=>'span5 validate[required,custom[onlyLetterSp]]','id'=>'name')) }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{ Form::textarea('address',$author->address,array('class'=>'span8','rows'=>'2')) }}</td>
        </tr>
        <tr>
            <td>DOB</td>
            <td>{{ Form::text('dob',$author->dob,array('id'=>'dob','class'=>'span2')) }}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>{{ Form::select('gender',array('M'=>'Male','F'=>'Female'),$author->gender,array('class'=>'span2')) }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ Form::select('active',array('1'=>'Active','0'=>'Non-Active'),$author->active,array('class'=>'span2')) }}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            	{{ Form::submit('Save',array('class'=>'btn')) }}
                {{ Form::hidden('id', $author->id) }}
            </td>
        </tr>
    </table>  
    {{ Form::close() }}

    <script type="text/javascript">
        $(document).ready(function(){
            $("#form1").validationEngine()
            $("#dob").datepicker({
                dateFormat: 'yy/mm/dd',
                changeMonth: true,
                changeYear: true,
                yearRange: '1980:2020'
            })
        }) 
    </script>

@endsection