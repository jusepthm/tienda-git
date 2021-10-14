<?php
require_once("model.php");
$model = new model();
$opcion =$_REQUEST["opcion"];
if ($opcion != 1){
	$identificacion=$_REQUEST["identificacion"];
	echo '<script>alert("identificacion'.$identificacion.'");</script>';
	$nombre=$_REQUEST["nombre"];
	echo '<script>alert("nombre'.$nombre.'");</script>';
	$apellido=$_REQUEST["apellido"];
	echo '<script>alert("apellido'.$apellido.'");</script>';
	$sexo=$_REQUEST["sexo"];
	echo '<script>alert("sexo'.$sexo.'");</script>';
	$ciudad=$_REQUEST["ciudad"];
	echo '<script>alert("ciudad'.$ciudad.'");</script>';
	$fecha=$_REQUEST["fecha"];
	echo '<script>alert("fecha'.$fecha.'");</script>';
	$direccion=$_REQUEST["direccion"];
	echo '<script>alert("direccion'.$direccion.'");</script>';
	$producto =$_REQUEST["producto"];
	echo '<script>alert("producto'.$producto.'");</script>';
	$cantidad =$_REQUEST["cantidad"];
	echo '<script>alert("cantidad'.$cantidad.'");</script>';
}else{
	$option = 0;
}
	
if ($opcion == "Guardar"){
		$opcion = 1;
	}
	if ($opcion == "Actualizar"){
		$opcion = 2;
	}
	if ($opcion == "Consultar"){
		$opcion = 3;
	}
	if ($opcion == "Eliminar"){
		$opcion = 4;
	}
// ejercicio 1
if($opcion == 1){
	echo $opcion;
	echo "Guardar registro";
}
// ejercicio 2
switch($opcion){
	case "0":
		header("location:registro.php?identificacion=&nombre=&apellido=&sexo=&ciudad=&fecha=&direccion=&producto=&cantidad=");
	case "1":
		echo "ingresando al case 1";
		$rs = $model->consulta("SELECT identificacion FROM registro WHERE identificacion='$identificacion'");
   	 	$total=mysqli_num_rows($rs);
    	if ($total == '0'){
    	$rsins = $model->consulta("INSERT INTO registro(identificacion,nombre,apellido,sexo,ciudad,fecha,direccion,producto,cantidad) VALUES ('$identificacion','$nombre','$apellido','$sexo','$ciudad','$fecha','$direccion','$producto','$cantidad')");
    	}
    	$mensaje=1;
		header("location:registro.php?identificacion=&nombre=&apellido=&sexo=&ciudad=&fecha=&direccion=&producto=&cantidad=");
	break;
	case "2":
		$rs = $model->consulta("SELECT identificacion FROM registro WHERE identificacion='$identificacion'");
    	$total=mysqli_num_rows($rs);
    	if ($total != '0'){
    	$rsupd = $model->consulta("UPDATE registro SET nombre = '$nombre', apellido = '$apellido', sexo = '$sexo', ciudad = '$ciudad', fecha = '$fecha', direccion = '$direccion', producto = '$producto', cantidad = '$cantidad' WHERE identificacion = '$identificacion'");
    	}
		echo "Ejemplo: UPDATE FROM tablaoption";
		header("location:registro.php?identificacion=&nombre=&apellido=&sexo=&ciudad=&fecha=&direccion=&producto=&cantidad=");
	break;
	case "3":
		$rs = $model->consulta("SELECT identificacion,nombre,apellido,sexo,ciudad,fecha,direccion,producto,cantidad FROM registro WHERE identificacion='$identificacion'");
    	$total=mysqli_num_rows($rs);
		$row =mysqli_fetch_array($rs, MYSQLI_BOTH);
		//echo $total;
		if ($total == '0'){
			//echo "redireccionando";
			header("location:registro.php?identificacion=&nombre=&apellido=&sexo=&ciudad=&fecha=&direccion=&producto=&cantidad=");
		}else{
			//echo "Esta eligiendo esta opcion";
			$identificacion= $row['identificacion'];
			$nombre= $row['nombre'];
			$apellido= $row['apellido'];
			$sexo= $row['sexo'];
			$ciudad= $row['ciudad'];
			$fecha= $row['fecha'];
			$direccion= $row['direccion'];
			$producto= $row['producto'];
			$cantidad= $row['cantidad'];
			header("location:registro.php?identificacion=$identificacion&nombre=$nombre&apellido=$apellido&sexo=$sexo&ciudad=$ciudad&fecha=$fecha&direccion=$direccion&producto=$producto&cantidad=$cantidad");
		}
	break;
	case "4":
		$rs = $model->consulta("SELECT identificacion FROM registro WHERE identificacion ='$identificacion'");
    	$total=mysqli_num_rows($rs);
    	$rsdel =$model->consulta("DELETE FROM registro WHERE identificacion='$identificacion'");
		echo "Ejemplo: DELETE FROM tablaoption where id=id";
		header("location:registro.php?identificacion=&nombre=&apellido=&sexo=&ciudad=&fecha=&direccion=&producto=&cantidad=");
	break;
}
?>