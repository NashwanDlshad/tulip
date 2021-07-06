<?php include 'includes/header.php'; ?>
<main>
<?php
$id = $_GET['id'];
if($id ==1){
?>
<section>
<h5 class="nf">فیلمەکان</h5>
<div class="row">
<?php
global $con;
$Fexe= $con->db->Query("SELECT * FROM posts"); 
while($Frow = $Fexe->fetch_assoc()){
$Fposter = $Frow['poster'];
$Fid = $Frow['id'];
$Fwriter =$Frow['writer'];
$Fdescp =$Frow['descp'];
$Ftranslator =$Frow['writer'];
$Frule = $Frow['rule'];


?>
    <div class="col s6 m3 l2 right">
      <div class="card">
      <a href="posts.php?id=<?php echo $Fid;?>&rule=<?php echo $Frule;?>" style="padding: 0;" <?php  ?>>
        <div class="card-image">
          <img src="<?php echo $Fposter;   ?>">
        </div>
        </a>
       </div>
        </div>
    <?php } ?>
  </div>
</section>
<?php }

if($id ==2){ ?>
   <section>
<h5 class="nf">زنجیرەکان</h5>
<div class="row">
<?php
global $con;
$Sexe= $con->db->Query("SELECT * FROM series"); 
while($Srow = $Sexe->fetch_assoc()){
$Sposter = $Srow['poster'];
$Sid = $Srow['id'];
$Swriter =$Srow['writer'];
$Sdescp =$Srow['descp'];
$Stranslator =$Srow['writer'];
$Srule = $Srow['rule'];
?>
    <div class="col s6 m3 l2 right">
      <div class="card">
      <a href="posts.php?id=<?php echo $Sid;?>&rule=<?php echo $Srule;?>" style="padding: 0;" <?php  ?>>
        <div class="card-image">
          <img src="<?php echo $Sposter;   ?>">
        </div>
        </a>
       </div>
        </div>
    <?php } ?>
  </div>
</section>
<?php }
if($id ==5){ ?>
<section>
<h5 class="nf">خەڵاتەکان</h5>
<div class="row">
<?php
global $con;
$Xexe= $con->db->Query("SELECT * FROM award"); 
while($Xrow = $Xexe->fetch_assoc()){
$Xposter = $Xrow['poster'];
$Xid =$Xrow['id'];
$Xwriter=$Xrow['writer'];
$Xdescp =$Xrow['descp'];
$Xtranslator =$Xrow['writer'];
$Xrule = $Xrow['rule'];
?>
    <div class="col s6 m3 l2 right">
      <div class="card">
      <a href="posts.php?id=<?php echo $Xid;?>&rule=<?php echo $Xrule;?>" style="padding: 0;" <?php  ?>>
        <div class="card-image">
          <img src="<?php echo $Xposter;?>">         

        </div>
        </a>
       </div>
        </div>
    <?php } ?>
  </div>
</section>
<?php }
if($id ==3){ ?>
    <section>
    <h5 class="nf">ئەنیمیەکان</h5>
    <div class="row">
    <?php
    global $con;
    $Xexe= $con->db->Query("SELECT * FROM anime"); 
    while($Xrow = $Xexe->fetch_assoc()){
    $Xposter = $Xrow['poster'];
    $Xid =$Xrow['id'];
    $Xwriter=$Xrow['writer'];
    $Xdescp =$Xrow['descp'];
    $Xtranslator =$Xrow['writer'];
    $Xrule = $Xrow['rule'];
    ?>
        <div class="col s6 m3 l2 right">
          <div class="card">
          <a href="posts.php?id=<?php echo $Xid;?>&rule=<?php echo $Xrule;?>" style="padding: 0;" <?php  ?>>
            <div class="card-image">
              <img src="<?php echo $Xposter;?>">         
    
            </div>
            </a>
           </div>
            </div>
        <?php } ?>
      </div>
    </section>
<?php }?>
</section>
<?php if($id ==4){ ?>
    <section>
    <h5 class="nf">دەرهێنەرەکان</h5>
    <div class="row">
    <?php
    global $con;
    $Xexe= $con->db->Query("SELECT * FROM director"); 
    while($Xrow = $Xexe->fetch_assoc()){
    $Xposter = $Xrow['poster'];
    $Xid =$Xrow['id'];
    $Xwriter=$Xrow['writer'];
    $Xdescp =$Xrow['descp'];
    $Xtranslator =$Xrow['writer'];
    $Xrule = $Xrow['rule'];
    ?>
        <div class="col s6 m3 l2 right">
          <div class="card">
          <a href="posts.php?id=<?php echo $Xid;?>&rule=<?php echo $Xrule;?>" style="padding: 0;" <?php  ?>>
            <div class="card-image">
              <img src="<?php echo $Xposter;?>">         
    
            </div>
            </a>
           </div>
            </div>
        <?php } ?>
      </div>
    </section>
<?php } ?>
</section>
<?php if($id ==6){ ?>
    <section>
    <h5 class="nf">جۆراوجۆر</h5>
    <div class="row">
    <?php
    global $con;
    $Xexe= $con->db->Query("SELECT * FROM variety"); 
    while($Xrow = $Xexe->fetch_assoc()){
    $Xposter = $Xrow['poster'];
    $Xid =$Xrow['id'];
    $Xwriter=$Xrow['writer'];
    $Xdescp =$Xrow['descp'];
    $Xtranslator =$Xrow['writer'];
    $Xrule = $Xrow['rule'];
    ?>
        <div class="col s6 m3 l2 right">
          <div class="card">
          <a href="posts.php?id=<?php echo $Xid;?>&rule=<?php echo $Xrule;?>" style="padding: 0;" <?php  ?>>
            <div class="card-image">
              <img src="<?php echo $Xposter;?>">         
    
            </div>
            </a>
           </div>
            </div>
        <?php } ?>
      </div>
    </section>
    <?php } ?>
    <?php if($id ==7){ ?>
    <section>
    <h5 class="nf">وێبگە</h5>
    <div class="row no-margin-cards center">
	<div class="col s12 l12 m12">
   <img class="responsive-img img center" src="img\logo.jpg" alt="">  
			
            <h4>سینەمای تولیپ</h4>
            <h5 class="h5">ڕێکخراوێکی سەربەخۆی ناحکومییە بەشێوەی مەیدانی و ئۆنڵاین لە بواری سینەمادا کاردەکات</h5>
</div>
            </div>

<style>

.img{
    width: 300px;
    margin-top: 5rem;
    margin-bottom: 2rem;
    border-radius: 5%;
}
h4{
    direction: rtl;
    text-align: center;
    padding-right: 2rem;
    color: #329B97;
    
}
.h5{
    direction: rtl;
    text-align: center;
    color: black;
    padding-right: 4rem;
}

</style>
    </section>
    <?php } ?>
    <?php 
