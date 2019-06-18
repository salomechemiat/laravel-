<!DOCTYPE html>
<html>
<head>
  <title>Student | Tractions</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
    <div class= "collapse navbar-collapse">
      <a class="navbar-brand" href="/101169/layout">Home</a>
    </div>
    <div class="navbar-nav">
      <a href="/101169/student" class ="nav-item nav-link">Register</a>
      <a href="/101169/fees" class ="nav-item nav-link">Fees</a>
      <a href="/101169/search" class ="nav-item nav-link">Search</a>
      <a href="/101169/view" class ="nav-item nav-link">view</a>
  </div>
</nav>
<hr>
<table class="table">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email adress</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>

    @if(count($student)>0)
    @foreach($student as $student)
    <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->firstname}}</td>
      <td>{{$student->secondname}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->date}}</td>
      <td>{{$student->amount}}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</body>
</html>
