<?php include '../../app/connect.php'; ?>
<?php	 
	 if (isset($_GET['id'])) {
	 	$id = $_GET['id'];
	 	$query= $connect->prepare("DELETE FROM `xabarlar`  WHERE `id` = ?");
	 	$delete = $query->execute([$id]);
	 }


?>