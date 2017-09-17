<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>Capstone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>

    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
     .jumbotron {
		 margin-bottom: 2%;
		 padding-bottom: 1%;
    }
   
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	
	#myModal {
		top: 25%;
	}

  </style>
  
	<script type="text/javascript">
	
		$(window).on('load',function(){
			$('#myModal').modal('show');
		});
		
		
		function updateZip(){
			alert( "Submit the following value to the backend: " + $("#zipInput").val() );
		}
		
		
	</script>
  
</head>
<body>



<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurants<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Restaurant A</a></li>
            <li><a href="#">Restaurant B</a></li>
            <li><a href="#">Restaurant C</a></li>
			<li><a href="#">Restaurant D</a></li>
			<li><a href="#">Restaurant E</a></li>
			<li><a href="#">Restaurant F</a></li>
			    
          </ul>
        </li>
		<li><a href="#">Change Location</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Restaurants</h1>      
    <p>Local Restaurants</p>
  </div>
</div>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Restaurant Info A</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Restaurant Info B</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Restaurant Info C</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Restaurant Info D</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Restaurant Info E</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Restaurant Info F</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Footer</p>  
</footer>


<div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Please enter zip code</h4>
        </div>
        <div class="modal-body">
			<input id = "zipInput"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="updateZip()" data-dismiss="modal">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
