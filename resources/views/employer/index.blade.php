
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

	<div class="container">
  <h2>Employee List</h2>
  <a href="{{route('create')}}">create user</a>
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
      			
      		<td ><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button></td>
      		<td><a href="{{ route('edit', $employee->id) }}" class="btn btn-primary">update</a></td>	
      		<td><a href="{{ route('delete', $employee->id) }}" class="btn btn-primary">delete</a></td>	
      			
      		
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
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>

	
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>