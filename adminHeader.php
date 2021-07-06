<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
    
</head>
<body>
<header>
<nav class="grey darken-4">
<div class="nav-wrapper">
<a href="#" data-target="slide-out" class="sidenav-trigger show-on-med-and-down"><i class="material-icons">menu</i></a>
    <a href="index.php" class="brand-logo center">Tulip Cinema</a>
    <ul class="left hide-on-med-and-down">
    </u>
   <li>    <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon search" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></li>
    </ul>
    <ul class="right hide-on-med-and-down">
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="about" >دەربارە<i class="material-icons left">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="cont">بەرهەمەکان<i class="material-icons left">arrow_drop_down</i></a></li>
      <li><a href="index.php" class="a">ماڵەوە</a></li>
    </ul>
  </div>
  <!-- Dropdown Structure -->
<ul id="about" class="dropdown-content">
  <li><a href="#!" class="center grey-text text-darken-3">وێبگە</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">ستاف</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">دیزاینەرەکان</a></li>
  <li class="divider"></li>
  <li><a href="#!" class="center grey-text text-darken-3">نووسەرەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">وەرگێڕەکان</a></li>
</ul>

<ul id="cont" class="dropdown-content">
  <li><a href="#!" class="center grey-text text-darken-3">فیلمەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">زنجیرەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">ئەنیمیەکان</a></li>
  <li class="divider"></li>
  <li><a href="#!" class="center grey-text text-darken-3">دەرهێنەرەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">خەڵاتەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">جۆراوجۆر</a></li></ul>

<ul id="reglog" class="dropdown-content">
  <li><a href="log.php" class="center grey-text text-darken-3">چوونەژوورەوە</a></li>
  <li class="divider"></li>
  <li><a href="reg.php" class="center grey-text text-darken-3">تۆماربوون</a></li>
</ul>
<ul id="log" class="dropdown-content">
  <li><a href="log.php" class="center grey-text text-darken-3">پرۆفایل</a></li>
  <li><a href="log.php" class="center grey-text text-darken-3">دەستکاری</a></li>
  <li class="divider"></li>
  <form action="" method="POST">
  <button name="logout" class="btn  grey darken-3 btn-small" style="margin-left: 7rem;">دەرچوون</button>
</form>
</ul>

<ul id="slide-out" class="sidenav">
<li><ul class="center">
        <!-- Dropdown Trigger -->
        <li><a href="index.php" class="a">ماڵەوە</a></li>
      <li><a class="dropdown-trigger-nav center" href="#!" data-target="cont1">بەرهەمەکان</a></li>
      <li><a class="dropdown-trigger-nav" href="#!" data-target="about1" >دەربارە</a></li>
    </ul></li>

  <li>  <ul class="center">    
   <li><?php
     if(isset($_POST['logout'])){
      unset($_SESSION['user']);
     }
     if(isset($_SESSION['user'])  && $_SESSION['rule'] ==1 ){
      echo "<a class='dropdown-trigger-nav' href='#!' data-target='logged1'><i class='material-icons left'>account_circle</i></a>";
      echo " <a href='dashboard.php'><i class='material-icons'>dashboard</i></a>";
    }
    if(isset($_SESSION['user'])  && $_SESSION['rule'] ==2 ){
      echo "<a class='dropdown-trigger-nav' href='#!' data-target='logged1'><i class='material-icons left'>account_circle</i></a>";
    }
      if(!isset($_SESSION['user'])){
        echo "<a class='dropdown-trigger-nav' href='#!' data-target='reglog1'>چوونەژوورەوە/تۆماربوون<i class='material-icons left'>arrow_drop_down</i></a>";
      }
      
    
  ?></li> 
   <li>    <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon search" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></li>
    </ul></li>
</ul>

</nav>

 <!-- Dropdown Structure -->
 <ul id="about1" class="dropdown-content">
  <li><a href="#!" class="center grey-text text-darken-3">وێبگە</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">ستاف</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">دیزاینەرەکان</a></li>
  <li class="divider"></li>
  <li><a href="#!" class="center grey-text text-darken-3">نووسەرەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">وەرگێڕەکان</a></li>
</ul>

<ul id="cont1" class="dropdown-content">
  <li><a href="#!" class="center grey-text text-darken-3">فیلمەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">زنجیرەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">ئەنیمیەکان</a></li>
  <li class="divider"></li>
  <li><a href="#!" class="center grey-text text-darken-3">دەرهێنەرەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">خەڵاتەکان</a></li>
  <li><a href="#!" class="center grey-text text-darken-3">جۆراوجۆر</a></li></ul>

<ul id="reglog1" class="dropdown-content">
  <li><a href="log.php" class="center grey-text text-darken-3">چوونەژوورەوە</a></li>
  <li class="divider"></li>
  <li><a href="reg.php" class="center grey-text text-darken-3">تۆماربوون</a></li>
</ul>
<ul id="logged1" class="dropdown-content">
  <li><a href="log.php" class="center grey-text text-darken-3">پرۆفایل</a></li>
  <li class="divider"></li>
  <form action="" method="POST">
  <button name="logout" class="btn center grey darken-3 btn-small" style="margin-left: 0.5rem;">Logout</button>
</form></ul>
<!-- LEFT SIDEBAR	 -->
<ul id="sidenav-1" class="sidenav sidenav-fixed">
	<li><a class="subheader grey darken-4 white-text center" style="font-size: 12pt;">Tulip Cinema adminstration bar</a></li>
	<li><a href="dashboardPages.php" target="_blank">View</a></li>
	<li><a href="dashboardPages.php" target="_blank">Posts</a></li>
	<li><a href="dashboardPages.php">Upload</a></li>
  <li><a href="dashboardPages.php">Profiles</a></li>
  <li><a href="dashboardPages.php">Admins</a></li>

  <li>  
    <?php if(isset($_POST['logout'])){
      unset($_SESSION['user']);
     } ?>      <li> <?php
   
   if(isset($_SESSION['user'])  && $_SESSION['rule'] ==1 || $_SESSION['rule'] ==2 ){
    echo "<a class='dropdown-trigger' href='#!' data-target='log'><i class='material-icons'>account_circle</i></a>";
  
  if( $_SESSION['rule'] ==1){
    echo " <a href='dashboard.php'><i class='material-icons'>dashboard</i></a>";
  }
  }
    if(!isset($_SESSION['user'])){
      echo "<a class='dropdown-trigger' href='#!' data-target='reglog'>چوونەژوورەوە/تۆماربوون<i class='material-icons left'>arrow_drop_down</i></a>";
    }
    
    
  ?>
    </li>
</ul>

</header>
 <style>
     .dropdown-trigger:hover{
         color: inherit;
     }
     .a:hover{
         color: inherit;
     }
     .sidenav{

      font-family: Rabar_023;

     }
 </style>
<?php 

?>