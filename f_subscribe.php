<?php 
	include 'bd.php';

	$cni        = $_REQUEST['cni'];
	$nom_pere   = $_REQUEST['nom_pere'];	
	$nom_mere   = $_REQUEST['nom_mere'];	
	$pro_pere   = $_REQUEST['pro_pere'];	
	$pro_mere   = $_REQUEST['pro_mere'];
	$ddn	    = $_REQUEST['ddn'];
	$ldn	    = $_REQUEST['ldn'];
	$profession = $_REQUEST['profession'];
	$pwd        = $_REQUEST['pwd'];

	$cni        = trim($cni);
	$cni        = stripcslashes($cni);
	$cni        = htmlspecialchars($cni);
	$cni        = addcslashes($cni,"'");

	$nom_pere        = trim($nom_pere);
	$nom_pere        = stripcslashes($nom_pere);
	$nom_pere        = htmlspecialchars($nom_pere);
	$nom_pere        = addcslashes($nom_pere,"'");

	$nom_mere        = trim($nom_mere);
	$nom_mere        = stripcslashes($nom_mere);
	$nom_mere        = htmlspecialchars($nom_mere);
	$nom_mere        = addcslashes($nom_mere,"'");

	$pro_pere        = trim($pro_pere);
	$pro_pere        = stripcslashes($pro_pere);
	$pro_pere        = htmlspecialchars($pro_pere);
	$pro_pere        = addcslashes($pro_pere,"'");

	$pro_mere        = trim($pro_mere);
	$pro_mere        = stripcslashes($pro_mere);
	$pro_mere        = htmlspecialchars($pro_mere);
	$pro_mere        = addcslashes($pro_mere,"'");

	$ddn        = trim($ddn);
	$ddn        = stripcslashes($ddn);
	$ddn        = htmlspecialchars($ddn);
	$ddn        = addcslashes($ddn,"'");

	$ldn        = trim($ldn);
	$ldn        = stripcslashes($ldn);
	$ldn        = htmlspecialchars($ldn);
	$ldn        = addcslashes($ldn,"'");

	$profession        = trim($profession);
	$profession        = stripcslashes($profession);
	$profession        = htmlspecialchars($profession);
	$profession        = addcslashes($profession,"'");

	$pwd        = trim($pwd);
	$pwd        = stripcslashes($pwd);
	$pwd        = htmlspecialchars($pwd);
	$pwd        = addcslashes($pwd,"'");

	$nom_elec   = $_REQUEST['nom_elec']; 
	$prenom_elec= $_REQUEST['prenom_elec'];
	$code_bureau= $_REQUEST['code_bureau'];
	$libel_bur  = $_REQUEST['libelle_bureau'];
	$tel        = $_REQUEST['tel'];
	$code_vote  = $_REQUEST['code_vote'];
	$code_natio = $_REQUEST['code_nationalite'];
	$date_i     = $_REQUEST['date_i'];   


	$nom_elec        = trim($nom_elec);
	$nom_elec        = stripcslashes($nom_elec);
	$nom_elec        = htmlspecialchars($nom_elec);
	$nom_elec        = addcslashes($nom_elec,"'");

	$prenom_elec        = trim($prenom_elec);
	$prenom_elec        = stripcslashes($prenom_elec);
	$prenom_elec        = htmlspecialchars($prenom_elec);
	$prenom_elec        = addcslashes($prenom_elec,"'");

	$code_bureau        = trim($code_bureau);
	$code_bureau        = stripcslashes($code_bureau);
	$code_bureau        = htmlspecialchars($code_bureau);
	$code_bureau        = addcslashes($code_bureau,"'");

	$libel_bur        = trim($libel_bur);
	$libel_bur        = stripcslashes($libel_bur);
	$libel_bur        = htmlspecialchars($libel_bur);
	$libel_bur        = addcslashes($libel_bur,"'");

	$tel        = trim($tel);
	$tel        = stripcslashes($tel);
	$tel        = htmlspecialchars($tel);
	$tel        = addcslashes($tel,"'");

	$code_vote        = trim($code_vote);
	$code_vote        = stripcslashes($code_vote);
	$code_vote        = htmlspecialchars($code_vote);
	$code_vote        = addcslashes($code_vote,"'");

	$code_natio        = trim($code_natio);
	$code_natio        = stripcslashes($code_natio);
	$code_natio        = htmlspecialchars($code_natio);
	$code_natio        = addcslashes($code_natio,"'");

	$date_i        = trim($date_i);
	$date_i        = stripcslashes($date_i);
	$date_i        = htmlspecialchars($date_i);
	$date_i        = addcslashes($date_i,"'");

	try
	{
		move_uploaded_file($_FILES['photo']['tmp_name'], './assets/img/electeurs/'.$cni.$_FILES['photo']['name']);
		$pdo->query("INSERT INTO personne VALUES(0,'".$cni."','".password_hash($pwd, PASSWORD_DEFAULT)."','user','".$nom_pere."','".$nom_mere."','".$pro_pere."','".$pro_mere."','".$ddn."','".$ldn."','".$profession."','".$cni.$_FILES['photo']['name']."','".$_REQUEST['circ']."')");

		$query = $pdo->query("SELECT MAX(ID) FROM personne");
		$last  = $query->fetchAll(PDO::FETCH_NUM);

		$pdo->query("INSERT INTO usager_votant VALUES (0,'".$last[0][0]."','".$nom_elec."','".$prenom_elec."','".$code_bureau."','".$libel_bur."','".$tel."','".$code_vote."','".$code_natio."','".$date_i."')");
?>
		<script type="text/javascript">
			sessionStorage.setItem('message','well');
			window.location = 'connect.php';
		</script>
<?php 
	}  	
	catch(Exception $e)
	{
?>
		<script type="text/javascript">
			sessionStorage.setItem('message','error');
			window.location = 'connect.php';
		</script>
<?php 
	}
?>