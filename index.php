<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desbloqueo Laptop y Tablet MX</title>
    <?php include('css.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body >

        
        <nav class="navbar navbar-static-top" role="navigation">

        <div class="navbar-header">
        
                
        </div>

        <div class="navbar-collapse collapse" id="navbar">
        <ul class="nav navbar-nav">
        <!--LOGOTIPO-->
        <img  src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/Desbloqueo/img/sec.png" >
        <!--FIN LOGOTIPO-->
        </ul>
        <ul class="nav navbar-top-links navbar-right">
                    
        </ul>
        </div>
        </nav>
        </div>
        
            <div class="wrapper wrapper-content">
            <div class="container">

            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-4">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5></h5>
            <div class="ibox-tools">
           
            </div>
            </div>
            <div class="ibox-content">
                <form method="POST" name="externo" onsubmit="return validacion()" >
                    <label>Clave CT</label>
                    <input type="text" id="clavecct" name="clavecct"  class="form-control" ><br>
                    <input type="submit" name="aceptar" value="Consular" class="btn btn-w-m btn-primary">
                </form>
            <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/Desbloqueo/busquedaAvanzada.php">Encuentra tu Escuela</a><br><br>
            <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/Desbloqueo/verificar.php">Verifica si ya tienes tu Archivo o Codigo.</a>
            </div>
            </div>
            </div>

            <div class="col-lg-8">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5></h5>
            <div class="ibox-tools">
           
            </div>
            </div>
            <div class="ibox-content">
               
            </div>
            </div>
            </div>


            </div>
            </div>



            </div>
            </div>
             
            
<?php include("footer.php"); ?> 
           
            

        </div>
        </div> 

</body>
<?php include('js.php'); ?>
<script>
    function validacion(){

        var clavecct = document.getElementById("clavecct").value;
        if(clavecct == null || clavecct.length == 0){
            sweetAlert("Cuidado", "No hay datos en el campo Clavec ct.", "error");
            return false;
        }
    }
</script>
</html>
<?php
if(isset($_POST['aceptar'])){
$clavecct = $_POST['clavecct'];
include('Controller/busquedaController.php');
$b = consultarct($clavecct);
}
?>

