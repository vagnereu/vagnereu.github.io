<?php 
	require_once('../classes/db.class.php');
	$cod_material = intval($_GET['cod']);
	$sql = "DELETE from materiais WHERE cod_material = '$cod_material'";
	$objDb = new db();
	$link = $objDb->conecta_mysqli();
	$resultado_id = mysqli_query($link, $sql); 
	if ($resultado_id ) {
		echo "<script>
				location.href='../pages/materiais_home.php';
			</script>";
	}else{
		echo "<script>
			alert('Não foi possível excluir este registro! Entre em contato com o administrador do sistema.')
			location.href=' ../pages/materiais_home.php';
		</script>";
	}
 ?>