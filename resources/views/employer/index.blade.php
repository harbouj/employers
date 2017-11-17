@extends('layouts.master')

@section('content')
  <h2>Employers List</h2>
  <a href="{{route('create')}}" class="btn btn-primary">create user</a> <br><br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>fonction</th>
        <th colspan="3" >Fonction</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($e as $employee)
      	<tr>
      		<td>{{$employee->id}}</td>
      		<td>{{$employee->name}}</td>
      		<td>{{$employee->fonction}}</td>
      			
      		<td ><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Read</button></td>
      		<td><a href="{{ route('edit', $employee->id) }}" class="btn btn-primary">update</a></td>	
      		<td><a href="{{ route('delete', $employee->id) }}" class="btn btn-danger">delete</a></td>	
      			
      		
      	</tr>
      @endforeach
    </tbody>
  </table>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>modal content</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
@endsection