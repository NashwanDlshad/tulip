<?php include 'includes/header.php';
global $con;
if(isset($_POST['logbtn'])){
$email = $con->Secure($_POST['email1']);
$pass = $con->Secure($_POST['pass1']);
$exe = $con->db->Query("SELECT * from prof where email = '$email' and pass = '$pass'");
if($exe->num_rows>0){
while($row = $exe->fetch_assoc()){
  if($row['verify']==2){
    print_r("<script>alert('Please verify your account!');</script>");
  }else{
    $_SESSION['rule'] = $row['rule'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = $row['user'];
    if($_SESSION['rule'] == 2){
        header('location:index.php');
    }
    else if($_SESSION['rule']==1){
        header('location:dashboard.php');
    }
 
}
}
}
else{
print_r("<script>alert('Email or Password is incorrect!');</script>");
}
}


?>

<main>
<div class="body">
<div class="container1">
<div class="row row1 ">
    <form class="col s12 " id="reg-form" method="POST" action="">
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email1" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate" minlength="8" name="pass1" required>
          <label for="password">Password</label>
        </div>
      </div>
    
        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light black" type="submit" name="logbtn">Login
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


<?php include 'includes/footer.php';?>