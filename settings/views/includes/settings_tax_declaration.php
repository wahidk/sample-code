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
		if($this->session->userdata('settings_tax_declaration_updated') != ""){
			if($this->session->userdata('settings_tax_declaration_updated') == "yes"){
				echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Tax Declaration settings updated.</strong></div>";
			}else{
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Tax Declaration settings could not be updated.</strong></div>";
			}
			//Unset the from session
			
			$this->session->unset_userdata('settings_tax_declaration_updated');
		}
		?>
		</div>
		<!-- /User_callback -->
		
		<div class="row">
				
                <div class="col-sm-8">

					
					<!-- Update General Settings Block -->
					<section id= "update_tax_declaration_settings_block" class="panel panel-default">

                      <header class="panel-heading">
                        <strong>Tax Declaration Settings</strong>
                      </header>
					  
					  <form id="update_tax_declaration_settings" data-validate="parsley" class="form-horizontal" action="<?=base_url();?>settings/tax_declaration" method="post">
                      <div class="panel-body">   
					  
						<?php 
						if($settings != NULL){ 
							foreach($settings as $settingKey=>$settingValue){ 
								if($settingKey != "tax_setting_extra_option_values"){
									$fieldLabel = ucwords(str_replace('_', ' ', str_replace('tax_setting_', '', $settingKey)));
						?>
									<div class="form-group">
									  <label class="col-sm-3 control-label"><?=$fieldLabel?></label>
									  <div class="col-sm-6">
										<input id="<?=$settingKey?>" name="<?=$settingKey?>" data-type="number" placeholder="0.00" class="form-control parsley-validated" value="<?=$settingValue?>" data-required="true" >
									  </div>
									  <div class="col-sm-3 setting_input-sm">Max</div>
									</div>
						<?php }}}?>
						
						
						<?php 
						//Handling Extra options
						if(!empty($extra_options)){ 
							$i=0;
							foreach($extra_options as $optionKey=>$optionValue){
							$i++;
						?>
						<div class="form-group">
                          <label class="col-sm-3 control-label"><?=(isset($optionKey) ? ucfirst($optionKey) : "Other Option - ".$i)?></label>
                          <div class="col-sm-6">
                            <input name="tax_setting_extra_option_values[]" data-type="number" placeholder="0.00" class="form-control parsley-validated" value="<?=(isset($optionValue) ? $optionValue : "0.00")?>">    
                          </div>
						  <div class="col-sm-3 setting_input-sm">Max</div>
                        </div>
						<?php }}//Handling Extra options ends?>
						
						
						
						
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
