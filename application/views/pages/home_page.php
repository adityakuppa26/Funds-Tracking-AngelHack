<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>


header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}


</style>
</head>

<body>



  <div  style="border-bottom:20px solid black;padding-top:10px;padding-bottom:20px;font-style:Times New Roman;width:80%; margin-left: 160px;">
    <h1 align="center">Funds Tracker</h1>      
    <div class="text-center" >
  <img src="
<?php echo base_url()?>/assets/images/logo.jpg" width="300px" height="150px" class="rounded" style="padding-top:10px;" border="5">

    <h3 align="center" style="font-style: oblique;"> Track what you Grant</h3>
  </div>      
</div>






<!-- <div class="container-fluid">
  <h1 align='center'>Hello Everyone</h1>
  <h3 align='center'>Click on the below images to get details of the respective NGO's</h3>
  <div class="row"> -->
<div class="container text-center" style="padding-bottom: 20px">    
  <h3 style="font-style: oblique;">The NGOs we trust to serve you.</h3>
  <h3 align='center' style="font-style: oblique;">Get to know them more !!</h3>
  <div class="row">
    <div class="col-sm-4" >
 <fieldset>
        <legend><a href="<?php echo base_url();?>organization/user_org/2"><img src="
<?php echo base_url()?>/assets/images/speak.jpg" style="width:100%;padding-top:35px;" alt="ngo1"></a></legend>
  This NGO helps preserve the voice of the common public. 
 </fieldset>
    </div>
    <div class="col-sm-4"> 
 <fieldset>
      <legend><a href="<?php echo base_url();?>organization/user_org/3"><img src="
<?php echo base_url()?>/assets/images/splash.png" alt="Image" style="padding-top:18px;" width="70%" height="50%" ></a></legend>
 This organisation works towards spreading awareness to save water.
 </fieldset>    
</div>
    <div class="col-sm-4"> 
 <fieldset>
      <legend><a href="<?php echo base_url();?>organization/user_org/4"><img src="
<?php echo base_url()?>/assets/images/mama.png" alt="Image" style="padding-top:23px;" ></a>  </legend>
 Mama's children provides all basic necessities free of cost to the malnutritioned infants.
 </fieldset>  
    </div>
  </div>
</div>




</body>
</html>
