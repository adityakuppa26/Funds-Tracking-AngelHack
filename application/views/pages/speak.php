<!DOCTYPE html>
<html>
<head>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/animate.css">
<script>
 function stars_rating(){
      var count = max(document.getElementById(star-1).value ,document.getElementById(star-2).value,document.getElementById(star-3).value,document.getElementById(star-4).value,document.getElementById(star-5).value,)
      //document.write(count);
 }
</script>
<style>
body {

}
form .stars {
  background: url("<?php echo base_url()?>/assets/images/stars.png") repeat-x 0 0;
  width: 150px;
  margin: 0 auto;
}

form .stars input[type="radio"] {
  position: absolute;
  opacity: 0;
  filter: alpha(opacity=0);
}
form .stars input[type="radio"].star-5:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-4:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-3:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-2:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-1:checked ~ span {
  width: 20%;
}
form .stars label {
  display: block;
  width: 30px;
  height: 30px;
  margin: 0!important;
  padding: 0!important;
  text-indent: -999em;
  float: left;
  position: relative;
  z-index: 10;
  background: transparent!important;
  cursor: pointer;
}
form .stars label:hover ~ span {
  background-position: 0 -30px;
}
form .stars label.star-5:hover ~ span {
  width: 100% !important;
}
form .stars label.star-4:hover ~ span {
  width: 80% !important;
}
form .stars label.star-3:hover ~ span {
  width: 60% !important;
}
form .stars label.star-2:hover ~ span {
  width: 40% !important;
}
form .stars label.star-1:hover ~ span {
  width: 20% !important;
}
form .stars span {
  display: block;
  width: 0;
  position: relative;
  top: 0;
  left: 0;
  height: 30px;
  background: url("<?php echo base_url()?>/assets/images/stars.png") repeat-x 0 -60px;
  -webkit-transition: -webkit-width 0.5s;
  -moz-transition: -moz-width 0.5s;
  -ms-transition: -ms-width 0.5s;
  -o-transition: -o-width 0.5s;
  transition: width 0.5s;
}
ul.b {
    list-style-type: square;
}
</style>
</head>
<body>

<div>    
  <div class="row" style="border-bottom:8px solid black;">

    <div class="col-sm-5" >
      <img src="
    <?php echo base_url()?>/assets/images/speak.jpg" style="width:400px;height:250px;" class="text-uppercase faded animated headShake"> 
    </div>
    <div class="col-sm-7" style="font-family: oblique;color:#70db70"> 
      <h1 class="text-uppercase faded animated fadeInRight" align="left">Speak For Change<hr></h1>
   </div>
     <ul class="b" style="font-size: 16px">
      <li style="padding-left: 20px;"> Founded in 2016.</li><br>
      <li style="padding-left: 20px;"> Works for the speech of public. </li><br>
      <li style="padding-left: 20px;"> Located at Hyderabad.</li>
    </ul> 
  </div>

</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="panel panel-info">
    <div class="panel-heading"> Bank Accounts<i class="fa fa-inr" style="padding-left: 10px;"></i></div>  
  <br>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Bank Account name</th>
        <th>Bank</th>
        <th>Account No.</th>
        <th>Bank Balance</th>
        <th>Last Updated</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $i=1;
        foreach($tranx as $s) {
      ?>
      <tr>
        <td><?php echo $i++ ;?></td>
        <td><?php echo $s->acnt_name; ?></td>
        <td><?php echo $s->bnk_name; ?></td>
        <td><?php echo $s->acnt_num; ?></td>
        <td><?php echo $s->bb_bal; ?></td>
        <td><?php echo $s->last_date ;?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>
  </div>
  <br>
  <?php if($this->session->userdata('user_id')=='2') { ?>
  <div align="center"> <a href="<?php echo base_url();?>organization/add_transaction"><button class="btn btn-success">Add Transaction</button></a> </div>
  <?php }?>
  <br><br>
<?php if($this->session->userdata('user_id')=='1') { ?>
<hr size="20">
<h2 align="center">Ratings : </h2><br>

<form id="ratingsForm">
  <div class="stars">
    <input type="radio" name="star" class="star-1" id="star-1" value="1" />
    <label class="star-1" for="star-1">1</label>
    <input type="radio" name="star" class="star-2" id="star-2" value="2"/>
    <label class="star-2" for="star-2">2</label>
    <input type="radio" name="star" class="star-3" id="star-3" value="3"/>
    <label class="star-3" for="star-3">3</label>
    <input type="radio" name="star" class="star-4" id="star-4" value="4"/>
    <label class="star-4" for="star-4">4</label>
    <input type="radio" name="star" class="star-5" id="star-5" value="5"/>
    <label class="star-5" for="star-5">5</label>
    <span></span>
  </div>
  <br><br>
 <div align="center"> <button class="btn btn-success" onclick="stars_rating();">Submit</button> </div>
</form>
<?php }?>
<br><br>
</body>
</html>
