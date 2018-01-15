<?php
require_once("js/connect.php");
if(isset($_POST['button'])){
//  echo "clicked:)"

$email= $post['email2'];

$Message= $post['Message'];
//$button= $post['signUp'];
if($button ===""){
//  echo"human"
$direct "thankyou.php";

$sendMail = subitMessage(, $email2, $message);
}

}


 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
</head>
<body>
  <form class="row" action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">

  <label class="small-12 large-12 columns"> Name</label>
  <input name="name" type="text">
  <label class="small-12 large-12 columns"> Email</label>
  <input class="small-12 large-12 columns" name="email" type="email">
  <label class="small-12 large-12 columns" >Phone Number</label>
  <input phone="phone" type="tel">
  <label class="small-12 large-12 columns">About Your Project</label>
  <textarea name="Message"></textarea>
  <input id="btn" class="small-12 large-12 columns" type="submit" value="SEND">
  </form>
</body>
</html>
