<?php include 'includes/header.php'; ?>

<main>
<section>
<h5 class="nf">ستاف</h5>
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
<?php include 'includes/footer.php'; ?>