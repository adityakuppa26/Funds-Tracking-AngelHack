<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> - Funds Tracking </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media='screen,print'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flaticon.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/essentials.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datatables.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.chained.min.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body > 
   <div id="wrap" >
        <div class="navbar navbar-inverse" style="background-color:black; color:white;" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header" >
                    <a class="navbar-brand" style="font-family:Helvetica;" href="<?php echo base_url();?>" > Funds Tracking</a>     
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if($this->session->userdata('is_logged_in')) { ?>
                        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">
                            <?php
                                $logged_in=$this->session->userdata('is_logged_in');
                                 echo $this->session->userdata('user_name')." | ";  ?><b class="caret"></b></a>
                              
                        </li>
                        <li><a href="<?php echo base_url();?>home/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <?php } else {?>
                    <li class="<?php if(preg_match("^".base_url()."home/^",current_url())){ echo " active";}?>" >
                        <a href="<?php echo base_url()."home/login";?>" style="font-size: 18px;"><i class="fa fa-sign-in" style="font-size: 18px;"></i> Login</a>
                    </li>
                    <?php }?>
                    </ul>
                </div><!--/. navbar-collapse -->
            </div>
        </div>
