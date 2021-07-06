<?php include 'includes/header.php'; ?>


<?php


if(isset($_POST['vbtn'])){  
    global $con;
    global $db;
    $vkey = $_POST['vkey'];
    $Fexe = $con->db->Query("SELECT * from prof where vkey = '$vkey'");
    if($Fexe){
      $exe = $con->db->Query("UPDATE prof set verify = '1' where vkey ='$vkey'");
if($exe){
    header('location:log.php');
    print_r("<script>alert('verification success!');</script>");
}
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
          <input id="email" type="text" class="validate" name="vkey" required>
          <label for="email">Verification Code</label>
        </div>
      </div>
        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light black" type="submit" name="vbtn">Login
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
