<?php
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Mạng xã hội Việt Nam</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/notification.css" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
<div id = "top">
<div class="row">

<div class="col-md-2">
This is Logo
</div>
<div class="col-md-4">

<form class="navbar-form navbar-right" role="search">
<div class="form-group">
<input type="text" class="form-control">
<input type="submit" value="Search"/>
</div>
</form>

</div>
<div class="col-md-6" style="text-align: right">
<?php
@session_start();
if(isset($_SESSION['user'])){
		include 'modules/notifications.html';
		
					
}
else{
echo '<form class="form-inline navbar-form navbar-right" method="GET" action="checklogin.php">
  <div class="form-group">
    
    <input type="text" name ="user" class="form-control" id="exampleInputEmail3" placeholder="Type any user">
  </div>
  <div class="form-group">
    
    <input type="password" name ="pass" class="form-control" id="exampleInputPassword3" placeholder="Type any password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default" >Sign in</button>
</form>';
}
?>
</div>
</div>
</d
iv>
<div id="menu">
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">MENU</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Trang Chủ</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="#">Vui Cười</a></li>
<li><a href="#">Tâm Tư</a></li>
<li><a href="#">Mua Bán</a></li>
<li><a href="#">Công Nghệ</a></li>
<li><a href="#">Xã Hội</a></li>
<li><a href="#">Kinh Tài</a></li>
<li><a href="#">Sức Khỏe</a></li>
<li><a href="#">Công Nghệ</a></li>

</ul>


</div>
</nav>
</div>

<div id="main">
<div class="row">
<div class="col-md-2">
<div class="main_inner">
<a class="btn btn-default" style="width:30%;" href="#" role="button">Mới</a>
<a class="btn btn-default" style="width:30%;" href="#" role="button">Top</a>
<a class="btn btn-default" style="width:30%;" href="#" role="button">Pro</a>
</br></br>
Category Trees
</div>
</div>
<div class="col-md-7 border1">
<div class="main_inner">
Main Main Main MainMain MainMain MainMain MainMain MainMain MainMain MainMain MainMain MainMain Main
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
Main Main Main MainMain MainMain MainMain MainMain M
</div>
</div>
<div class="col-md-3">
<div class="main_inner">
Right Right Right RightRight RightRight RightRight RightRight RightRight RightRight RightRight RightRight RightRight Right
</div>
</div>
</div>
</div>

</div>
</html>