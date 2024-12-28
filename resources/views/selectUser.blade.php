<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
   <div class="container p-5">
<a href="add"class="btn btn-info">Add</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($allStudents as $std)
        <tr>
            <td>{{$std['id']}}</td>
            <td>{{$std['name']}}</td> 
            <td>{{$std['email']}}</td>
            <td>{{$std['password']}}</td>
            <td><a href="edit/{{$std['id']}}" class="btn btn-info">Edit</a></td>
            <td><a href="delete/{{$std['id']}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


   </div>
  </body>
</html>