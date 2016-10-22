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
		if($this->session->userdata('settings_general_updated') != ""){
			if($this->session->userdata('settings_general_updated') == "yes"){
				echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>General settings updated.</strong></div>";
			}else{
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>General settings could not be updated.</strong></div>";
			}
			//Unset the from session
			
			$this->session->unset_userdata('settings_general_updated');
		}
		?>
		</div>
		<!-- /User_callback -->
		
		<div class="row">
				
                <div class="col-sm-8">

					
					<!-- Update General Settings Block -->
					<section id= "update_general_settings_block" class="panel panel-default">

                      <header class="panel-heading">
                        <strong>General Settings</strong>
                      </header>
					  
					  <form id="update_general_settings" data-validate="parsley" class="form-horizontal" action="<?=base_url();?>settings/general" method="post">
                      <div class="panel-body">                    
						<div class="form-group">
                          <label class="col-sm-3 control-label">Mailer Exe. Name</label>
                          <div class="col-sm-8">
                            <input id="mail_exe_name" name="mail_exe_name" type="text" placeholder="Mailer executive name" class="form-control parsley-validated" value="<?=(isset($settings->mail_exe_name) ? $settings->mail_exe_name : "" )?>" data-required="true">    
                          </div>
                        </div>
						
						<div class="form-group">
                          <label class="col-sm-3 control-label">Mailer Exe. Email</label>
                          <div class="col-sm-8">
                            <input id="mail_exe_email" name="mail_exe_email" type="text" placeholder="Mailer executive email address" data-required="true" data-type="email" class="form-control parsley-validated" value="<?=(isset($settings->mail_exe_email) ? $settings->mail_exe_email : "" )?>">    
                          </div>
                        </div>
						<div class="line col-sm-12"></div>
						
						<div class="row">
							<h4 style="padding-top:0px; margin-top:0px;" class="col-sm-12">SMTP Email Config</h4>
						</div>
						
						<div class="row">
							<h5 style="padding-top:0px; margin-top:0px; margin-left:20px; font-size:15px;;" class="col-sm-12">Finance Manager</h5>
						</div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Display Name</label>
                          <div class="col-sm-8">
                            <input id="finance_manager_name" name="finance_manager_name" type="text" placeholder="Finance Manager" class="form-control parsley-validated" value="<?=(isset($settings->finance_manager_name) ? $settings->finance_manager_name : "" )?>" data-required="true">    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-8">
                            <input id="finance_manager_email" name="finance_manager_email" type="text" placeholder="Finance manager email address" data-required="true" data-type="email" class="form-control parsley-validated" value="<?=(isset($settings->finance_manager_email) ? $settings->finance_manager_email : "" )?>" >    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-8">
                            <input id="finance_manager_password" name="finance_manager_password" type="text" placeholder="Finance manager email password" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->finance_manager_password) ? $settings->finance_manager_password : "" )?>">    
                          </div>
                        </div>
						
						<div class="row">
							<h5 style="padding-top:0px; margin-top:0px; margin-left:20px; font-size:15px;;" class="col-sm-12">Leave Manager</h5>
						</div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Display Name</label>
                          <div class="col-sm-8">
                            <input id="leave_manager_name" name="leave_manager_name" type="text" placeholder="Leave Manager" class="form-control parsley-validated" value="<?=(isset($settings->leave_manager_name) ? $settings->leave_manager_name : "" )?>" data-required="true">    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-8">
                            <input id="leave_manager_email" name="leave_manager_email" type="text" placeholder="Leave manager email address" data-required="true" data-type="email" class="form-control parsley-validated" value="<?=(isset($settings->leave_manager_email) ? $settings->leave_manager_email : "" )?>" >    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-8">
                            <input id="leave_manager_password" name="leave_manager_password" type="text" placeholder="Leave manager email password" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->leave_manager_password) ? $settings->leave_manager_password : "" )?>">    
                          </div>
                        </div>
						
						<div class="row">
							<h5 style="padding-top:0px; margin-top:0px; margin-left:20px; font-size:15px;;" class="col-sm-12">Support</h5>
						</div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Display Name</label>
                          <div class="col-sm-8">
                            <input id="support_name" name="support_name" type="text" placeholder="Support" class="form-control parsley-validated" value="<?=(isset($settings->support_name) ? $settings->support_name : "" )?>" data-required="true">    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-8">
                            <input id="support_email" name="support_email" type="text" placeholder="Support email address" data-required="true" data-type="email" class="form-control parsley-validated" value="<?=(isset($settings->support_email) ? $settings->support_email : "" )?>" >    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-8">
                            <input id="support_password" name="support_password" type="text" placeholder="Support email password" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->support_password) ? $settings->support_password : "" )?>">    
                          </div>
                        </div>
						
						<div class="row">
							<h5 style="padding-top:0px; margin-top:0px; margin-left:20px; font-size:15px;;" class="col-sm-12">Feedback</h5>
						</div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Display Name</label>
                          <div class="col-sm-8">
                            <input id="support_name" name="feedback_name" type="text" placeholder="Feedback" class="form-control parsley-validated" value="<?=(isset($settings->feedback_name) ? $settings->feedback_name : "" )?>" data-required="true">    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-8">
                            <input id="feedback_email" name="feedback_email" type="text" placeholder="Feedback email address" data-required="true" data-type="email" class="form-control parsley-validated" value="<?=(isset($settings->feedback_email) ? $settings->feedback_email : "" )?>" >    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-8">
                            <input id="feedback_password" name="feedback_password" type="text" placeholder="Feedback email password" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->feedback_password) ? $settings->feedback_password : "" )?>">    
                          </div>
                        </div>
						
						<div class="row">
							<h5 style="padding-top:0px; margin-top:0px; margin-left:20px; font-size:15px;;" class="col-sm-12">Info</h5>
						</div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Display Name</label>
                          <div class="col-sm-8">
                            <input id="info_name" name="info_name" type="text" placeholder="Info" class="form-control parsley-validated" value="<?=(isset($settings->info_name) ? $settings->info_name : "" )?>" data-required="true">    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-8">
                            <input id="info_email" name="info_email" type="text" placeholder="Info email address" data-required="true" data-type="email" class="form-control parsley-validated" value="<?=(isset($settings->info_email) ? $settings->info_email : "" )?>" >    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-8">
                            <input id="info_password" name="info_password" type="text" placeholder="Info email password" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->info_password) ? $settings->info_password : "" )?>">    
                          </div>
                        </div>
						
						<div class="row">
							<h5 style="padding-top:0px; margin-top:0px; margin-left:20px; font-size:15px;;" class="col-sm-12">Info Culture</h5>
						</div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Display Name</label>
                          <div class="col-sm-8">
                            <input id="infoculture_name" name="infoculture_name" type="text" placeholder="Info Culture" class="form-control parsley-validated" value="<?=(isset($settings->infoculture_name) ? $settings->infoculture_name : "" )?>" data-required="true">    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-8">
                            <input id="infoculture_email" name="infoculture_email" type="text" placeholder="Info Culture email address" data-required="true" data-type="email" class="form-control parsley-validated" value="<?=(isset($settings->infoculture_email) ? $settings->infoculture_email : "" )?>" >    
                          </div>
                        </div>
						<div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-8">
                            <input id="infoculture_password" name="infoculture_password" type="text" placeholder="Info Culture email password" data-required="true" class="form-control parsley-validated" value="<?=(isset($settings->infoculture_password) ? $settings->infoculture_password : "" )?>">    
                          </div>
                        </div>
						
						<div class="line col-sm-12"></div>
						
						<div class="row">
							<h4 style="padding-top:0px; margin-top:0px;" class="col-sm-12">Extra Components</h4>
						</div>
						
						 <!--Salary breakup extra fields-->
						<div class="form-group">
                          <label class="col-sm-3 control-label">Salary More Components</label>
                          <div class="col-sm-8">
                            <input id="salary_extra_options" name="salary_extra_options" type="text" placeholder="eg. Conveyance,HRA,Medical..." class="form-control parsley-validated" value="<?=(isset($settings->salary_extra_options) ? $settings->salary_extra_options : "" )?>">
                          </div>
						  <div class="col-sm-9 input_note">(Add fields with comma separation)</div>
                        </div>
						<!--Salary breakup extra fields-->
						
						<!--Tax Declaration extra fields-->
						<div class="form-group">
                          <label class="col-sm-3 control-label">Tax More Components</label>
                          <div class="col-sm-8">
                            <input id="tax_declaration_extra_options" name="tax_declaration_extra_options" type="text" placeholder="eg. Food Allowance,LTA,Rent..." class="form-control parsley-validated" value="<?=(isset($settings->tax_declaration_extra_options) ? $settings->tax_declaration_extra_options : "" )?>" >
                          </div>
						  <div class="col-sm-9 input_note">(Add fields with comma separation)</div>
                        </div>
						<!--Tax Declaration extra fields-->
						
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
