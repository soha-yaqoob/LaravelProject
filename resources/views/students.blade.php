<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <ul>
        @foreach($allStudents as $student)
        <li>{{$student}}</li>
        @endforeach
    </ul> -->
    <tbody>
        <th>Id</th>
        <th>Name</th>
        <th>City</th>
        <th>Password</th>
        <tr>
            <td>{{$student[0]}}</td>
            <td>{{$student[1]}}</td>
            <td>{{$student[2]}}</td>
            <td>{{$student[3]}}</td>

        </tr>

    </tbody>
</body>
</html>