<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       @foreach($employeename as $employee)

       <p>{{ $employee ->firstname}} {{ $employee->lastname}} </p>


      @endforeach
</body>
</html>