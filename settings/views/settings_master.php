<?php $this->load->view('partials/header'); ?>

<?php $this->load->view('partials/dashboard_top_nav'); ?>  	

<section>

	<section class="hbox stretch">

		<!-- Side Navigation -->

		<?php $this->load->view('partials/dashboard_side_nav'); ?>

		<!-- /Side Navigation -->

		<!-- Main_content-->

		<section id="content">

			<section class="vbox">

				<!-- Content -->

				<section class="hbox stretch">

					<!-- Submenu -->	 

					<?php $this->load->view('includes/settings_submenu'); ?>

					<!-- /Submenu -->

					<!-- Content data -->

					<?php $this->load->view($settings_subfile);?>

					<!-- /Content data -->

				</section>

				<!-- /Content -->

			</section>

			<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>

		</section>

		<!-- /Main_content-->

	</section>

</section>

<?php $this->load->view('partials/footer'); ?>