<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	<div class="container">
		<h1>Create a New User</h1>
		<div class="row">
			<div class="col-md-8">
				<form method="POST" action="/employers/create">
					{{ csrf_field() }}
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="fonction">fonction</label>
    <input type="text" class="form-control" name="fonction" id="fonction" aria-describedby="emailHelp" placeholder="Enter fonction">
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
			</div>
		</div>
	
	</div>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>