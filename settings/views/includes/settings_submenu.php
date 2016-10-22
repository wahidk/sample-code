<aside class="aside-md bg-white b-r" id="subNav">

	<div class="wrapper b-b header">Settings Options</div>

		<ul class="nav">

			<li class="b-b b-light <?=($settings_subfile == 'settings_general') ? "active" : ""?>">
				<a href="<?= base_url(); ?>settings/general">
				<i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>General Settings</a>
			</li>
			
			<li class="b-b b-light <?=($settings_subfile == 'settings_leaves') ? "active" : ""?>">
				<a href="<?= base_url(); ?>settings/leaves">
				<i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Leaves Settings</a>
			</li>
			
			<li class="b-b b-light <?=($settings_subfile == 'settings_salary') ? "active" : ""?>">
				<a href="<?= base_url(); ?>settings/salary">
				<i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Salary Settings</a>
			</li>
			
			<li class="b-b b-light <?=($settings_subfile == 'settings_tax_declaration') ? "active" : ""?>">
				<a href="<?= base_url(); ?>settings/tax_declaration">
				<i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Tax Declaration</a>
			</li>
			
			<li class="b-b b-light <?=($settings_subfile == 'settings_tax_deduction') ? "active" : ""?>">
				<a href="<?= base_url(); ?>settings/tax_deduction">
				<i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Tax & Deductions</a>
			</li>
			
		</ul>

</aside>