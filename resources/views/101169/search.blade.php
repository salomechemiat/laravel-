<!DOCTYPE html>
<html>
  <head>
    <title>Search</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style >
      body,html{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
   
    }

    .searchbar{
    margin-bottom: auto;
    margin-top: 50px;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;

    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;

    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;

    }
    </style>
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
  <!-- Coded with love by Mutiullah Samim-->
  <form action="search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="search" placeholder="Search...">
          <!-- <a href="" class="search_icon"><i class="fas fa-search"></i></a> -->
          <button class="search_icon" type="submit" class="btn btn-default" <i class="fas fa-search"></i>></button>
        </div>
      </div>
    </div>
    </form>
    <hr>
    <div>
    <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
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
            @foreach($details as $student)
            <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->student->firstname}}</td>
      <td>{{$student->student->secondname}}</td>
      <td>{{$student->student->email}}</td>
      <td>{{$student->student->date}}</td>
      <td>{{$student->amount}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
  </body>
</html>
