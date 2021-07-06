<?php include 'includes/header.php';

if(isset($_POST['regbtn'])){
    global $con;
    global $db;
    $user = $con->Secure($_POST['user']);
$pass = $con->Secure($_POST['pass']);
$email = $con->Secure($_POST['email']);
$file = $con->Secure($_POST['file']);
$generator = "123456789";
$vkey = substr(str_shuffle($generator),0,6);
$Gexe = $con->db->Query("SELECT * from prof  where email = '$email'");
if($Gexe->num_rows>0){
    print_r("<script>alert('Unsuccessful change your email!');</script>");
}else if($Gexe->num_rows==0){
    if(strlen($pass)<8 || strlen($user)<8){
        print_r("<script>alert('Your Password or user too short!');</script>");
    }
    else{
    $exe = $con->db->Query("INSERT INTO prof (user, email, pass, rule, vkey, verify) values ('$user', '$email','$pass', '2','$vkey', '2')");
if($exe){
    require_once('phpmailer/PHPMailerAutoload.php');
$mail= new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls';

$mail->Username = 'nashwan.dlshad.2002@gmail.com';
$mail->Password = 'Nasha12890';

$mail->setFrom('nashwan.dlshad.2002@gmail.com','nashwan');
$mail->addAddress($email);
$mail->addReplyTo('nashwan.dlshad.2002@gmail.com');

$mail->isHTML();
$mail->Subject = "Tulip cinema Account verification";
$mail->Body = '<h1 align=center>Verification code is: </h1>'.$vkey;
if(!$mail->send()){
    print_r("<script>alert('message not send check your internet connection!');</script>");
}else{
  

    header('location:test.php');
    print_r("<script>alert('Successful');</script>");
}
}
}
}}

?>



<main>
<div class="body">
<div class="container1">
<div class="row row1 ">
    <form class="col s12 " id="reg-form" method="POST" action="">
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate" name="user" minlength="8" required>
          <label for="first_name">user</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
          <input  id="password" type="password" class="validate" minlength="8" name="pass" required>
          <label for="password">Password</label>
        </div>
      </div>
        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light black" type="submit" name="regbtn">Register
            <i class="material-icons right">done</i>
          </button>
        </div>
        <div class="input-field col s6">
        <a title="Login" class="ngl btn-floating btn-large waves-effect waves-light red right" href="index.php"><i class="material-icons">input</i></a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>

</main>

<style>

.body {
 
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.container1 {
  background: white;
  padding: 20px 25px;
  border: 5px solid black;
  width: 550px;
  height: auto;
  box-sizing: border-box;
  position: relative;
}
.reg > .btn {
   width: 100%;
}

.container1 {
  animation: showUp 0.5s cubic-bezier(0.18, 1.3, 1, 1) forwards;
}

@keyframes showUp {
  0% {
    transform: scale(0);
  }
  100% {
    transoform: scale(1);
  }
}
.row1 {margin-bottom: 10px;}

.input-field label {
     color: black;
   }
  

</style>







<?php include 'includes/footer.php' ?>