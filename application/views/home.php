<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Register / Login</title>
	<style type="text/css">
	label {
		font-weight: bold;
	}

	.box {
		vertical-align: top;
		width: 400px;
		display: inline-block;
	}

	button .register {
		width: 70px;
	}
	#errors {
		display: block;
	}
	</style>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>
	<div id = "wrapper">

		<div class = "box">
			<?php echo form_open('main/register'); ?>

			<?php echo form_label('Name:'); ?><?php form_error('dname'); ?>
			<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br>

			<?php echo form_label('Username:'); ?><?php form_error('duser'); ?>
			<?php echo form_input(array('id' => 'duser', 'name' => 'duser')); ?><br>

			<?php echo form_label('Password:   '); ?><?php form_error('dpword'); ?>
			<?php echo form_password(array('id' => 'dpword', 'name' => 'dpword')); ?><br>

			<?php echo form_label('Confirm Password: '); ?><?php form_error('dconf'); ?>
			<?php echo form_password(array('id' => 'dconf', 'name' => 'dconf')); ?><br>

			<?php echo form_label('Date Hired:    '); ?><?php form_error('dhired'); ?>
			<?php echo form_input(array('id' => 'dhired', 'type' => 'date', 'name' => 'dhired')); ?><br>

			<?php echo form_submit(array('id' => 'register', 'name' => 'register', 'value' => 'Register')); ?>

			<?php echo form_close() ?>

		</div>

		<div class = "box">

			<?php echo form_open('main/login'); ?>

			<?php echo form_label('Username: '); ?><?php form_error('l_user'); ?>
			<?php echo form_input(array('id' => 'l_user', 'name' => 'l_user')); ?><br>

			<?php echo form_label('Password: '); ?><?php form_error('l_pass'); ?>
			<?php echo form_input(array('id' => 'l_pass', 'name' => 'l_pass')); ?><br>

			<?php echo form_submit(array('id' => 'login', 'name' => 'login', 'value' => 'Log In')); ?>

			<?php echo form_close() ?>

		</div>
		
		<div id = "errors">
		<?php echo validation_errors(); ?>
		<?php var_dump($this->session->all_userdata()); ?>
		<?php var_dump($this->input->post()); ?>
		<a href="<?php site_url('main/logout'); ?>">Session Destroy</a>
		</div>

	</div>

</body>
</html>