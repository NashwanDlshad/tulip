<?php include 'includes/header.php'; ?>



<main>
<section>
<h5 class="nf">نوێترین فیلمەکان</h5>
<div class="row">
<?php
global $con;
$Fexe= $con->db->Query("SELECT * FROM posts"); 
while($Frow = $Fexe->fetch_assoc()){
$Fposter = $Frow['poster'];
$Fid = $Frow['id'];
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
<section>
<h5 class="nf">نوێترین زنجیرەکان</h5>
<div class="row">
<?php
global $con;
$Sexe= $con->db->Query("SELECT * FROM series"); 
while($Srow = $Sexe->fetch_assoc()){
$Sposter = $Srow['poster'];
$Sid = $Srow['id'];
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
<section>
<h5 class="nf">نوێترین خەڵاتەکان</h5>
<div class="row">
<?php
global $con;
$Xexe= $con->db->Query("SELECT * FROM award"); 
while($Xrow = $Xexe->fetch_assoc()){
$Xposter = $Xrow['poster'];
$Xid =$Xrow['id'];
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

</main>





<?php include 'includes/footer.php';?>