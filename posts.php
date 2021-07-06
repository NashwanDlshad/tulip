<?php include 'includes/header.php';?>
<?php
global $con;
$rule = $_GET['rule'];

?>
<?php
switch($rule){
    case 's':
        $Sid = $_GET['id'];
    $exe = $con->db->Query("SELECT * from series where id ='$Sid'");
while($row = $exe->fetch_assoc()){
    
$poster = $row['poster'];
$writer = $row['writer'];
$translator = $row['translator'];
$descp = $row['descp'];
$rule = $_GET['rule'];
}
        break;
        case 'f':
            $Fid = $_GET['id'];
            $exe = $con->db->Query("SELECT * from posts where id ='$Fid'");
        while($row = $exe->fetch_assoc()){
            
        $poster = $row['poster'];
        $writer = $row['writer'];
        $translator = $row['translator'];
        $descp = $row['descp'];
        $rule = $_GET['rule'];
        }
            break;
            case 'x':
                $Xid = $_GET['id'];
                $exe = $con->db->Query("SELECT * from award where id ='$Xid'");
            while($row = $exe->fetch_assoc()){
                
            $poster = $row['poster'];
            $writer = $row['writer'];
            $translator = $row['translator'];
            $descp = $row['descp'];
            $rule = $_GET['rule'];
            }
                break;
}

?>


<main>
<section>
<div class="row no-margin-cards center">
	<div class="col s12 l12 m12">
   <img class="responsive-img img center" src="<?php echo $poster;?>" alt="">  
			</div>
            </div>
            <h4 class="orange-text text-darken-3"><?php echo"نووسینی: ".  $writer;?></h4>

             <?php
             if($translator){
             ?>
            <h5 class="orange-text text-darken-3 h5"><?php echo"وەرگێڕان: ".  $translator;?></h5>
            <?php } ?>
            <p class="p"><?php echo  $descp;?></p>
</section>
</main>



<style>

.img{
    width: 300px;
    margin-top: 5rem;
    margin-bottom: 2rem;
    border-radius: 5%;
}
h4{
    direction: rtl;
    padding-right: 2rem;
}
.h5{
    direction: rtl;
    padding-right: 4rem;
}
.p{
    text-align: justify;
    direction: rtl;
    font-size: 16pt;
    margin-right: 1rem;
    margin-left: 1rem;
}

</style>

<?php include 'includes/footer.php';?>