if($id ==8){ ?>
<section>
<section>
<h5 class="nf">ستاف</h5>
<div class="row">
<?php
global $con;
$exe= $con->db->Query("SELECT * FROM prof where rule = '1'"); 
while($row = $exe->fetch_assoc()){
$pic = $row['pic'];
$id = $row['id'];
$user =$row['user'];
?>
     <div class="col s6 m6 l3 right">
      <div class="card"style="border-radius: 100rem;">
      <a href="posts.php?id=<?php echo $Sid;?>&rule=<?php echo $Srule;?>" style="padding: 0;" <?php  ?>>
        <div class="card-image"style="border-radius: 100rem;">
          <img src="<?php echo $pic;?>" style="border-radius: 1000px;" >
        </div>
        </a>
       </div><h6 class="center" style="color: black; font-size: 20pt;"><?php echo $user;?></h6>
        </div>
    <?php } ?>
  </div>
</section>
</section>
<?php }?>
</section>
    <?php 
if($id ==9){ ?>
<section>
<section>
<h5 class="nf">دیزاینەرەکان</h5>
<div class="row">
<?php
global $con;
$exe= $con->db->Query("SELECT * FROM prof where rule = '3'"); 
while($row = $exe->fetch_assoc()){
$pic = $row['pic'];
$id = $row['id'];
$user =$row['user'];
?>
     <div class="col s6 m6 l3 right">
      <div class="card"style="border-radius: 100rem;">
      <a href="posts.php?id=<?php echo $Sid;?>&rule=<?php echo $Srule;?>" style="padding: 0;" <?php  ?>>
        <div class="card-image"style="border-radius: 100rem;">
          <img src="<?php echo $pic;?>" style="border-radius: 1000px;" >
        </div>
        </a>
       </div><h6 class="center" style="color: black; font-size: 20pt;"><?php echo $user;?></h6>
        </div>
    <?php } ?>
  </div>
</section>
</section>
<?php }?>
<?php 
if($id ==10){ ?>
<section>
<section>
<h5 class="nf">نووسەرەکان</h5>
<div class="row">
<?php
global $con;
$exe= $con->db->Query("SELECT * FROM prof where rule = '4'"); 
while($row = $exe->fetch_assoc()){
$pic = $row['pic'];
$id = $row['id'];
$user =$row['user'];
?>
     <div class="col s6 m6 l3 right">
      <div class="card"style="border-radius: 100rem;">
      <a href="posts.php?id=<?php echo $Sid;?>&rule=<?php echo $Srule;?>" style="padding: 0;" <?php  ?>>
        <div class="card-image"style="border-radius: 100rem;">
          <img src="<?php echo $pic;?>" style="border-radius: 1000px;" >
        </div>
        </a>
       </div><h6 class="center" style="color: black; font-size: 20pt;"><?php echo $user;?></h6>
        </div>
    <?php } ?>
  </div>
</section>
</section>
<?php }?>
<?php 
if($id ==11){ ?>
<section>
<section>
<h5 class="nf">وەرگێڕەکان</h5>
<div class="row">
<?php
global $con;
$exe= $con->db->Query("SELECT * FROM prof where rule = '5'"); 
while($row = $exe->fetch_assoc()){
$pic = $row['pic'];
$id = $row['id'];
$user =$row['user'];
?>
     <div class="col s6 m6 l3 right">
      <div class="card"style="border-radius: 100rem;">
      <a href="posts.php?id=<?php echo $Sid;?>&rule=<?php echo $Srule;?>" style="padding: 0;" <?php  ?>>
        <div class="card-image"style="border-radius: 100rem;">
          <img src="<?php echo $pic;?>" style="border-radius: 1000px;" >
        </div>
        </a>
       </div><h6 class="center" style="color: black; font-size: 20pt;"><?php echo $user;?></h6>
        </div>
    <?php } ?>
  </div>
</section>
</section>
<?php }?>
</main>





<?php include 'includes/footer.php';?>