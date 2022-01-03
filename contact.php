<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

<?php include 'menu.php'; ?>
	
<div class="jumbotron">
  <h1>Ecommerce application</h1>
  <h5> Contact for our speacial cs team lead members. </h5>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">

    <form action="userinfo.php" method="post">

      <div class="form-group">
        <label>Username</label>
        <input type="text" required name="user" autocomplete="off" class="form-control">  
    </div>
     <div class="form-group">
        <label>Email Id</label>
        <input type="text" required name="email" autocomplete="off" class="form-control">  
    </div>
     <div class="form-group">
        <label>Mobile</label>
        <input type="text" required name="mobile" autocomplete="off" class="form-control">  
    </div>
    <div class="form-group">
        <label>comment</label>
        <textarea class="form-control" required name="comment">    
          </textarea>
    </div>
      <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </form>
  </div>

</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@VishaltechnicalProduction</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>