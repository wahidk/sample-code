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
		if($this->session->userdata('settings_leaves_updated') != ""){
			if($this->session->userdata('settings_leaves_updated') == "yes"){
				echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Leaves settings updated.</strong></div>";
			}else{
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Leaves settings could not be updated.</strong></div>";
			}
			//Unset the from session
			
			$this->session->unset_userdata('settings_leaves_updated');
		}
		?>
		</div>
		<!-- /User_callback -->
		
		<div class="row">
				
                <div class="col-sm-8">

					
					<!-- Update General Settings Block -->
					<section id= "update_leaves_settings_block" class="panel panel-default">

                      <header class="panel-heading">
                        <strong>Leaves Settings</strong>
                      </header>
					  
					  <form id="update_leaves_settings" data-validate="parsley" class="form-horizontal" action="<?=base_url();?>settings/leaves" method="post">
                      <div class="panel-body">                    
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">EL Allowed</label>
                          <div class="col-sm-3">
                            <input id="allowed_el_per_year" name="allowed_el_per_year" data-type="number" placeholder="El Allowed" class="form-control parsley-validated" value="<?=(isset($settings->allowed_el_per_year) ? $settings->allowed_el_per_year : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">per year</div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">CL Allowed</label>
                          <div class="col-sm-3">
                            <input id="allowed_cl_per_year" name="allowed_cl_per_year" data-type="number" placeholder="Cl Allowed" class="form-control parsley-validated" value="<?=(isset($settings->allowed_cl_per_year) ? $settings->allowed_cl_per_year : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">per year</div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">SL Allowed</label>
                          <div class="col-sm-3">
                            <input id="allowed_sl_per_year" name="allowed_sl_per_year" data-type="number" placeholder="Sl Allowed" class="form-control parsley-validated" value="<?=(isset($settings->allowed_sl_per_year) ? $settings->allowed_sl_per_year : "" )?>" data-required="true" >
                          </div>
						  <div class="col-sm-5 setting_input-sm">per year</div>
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
