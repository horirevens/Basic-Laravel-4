@extends('layouts.default')

@section('content')
	<legend>{{ $title }}&nbsp;
		<a href="{{ URL::to('authors/create') }}" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
		<a href="{{ URL::to('authors') }}" class="btn"><i class="icon-list-alt"></i>&nbsp;Users</a>
        
        <form class="pull-right" name="form1" act="" method="GET">
            <input type="text" class="search-query span2" placeholder="Name" name="name" >
            <input type="submit" name="search" value="Search" class="btn">
            <input type="submit" name="reset" value="Reset" class="btn">
        </form>
    </legend>

    <div class="row-fluid">
        <div class="span4 pagination" style="margin-top: -5px;">
            <ul><li>{{ $authors->links() }}</li></ul>
        </div>
        <div class="span4" style="text-align: center; margin-top: 10px;">@include('commons.msg')</div>
        <div class="span4">&nbsp;</div>
    </div>

    <table class="table table-consended table-striped table-bordered">
    	<tr>
            <th width="5%" style="text-align: center;">No. ID</th>
            <th width="15%" style="text-align: center;">Name</th>
            <th width="30%" style="text-align: center;">Address</th>
            <th width="5%" style="text-align: center;">Gender</th>
            <th width="8%" style="text-align: center;">DOB</th>
            <th width="5%" style="text-align: center;">Active</th>
            <th width="10%" style="text-align: center;">Creator</th>
            <th width="15%" style="text-align: center;">Action</th>
        </tr>
		@foreach($authors as $author)
		<tr> 
            <td style="text-align: center;">{{ $author->id }}</td>
            <td style="text-align: center;">{{ link_to_route('authors.show',$author->name, array($author->id)) }}</td>
            <td style="text-align: center;">{{ $author->address }}</td>
            <td style="text-align: center;">{{ $author->gender }}</td>
            <td style="text-align: center;">{{ $author->dob }}</td>
            <td style="text-align: center;">
            	@if($author->active == '1')
            		<i class='icon-ok-sign'></i>
            	@else
            		<i class='icon-minus-sign'></i>
            	@endif
            </td>
            <td style="text-align: center;">{{ $author->creator }}</td>
            <td style="text-align: center;">
                {{ link_to_route('authors.show', 'View', array($author->id),array('class'=>'btn btn-small')) }} | 
                {{ Form::open(array('url'=>URL::action('AuthorsController@destroy',array($author->id)),'method'=>'DELETE','style'=>'display: inline;','onclick'=>'return confirm("Anda yakin ingin menghapus data?");')) }}
                    {{ Form::hidden('id', $author->id) }}
                    {{ Form::submit('Delete', array('class'=>'btn btn-small')) }}
                {{ Form::close() }}
                
            </td>
	    </tr>
	    @endforeach
	</table>

    
@endsection