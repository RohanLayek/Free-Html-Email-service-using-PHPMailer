<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Monowar Iqbal Layek">
    <title>EnterioAM - Bookes Buy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>


<div class="container">
<h1>Simple and Easy Free Html Email service using PHPMailer</h1>
 <div class="panel panel-info"  style="border: solid 1px black;">
   <div class="panel-heading" align="center"><h2>Free Html Email</h2></div>
   <div class="panel-body">

    <div id="signup_status"  class="reg col-sm-12" align="center">
      <div class="col-sm-12">

   <div id="check" class="col-sm-12" >
     <form action="mail/sendMail.php" method="POST">
        <div class="col-sm-12"><!--Email input !-->
          <input id="email" class="form-control" type="Email" name="email"  placeholder="Email..." required="required">&nbsp; &nbsp;<span id="email1" style="float: right;"></span>
        </div>

        <div id="" class="col-sm-12">
        <div class="form-group"><!--Html message input !-->
          <textarea class="form-control" rows="5" id="comment" name="htmlmessage" placeholder="Html: Message..." required="required"></textarea>
        </div>
        </div>

        <div class="col-sm-12"><!--Submit Button !-->
          <input id="user_email" class="btn btn-primary" type="submit" name="Send" value="Send">
        </div>
    </form>       
    </div>

    </div>
    
   </div>
 </div>


    <footer class="col-sm-12">
      <p>Created by:-  <em><h4>Monowar Iqbal Layek</h4></em></p>
    </footer>

</body>
</html>
