<?php
if (isset($_GET['clavecct'])) {
    $clavecct = $_GET['clavecct'];
    include "" . $_SERVER['DOCUMENT_ROOT'] . '/Desbloqueo/conexion.php';
    $cn       = Conectarse();
    $sql      = "SELECT * FROM ct_escuelas LEFT JOIN ct_direscolar ON ct_escuelas.clavecct = ct_direscolar.clavecct WHERE ct_escuelas.clavecct LIKE '%" . $clavecct . "%'";
    $ejecutar = mysql_query($sql, $cn) or die(mysql_error());
    while ($row = mysql_fetch_array($ejecutar)) {

        $clavecom  = $row['clavecct'];
        $escuela   = $row['nombrect'];
        $localidad = $row['localidad'];
        $municipio = $row['municipio'];

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SICAT EXTERNO</title>
    <?php include '../css.php';?>
</head>

<body class="top-navigation">

        <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">

        <div class="navbar-header">


        </div>

        <div class="navbar-collapse collapse" id="navbar">
        <ul class="nav navbar-nav">
        <!--LOGOTIPO-->
        <img  src="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/img/sec.png" >

        </ul>
        <ul class="nav navbar-top-links navbar-right">
           <li>
            <a href="<?PHP $_SERVER['DOCUMENT_ROOT']?>/sicat/externo">
             <i class="fa fa-arrow-left"></i> Pagina Principal
            </a>
           </li>
        </ul>
        </div>
        </nav>
        </div>

            <div class="wrapper wrapper-content">
            <div class="container">

            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Desbloqueo Laptop y Tablet MX</h5>
            <div class="ibox-tools">
            <a style="color:#FF0000;" href="../Archivos/Manual.docx" download="Manual Llenado de Formulario" ><i class="fa fa-download"></i>&nbsp;Manual de Llenado</a>
            </div>
            </div>
            <div class="ibox-content">




            <form name="equipos" id="equipos" method="POST" id="form_rep" onsubmit="return validarFormulario()">
            <div class="row show-grid">
            <div class="col-md-4">
            <label>Tipo de Equipo:</label><br>
            <select  id="equipo" name="equipo" class="form-control">
                <option value="TABLET">TABLET</option>
                <option value="LAPTOP_MX">LAPTOP MX</option>
            </select><p class="text-danger">Escoge que tipo de equipo mx tienes.</p>
            </div>
            </div>
            <div class="row show-grid">
            <div class="col-md-4">
            <label>No Serie:</label><br>
            <input type="text" id="serie" placeholder="Ej: SNX o IUS o SZLES" name="serie" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Clave CT:</label><br>
            <input type="text" id="clave" value="<?php echo $clavecom; ?>" placeholder="Ej: 26DPR0000H" name="clave" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Escuela:</label><br>
            <input type="text" id="escu" value="<?php echo $escuela; ?>" placeholder="Ej: Benito juárez" name="escu" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Localidad:</label><br>
            <input type="text" id="loc" value="<?php echo $localidad; ?>" placeholder="Ej: Miguel Aleman" name="loc" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Municipio:</label><br>
            <input type="text" id="mun" value="<?php echo $municipio; ?>" placeholder="Ej: Hermosillo" name="mun" class="form-control">
            </div>

            <div class="col-md-4">
            <label>Nombre del niñ@:</label><br>
            <input type="text" id="nino" placeholder=" Ej: Juan Perez Perez"  name="nino" class="form-control">
            </div>
            <div class="col-md-4">
            <label>CURP:</label><br>
            <input type="text" id="curp" placeholder="" name="curp" class="form-control">
            </div>

            </div>
            <div class="col-md-12">
            <h2>Informaci&oacute;n del equipo a desbloquear</h2>
            </div>
            <div class="row show-grid">
            <div class="col-md-4">
            <label>BOOT TIK:</label><br>
            <input type="text" id="boot" placeholder="Ej: 00 00 00" name="boot" class="form-control">
            </div>

            <div class="col-md-4">
            <label>HARDWARE ID:</label><br>
            <input type="text" id="hard" placeholder="Ej: ECA86B57248D" name="hard" class="form-control">
            </div>
            <div  class="col-md-4">
            <label>PROVISIONAL NUMBER:</label><br>
            <input type="text" id="number" placeholder="Ej: S99" name="number" class="form-control">
            </div>


            </div>

            <div class="row show-grid">
            <div class="col-md-12">
            <label>Diagnostico equipo:</label><br>
            <textarea rows="6" id="diagnostico" name="diag" placeholder="Ej: Bloqueada" class="form-control"></textarea>
            </div>
            </div>
            <div class="col-md-12">
            <h2>Informaci&oacute;n del Solicitante</h2>
            </div>
            <div class="row show-grid">
            <div class="col-md-4">
            <label>Nombre Completo:</label><br>
            <input type="text" id="nombre" placeholder="" name="nombre" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Tel o Cel:</label><br>
            <input type="text" id="cel" placeholder="" name="cel" class="form-control">
            </div>
            <div class="col-md-4">
            <label>Correo Electronico:</label><br>
            <input type="email" id="correo" placeholder="" name="correo" class="form-control">
            </div>
            </div>
            <div class="row show-grid">
            <div class="col-md-12">
            <input type="button" id="aceptar" name="aceptar" value="Aceptar" class="btn btn-primary" >
            <input type="button" id="cancelar" name="cancelar" value="Cancelar" class="btn btn-primary" >
            </div>
            </div>
            </form>


            </div>
            </div>
            </div>
            </div>
            </div>

            </div>
            </div>


            <div class="footer">
            <div class="pull-right">
            <strong></strong>
            </div>
            <div>
            <strong>Copyright</strong> Aulas de Tecnologia &copy; 2016-2017
            </div>
            </div>


        </div>
        </div>



   <?php include '../js.php';?>
    <script type="text/javascript">

        $("#aceptar").click(function(){
            if(validarDatos() == true){
            insertarDatos(
                $("#serie").val(),
                $("#clave").val(),
                $("#escu").val(),
                $("#loc").val(),
                $("#mun").val(),
                $("#nino").val(),
                $("#curp").val(),
                $("#boot").val(),
                $("#hard").val(),
                $("#number").val(),
                $("#diagnostico").val(),
                $("#nombre").val(),
                $("#cel").val(),
                $("#correo").val(),
                $("#equipo").val());
            }
           });

           $("#cancelar").click(function(){

                window.location.href='../index.php';
           });




        function insertarDatos(serie,clave,escuela,loc,mun,nombre_nino,curp,boot,hardware,provisional,diagnostico,namecomplet,telcel,correo,tipoeq){

            var arreglo = { noserie:serie,
                            clavecct:clave,
                            escuela:escuela,
                            Localidad:loc,
                            municipio:mun,
                            nombre_nino:nombre_nino,
                            curp:curp,
                            boot:boot,
                            hardware:hardware,
                            provisional:provisional,
                            diagnostico:diagnostico,
                            namecomplet:namecomplet,
                            telcel:telcel,
                            correo:correo,
                            tipoeq:tipoeq};

            var resultado = 0;
            $.ajax({
                type:'POST',
                url: '../Controller/InsertarlaptabController.php',
                async:false,
                data:arreglo,
                beforeSend:function() {
                     console.log("entro pero fue demasiado rapido");
                $(" <div class='spiner-example'><div class='sk-spinner sk-spinner-three-bounce'><div class='sk-bounce1'></div><div class='sk-bounce2'></div><div class='sk-bounce3'></div></div></div>").appendTo("body");
                },
                success:function(xresultado){

                   var resultado  = JSON.parse(xresultado);
                   console.log(resultado);
                   if(resultado.Registrado == 1){


                   swal({
                   title: "BUEN TRABAJO!",
                   text: "DATOS GUARDADOS CON EXITO, NOSOTROS NOS PONDREMOS EN CONTACTO EN CUANTO EL CODIGO O ARCHIVO SEA GENERADO.",
                   type: "success",
                   showCancelButton: false,
                   confirmButtonColor: "#ff0000",
                   confirmButtonText: "Aceptar",
                   closeOnConfirm: true
                   },
                   function(){
                   window.location.href='../index.php';
                   });



                   }else{

                    sweetAlert("Cuidado", "DATOS NO GUARDADO OCURRIO UN ERROR ACTUALICE LA PAGINA Y VUELVA A RELLENAR LOS CAMPOS.", "Danger");

                   }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    sweetAlert("Cuidado", "Error al insertar datos intente mas tarde.", "error");
            }

            })
           }

    </script>



</body>

</html>
