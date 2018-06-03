

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	padding-top:50px;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<?php if ($this->session->userdata('is_logged_in')) { ?>
            <div class="featured-box nobg border-only left-separator">
                          
                    
            </div>
        <?php } else { ?>
<div class="login-form">
    <form id="loginForm" method="post">
    <?php echo validation_errors('<div class="row"><div class="col-md-12"><div class="alert alert-danger"><i class="fa fa-frown-o"></i>', '</div></div></div>'); ?>
        <h2 class="text-center"><img src="<?php echo base_url()?>/assets/images/ft.jpg" width="100" height="100"/></h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username/Email" id="email" name="email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="submit_login" data-loading-text="Loading...">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div> 
        </form>       
        <?php }?>
</div>
</body>
</html>                                		                        