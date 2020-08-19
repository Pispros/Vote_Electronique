<?php 
	if (isset($_SESSION['logged'])) 
	{
		if ($_SESSION['logged']!='yeahhh') 
		{
?>
			<script type="text/javascript">
				window.location = '../';
			</script>
<?php 
		}
	}
?>