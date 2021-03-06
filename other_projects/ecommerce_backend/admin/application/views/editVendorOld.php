<?php

$id = '';
$name = '';
$contact_number = '';
$email = '';
$address = '';
$status = '';
$updated_by = '';
$updated_on = '';


if(!empty($vendorInfo))
{
    foreach ($vendorInfo as $vf)
    {
		$id = $vf->id;
		$name = $vf->name;
		$contact_number = $vf->contact_number;
		$email = $vf->email;
		$address = $vf->address;
		$status = $vf->status;
		$updated_by = $vf->updated_by;
		$updated_on = $vf->updated_on;
    }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Vendor Management
		<a class="btn btn-sm btn-info" href="<?php echo base_url().'vendorListing/';?>">Vendor Listing</a>
        <small>Add / Edit Vendor</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Vendor Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>editVendor" method="post" id="editVendor" role="form">
                        <div class="box-body">
                           <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="name">Vendor Name</label>
                                        <input type="text" class="form-control required" id="name" name="name" value="<?php echo $name; ?>">
										<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                    </div>
                                </div>
								<div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="contact_number">Vendor Contact_Number</label>
										<input type="text" class="form-control required" id="contact_number" name="contact_number" value="<?php echo $contact_number; ?>">
                                    </div>     
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="email">Vendor Email</label>
										<input type="text" class="form-control required" id="email" name="email" value="<?php echo $address; ?>">
                                    </div>     
                                </div>
								<div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="address">Vendor Address</label>
										<textarea class="form-control required" id="address" name="address"><?php echo $address; ?></textarea>
                                    </div>
                                </div>
							</div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Edit" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editVendor.js" type="text/javascript"></script>