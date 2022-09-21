<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2">
    <tr>
    <th>Name</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    @foreach($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->dob}}</td>
    <td>{{$student->address}}</td>
    <td> <img src="{{asset($student->img)}}" height="50px" width="50px"/></td>
@endforeach

</body>
</html>
