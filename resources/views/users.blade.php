<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>This is user file fetch from array through controller</h1>
<h2>User View</h2>
<div class="container mt_5">
<table>
    <tbody>
       @for($i=1;$i<=10;$i++)
       <tr>
        <td scope="row">{{14}}</td>
        <td>{{$i}}</td>
        <td>{{'x'}}</td>
        <td>{{'='}}</td>
        <td>{{$i*14}}</td>
       </tr>      
       @endfor   
     </tbody>
</table>
</div>
</body>
</html>