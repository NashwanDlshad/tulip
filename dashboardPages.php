<?php   include 'includes/config.php'; 

if(!isset($_SESSION['user'])){
die(" Please Login First! <br> <form action='log.php'><input type='submit' value='Login'></form ");
}
else{
    if($_SESSION['rule']==2){
        die(" you are not admin!");
    }
    else{ include 'includes/adminHeader.php'; 
?>

<main>



</main>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>

$('.dropdown-trigger').dropdown();
$('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  $("input").focus(function(){
    $(".search").hide();
}).blur(function(){
    $(".search").show();
});   
$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger-nav').dropdown();

  });
    </script>
</body>
</html>
<?php }} ?>