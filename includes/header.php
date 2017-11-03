<?php include_once 'includes/dbh.inc.php'; ?>
<link href='https://fonts.googleapis.com/css?family=El Messiri' rel='stylesheet'>
<Style>
  .masthead {
    height:auto;
    background-image:url('images/header.jpg');
    background-repeat:no-repeat;
    text-align: center;
    font-family:'El Messiri'; Times, serif;
  }

  .masthead h1 {
    font-size: 5em;
    text-shadow: 0.03em 0.015em 0 #f0fc07, 0.1em 0.095em 0 rgba(0,0,0,0.15);
  }


</Style>

<div class="masthead">
    <div class="container">
       <h1>EthioEnjoy</h1>
       <h4>Local Ethiopian Restaurants</h4>
    </div>
</div>

<div class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurants<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $result = mysqli_query($db, "select id, name from restaurant order by id asc;");
              if ( $result ) {
                
                while( $row = mysqli_fetch_array( $result ) ) {
                  echo "<li><a href=restaurant.php?id=".$row['id'].">".$row['name']."</a></li>";
                }

              }
            ?>
          </ul>
        </li>
        <li><a onclick="$('#myModal').modal('show');" href="#">Change Location</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span> Your Account
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>