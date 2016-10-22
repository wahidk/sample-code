<section>
  <section class="vbox">
    <!-- Header -->
    
    <header class="header bg-white b-b b-light">
		<a class="btn btn-sm btn-default active" data-toggle="class:hide" href="#subNav"><i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>								
    </header>
    <!-- /Header -->
    
    <section class="scrollable wrapper w-f">

      <!-- Page Content -->
      <div class="wrapper">
	  
	  	<!-- User_callback -->
		<div id="status">
		<?php
		if($this->session->userdata('settings_tax_deduction_updated') != ""){
			if($this->session->userdata('settings_tax_deduction_updated') == "yes"){
				echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Tax detection settings updated.</strong></div>";
			}else{
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Tax detection could not be updated.</strong></div>";
			}
			//Unset the from session
			
			$this->session->unset_userdata('settings_tax_deduction_updated');
		}
		?>
		</div>
		<!-- /User_callback -->
		
		<div class="row">
				
                <div class="col-sm-8">

					
					<!-- Update General Settings Block -->
					<section id= "update_tax_deduction_settings_block" class="panel panel-default">

                      <header class="panel-heading">
                        <strong>Tax & Deductions Setting</strong>
                      </header>
					  
					  <form id="update_tax_deduction_settings" data-validate="parsley" class="form-horizontal" action="<?=base_url();?>settings/tax_deduction" method="post">
                      <div class="panel-body">                    
						<div class="form-group">
                          <label class="col-sm-4 control-label">PT</label>
                          <div class="col-sm-4">
                            <input id="tax_setting_PT" name="tax_setting_PT" data-type="number" placeholder="Professional Tax" class="form-control parsley-validated" value="<?=(isset($settings->tax_setting_PT) ? $settings->tax_setting_PT : "" )?>" data-required="true">    
                          </div>
						  <div class="col-sm-2 setting_input-sm"> per month</div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-4 control-label">Guest house facilities</label>
                          <div class="col-sm-4">
                            <input id="tax_setting_guest_house_facilities" name="tax_setting_guest_house_facilities" data-type="number" placeholder="0.00" class="form-control parsley-validated" value="<?=(isset($settings->tax_setting_guest_house_facilities) ? $settings->tax_setting_guest_house_facilities : "0.00" )?>" data-required="true">    
                          </div>
						  <div class="col-sm-2 setting_input-sm"> per month</div>
                        </div>						
						
						<div class="form-group">
                          <label class="col-sm-4 control-label">Tax Free Salary Slot</label>
                          <div class="col-sm-4">
                            <input id="tax_free_slot_max" name="tax_free_slot_max" data-type="number" placeholder="Tax Free Salary Slot" class="form-control parsley-validated" value="<?=(isset($settings->tax_free_slot_max) ? $settings->tax_free_slot_max : "" )?>" data-required="true">    
                          </div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-4 control-label">Tax Slot 1 Max</label>
                          <div class="col-sm-4">
                            <input id="tax_slot1_max" name="tax_slot1_max" data-type="number" placeholder="Tax Slot 1 Max" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->tax_slot1_max) ? $settings->tax_slot1_max : "" )?>">    
                          </div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-4 control-label">Tax Percentage on Slot 1</label>
                          <div class="col-sm-2">
                            <input id="tax_slot1_tax_percentage" name="tax_slot1_tax_percentage" data-type="number" placeholder="10" class="form-control parsley-validated" value="<?=(isset($settings->tax_slot1_tax_percentage) ? $settings->tax_slot1_tax_percentage : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">%</div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-4 control-label">Tax Slot 2 Max</label>
                          <div class="col-sm-4">
                            <input id="tax_slot2_max" name="tax_slot2_max" data-type="number" placeholder="Tax Slot 2 Max" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->tax_slot2_max) ? $settings->tax_slot2_max : "" )?>">    
                          </div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-4 control-label">Tax Percentage on Slot 2</label>
                          <div class="col-sm-2">
                            <input id="tax_slot2_tax_percentage" name="tax_slot2_tax_percentage" data-type="number" placeholder="20" class="form-control parsley-validated" value="<?=(isset($settings->tax_slot2_tax_percentage) ? $settings->tax_slot2_tax_percentage : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">%</div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-4 control-label">Tax Percentage on Slot 3</label>
                          <div class="col-sm-2">
                            <input id="tax_slot3_tax_percentage" name="tax_slot3_tax_percentage" data-type="number" placeholder="30" class="form-control parsley-validated" value="<?=(isset($settings->tax_slot3_tax_percentage) ? $settings->tax_slot3_tax_percentage : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">%</div>
                        </div>
						
						
                      </div>

                      <footer class="panel-footer text-right bg-light lter">
                        <button class="btn btn-success btn-s-xs" type="submit">Save</button>
                      </footer>					  
					   </form>
                    </section>
					<!-- /Update Profile Block -->
					
                </div>
				
				<div class="col-sm-4">
                 <section class="panel panel-default">
                      <header class="panel-heading">
						<strong>Some Content</strong>
                      </header>
					  
					  <div class="panel-body">
					  Some more content here
					  </div>
					  
					  </section>
				</div>	

              </div>
        
      </div>
      <!-- /Page Content -->
    </section>
  </section>
</section>
