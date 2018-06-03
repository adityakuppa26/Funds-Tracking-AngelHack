<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media='screen,print'>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/zebra_datepicker.js"></script>
<script type="text/javascript">

</script>
<h4 style="text-align:center;">Transaction Updating Form</h4>
<div class="row">
    <div class="col-md-10 col-md-offset-1 col-sm-12 ">
        <div class="row">
            <?php echo form_open("organization/transactions",array('role'=>'form','class'=>'form-custom'))?>
            <div class="col-md-4">
                <div class="form-group">
                        <label>Date:</label>
                        <input type="date" name="date" id="date" class="form-control" value="<?= $this->input->post('date') ?>" data-bv-notempty="true" data-bv-notempty-message="date is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z ]+$" data-bv-regexp-message="First Name should not contain numbers and special characters.">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                        <label>Bank Name</label>
                        <input type="text" name="bank_name" id="bank_name" class="form-control" value="<?= $this->input->post('bank_name') ?>" data-bv-notempty="true" data-bv-notempty-message="date is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z ]+$" data-bv-regexp-message="First Name should not contain numbers and special characters.">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
					<label>Project Name</label><br/>
					<select class="form-control" id="department" required="required" class="form-control " name="department">
						<option disabled="disabled" selected="selected">Select</option>
                        <option name="Project_1" value="1">Project_1</option>
                        <option name="Project_2" value="2">Project_2</option>
                        <option name="Project_3" value="3">Project_3</option>
					</select>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                        <label>Transaction Amount:</label>
                        <input type="text" name="transaction_amount" id="transaction_amount" class="form-control" value="<?= $this->input->post('transaction_amount') ?>" data-bv-notempty="true" data-bv-notempty-message="date is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z ]+$" data-bv-regexp-message="First Name should not contain numbers and special characters.">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                        <button name="add_transaction" id="add_transaction" style="margin-top:25px;" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>
