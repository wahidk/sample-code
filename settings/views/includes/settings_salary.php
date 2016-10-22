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
		if($this->session->userdata('settings_salary_updated') != ""){
			if($this->session->userdata('settings_salary_updated') == "yes"){
				echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Salary settings updated.</strong></div>";
			}else{
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Salary settings could not be updated.</strong></div>";
			}
			//Unset the from session
			
			$this->session->unset_userdata('settings_salary_updated');
		}
		?>
		</div>
		<!-- /User_callback -->
		
		<div class="row">
				
                <div class="col-sm-8">

					
					<!-- Update General Settings Block -->
					<section id= "update_salary_settings_block" class="panel panel-default">

                      <header class="panel-heading">
                        <strong>Salary Settings</strong>
                      </header>
					  
					  <form id="update_salary_settings" data-validate="parsley" class="form-horizontal" action="<?=base_url();?>settings/salary" method="post">
                      <div class="panel-body">                    
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">Basic Component</label>
                          <div class="col-sm-3">
                            <input id="salary_basic_component" name="salary_basic_component" data-type="number" placeholder="Basic pay component" class="form-control parsley-validated" value="<?=(isset($settings->salary_basic_component) ? $settings->salary_basic_component : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">% of Annual Gross</div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">HRA Component</label>
                          <div class="col-sm-3">
                            <input id="salary_hra_component" name="salary_hra_component" data-type="number" placeholder="HRA component" class="form-control parsley-validated" value="<?=(isset($settings->salary_hra_component) ? $settings->salary_hra_component : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">% of Annual Gross</div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">LTA Component</label>
                          <div class="col-sm-3">
                            <input id="salary_lta_component" name="salary_lta_component" data-type="number" placeholder="LTA Component" class="form-control parsley-validated" value="<?=(isset($settings->salary_lta_component) ? $settings->salary_lta_component : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">% of Annual Gross</div>
                        </div>
						
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">Conveyance</label>
                          <div class="col-sm-6">
                            <input id="salary_conveyance_component" name="salary_conveyance_component" data-type="number" placeholder="Conveyance Component" class="form-control parsley-validated" value="<?=(isset($settings->salary_conveyance_component) ? $settings->salary_conveyance_component : "" )?>" data-required="true" >
                          </div>
						  <!--<div class="col-sm-5 setting_input-sm">% of Annual Gross</div>-->
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">Food Allo.</label>
                          <div class="col-sm-6">
                            <input id="salary_food_allo_component" name="salary_food_allo_component" data-type="number" placeholder="Food Allowance" class="form-control parsley-validated" value="<?=(isset($settings->salary_food_allo_component) ? $settings->salary_food_allo_component : "" )?>" data-required="true" >
                          </div>
						  <!--<div class="col-sm-5 setting_input-sm">% of Annual Gross</div>-->
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">Medical Allo.</label>
                          <div class="col-sm-6">
                            <input id="salary_medical_component" name="salary_medical_component" data-type="number" placeholder="Medical Allowance" class="form-control parsley-validated" value="<?=(isset($settings->salary_medical_component) ? $settings->salary_medical_component : "" )?>" data-required="true" >
                          </div>
						  <!--<div class="col-sm-5 setting_input-sm">% of Annual Gross</div>-->
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">Executive Allo.</label>
                          <div class="col-sm-6">
                            <input id="salary_exec_allo_component" name="salary_exec_allo_component" data-type="number" placeholder="Executive Allowance" class="form-control parsley-validated" value="<?=(isset($settings->salary_exec_allo_component) ? $settings->salary_exec_allo_component : "" )?>" data-required="true" >
                          </div>
						  <!--<div class="col-sm-5 setting_input-sm">% of Annual Gross</div>-->
                        </div>
						
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">Insurance</label>
                          <div class="col-sm-6">
                            <input id="salary_insurance_component" name="salary_insurance_component" data-type="number" placeholder="Insurance Component" class="form-control parsley-validated" value="<?=(isset($settings->salary_insurance_component) ? $settings->salary_insurance_component : "" )?>" data-required="true" >
                          </div>
						  <!--<div class="col-sm-5 setting_input-sm">% of Annual Gross</div>-->
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
