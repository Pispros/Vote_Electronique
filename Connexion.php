<?php 
	session_start() ;
	include 'bd.php';

	$login = $_POST['login'];
	$login = trim($login);
	$login = htmlspecialchars($login);
	$login = stripcslashes($login);
	$login = addcslashes($login, "'");

	$pwd = $_POST['pwd'];
	$pwd = trim($pwd);
	$pwd = htmlspecialchars($pwd);
	$pwd = stripcslashes($pwd);
	$pwd = addcslashes($pwd, "'");

	$query = $pdo->query("SELECT CNI,rolexxx,password,ID FROM personne WHERE CNI='".$login."'");
	$nrow  = $query->rowCount();

	if ($nrow==0) 
	{
?>
		<script type="text/javascript">
			sessionStorage.setItem('message','Auth_failed');
			window.location = './connect.php';
		</script>
<?php 
	}
	else
	{
		$row = $query->fetchAll(PDO::FETCH_NUM);
		if (password_verify($pwd, $row[0][2])) 
		{
			$_SESSION['logged'] = 'yeahhh'  ;
			$_SESSION['rolexxx']= $row[0][1];
			$_SESSION['idxxx_p']= $row[0][3];
			if ( $row[0][1]=='admin') 
			{
?>
				<script type="text/javascript">
					window.location = './Admin_Dash/'
				</script>
<?php 
			}
			if ( $row[0][1]=='can') 
			{
?>
				<script type="text/javascript">
					window.location = './Candidat/'
				</script>
<?php 
			}
			if ( $row[0][1]=='user') 
			{
?>
				<script type="text/javascript">
					window.location = './New_Vote/'
				</script>
<?php 
			}
		}
		else
		{
?>
		<script type="text/javascript">
			sessionStorage.setItem('message','Auth_failed');
			window.location = './connect.php';
		</script>
<?php			
		}
	}
?>