<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>
	<h2>Welcome, <?php echo $this->session->userdata('user_data'); ?></h2>
	<?php var_dump($data); ?>
</body>
</html>