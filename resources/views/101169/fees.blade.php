<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Student | Feepayments</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
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





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Make fee payment</h4>
 
  <form action="{{action('feesController@fee')}}" method="post">
    @if(count($errors))
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <br/>
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  
  <div class="form-group input-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
    
        <input name="id" class="form-control" placeholder="Student id " type="text">
        <span class="text-danger">{{ $errors->first('id') }}</span>
    </div>


    <div class="form-group input-group {{ $errors->has('secondname') ? 'has-error' : '' }}">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>

     </div>
        <input name="amount" class="form-control" placeholder="Amount " type="text">
        <span class="text-danger">{{ $errors->first('amount') }}</span>
    </div>

     <!-- form-group// -->
    <!-- <div class="form-group input-group {{ $errors->has('secondname') ? 'has-error' : '' }}">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>

     </div>

        <input name="email" class="form-control" placeholder="Email address" type="email">
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div> -->


    <div class="form-group input-group {{ $errors->has('date') ? 'has-error' : '' }}">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
     </div>

        <input name="date" class="form-control" placeholder="Date of payment" type="date">
       <span class="text-danger">{{ $errors->first('date') }}</span>
    </div>


    <div>
      <input type="hidden" name="_token" class="form-control"  value="{{csrf_token()}}">
    </div>
    


     <!-- form-group// -->
    <!-- form-group// -->                  

    <div class="form-group">
        <button name="button" type="submit" class="btn btn-primary btn-block"> Register </button>
    </div>

     <!-- form-group// -->      
                                                                     
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>


</body>
</html>