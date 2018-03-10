<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desbloqueo MX</title>

    <?php include 'css.php';?>
</head>

<body class="top-navigation" >

        <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
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
                    <label>Clave de tu escuela</label>
                    <input type="text" id="clavecct" name="clavecct"  class="form-control" ><br>
                    <input type="submit" name="aceptar" value="Consular" class="btn btn-w-m btn-primary">
                </form>
            <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/Desbloqueo/busquedaAvanzada.php">Encuentra tu Escuela</a><br><br>
            <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/Desbloqueo/verificar.php">Verifica si ya tienes tu archivo o codigo.</a>
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

                <h2><b>¿Eres Alumno y tu tableta o laptop está bloqueada?</b></h2>

                    <h3>Para poder obtener tu código o archivo de desbloqueo
                    tienes que tener a la mano la siguiente información:</h3>
                   <p><i class="fa fa-check"></i> Número de Serie &nbsp;<b>( Se encuentra en la parte trasera del equipo MX)</b></p>
                   <p><i class="fa fa-check"></i> Clave y Nombre de la escuela donde se te entregó el equipo.</p>
                   <p><i class="fa fa-check"></i> Localidad, Municipio.</p>
                   <p><i class="fa fa-check"></i> Nombre de propietario</p>
                   <p><i class="fa fa-check"></i> Curp</p>
                   <p><i class="fa fa-check"></i> ID de Hardware &nbsp;<b>( Se encuentra en pantalla de equipo MX encendido)</b></p>
                   <p><i class="fa fa-check"></i> Boot Tick &nbsp;<b>( Se encuentra en pantalla de equipo MX encendido)</b></p>
                   <p><i class="fa fa-check"></i> Provisional Number en este caso si es tableta. &nbsp;<b>( Se encuentra en pantalla de equipo MX encendido)</b></p>
                   <p><i class="fa fa-check"></i> Por ultimo datos personales: nombre completo, teléfono y correo electrónico.</p>


                    <p><i class="fa fa-check"></i>Al momento de capturar todos los datos correctos, tienes que esperar un lapso de 3 días hábiles
                    para que te llegue tu código o archivo de desbloqueo.</p>

                    <p><i class="fa fa-check"></i>Todos estos datos son esenciales para así poder obtener tú código o
                    archivo y que sigas disfrutando de tu EQUIPO MX.</p>

                   <p><i class="fa fa-check"></i> La secretaria de educación y Cultura del estado de Sonora lanza este
                    proyecto con el fin de apoyar a todos los niños de nuestro estado e
                    informarles que somos el único medio encargado de realizar el proceso de
                    desbloqueo de tu equipo MX.</p>

                    <p><i class="fa fa-check"></i>Para mayor información puedes comunicarte al Teléfono oficial de la <b>SEC
                    289 7600 ext.: 2049 y 2050. Departamento de Aula de Medios.</b></p>

                    <h2 class="text-danger"><i class="fa fa-angellist"></i>&nbsp;SOLO COLOCA LA CLAVE DE TU ESCUELA E INICIA TU PROCESO.</h2>

                </div>


            </div>
            </div>

            </div>
            </div>
            </div>
            </div>


<?php include "footer.php";?>



        </div>
        </div>

</body>
<?php include 'js.php';?>
<script>
    function validacion(){

        var clavecct = document.getElementById("clavecct").value;
        if(clavecct == null || clavecct.length == 0){
            sweetAlert("Cuidado", "No hay datos en el campo Clave de tu escuela.", "error");
            return false;
        }
    }
</script>
</html>
<?php
if (isset($_POST['aceptar'])) {
    $clavecct = $_POST['clavecct'];
    include 'Controller/busquedaController.php';
    $b = consultarct($clavecct);
}
?>

