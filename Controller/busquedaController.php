<?PHP
include("".$_SERVER['DOCUMENT_ROOT'].'/Desbloqueo/conexion.php');
function consultarct($clavecct){

		$cn=  Conectarse();
		$consultar = "SELECT * FROM ct_escuelas WHERE clavecct LIKE '%$clavecct%' ";
		$ejecutar = mysql_query($consultar,$cn) or die(mysql_error());
		 

		if(mysql_num_rows($ejecutar) > 0 ){

			 echo '<script>
                   swal({
                   title: "Buen Trabajo!",
                   text: "Clave encontrada en mi base de datos.",
                   type: "success",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href="laptab/index.php?clavecct='.$clavecct.'";
                   });
                   </script> ';

		}elseif(mysql_num_rows($ejecutar) <= 0 ){

			 echo '<script>
                   swal({
                   title: "Algo Anda Mal!",
                   text: "Escuela No Existe",
                   type: "warning",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href="";
                   });
                   </script> ';

		}

	}
   

?>