<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
<table class="table">
    <tbody>
        <th scope="row">ID</th>
        <th>NAME</th>
        <th>GMAIL</th>
        <th>CITY</th>

        @foreach($allMembers as $Member)
        <tr>
            <td>{{$Member['id']}}</td>
            <td>{{$Member['name']}}</td>
            <td>{{$Member['email']}}</td>
            <td>{{$Member['city']}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>   
</body>
</html>