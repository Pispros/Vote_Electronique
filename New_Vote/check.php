<?php 
	if (isset($_SESSION['logged'])) 
	{
		if ($_SESSION['logged']!='yeahhh') 
		{
?>
			<script type="text/javascript">
				window.location = '../connect.php';
			</script>
<?php 
		}
	}
	if (!isset($_SESSION['logged'])) 
	{
?>
			<script type="text/javascript">
				window.location = '../connect.php';
			</script>
<?php 
	}
?>