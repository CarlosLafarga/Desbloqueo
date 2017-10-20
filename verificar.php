<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desbloqueo Laptop y Tablet MX</title>
    <?php include('css.php'); ?>
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
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Selecciona un tipo de parametro</h5>
            <div class="ibox-tools">
            
            </div>
            </div>
            <div class="ibox-content">
                <form method="POST" name="verificar" action="resultado.php" onsubmit="return validacion()" >
                    <label>Como Buscar</label>
                    <select type="select" id="option" name="option" class="form-control" onChange="tipocod(this);" >
                         <option value="curp">CURP</option>
                         <option value="serie">No. Serie Equipo</option>
                    </select>
                    <br>

                    <div  id="curp" style="display: ;" >
                    <label>CURP</label>
                    <input type="text"  id="curptext" name="curp"  class="form-control" >
                    </div>
                    
                    <div  id="serie" style="display: none;" >
                    <label>No. Serie Equipo</label>
                    <input type="text" id="serietext" name="serie"  class="form-control" >
                    </div>

                    <br>
                    <input  type="submit" name="aceptar"  value="Consular" class="btn btn-w-m btn-primary">
                    <input  type="button" name="cancelar" id="cerrar" value="Cancelar" class="btn btn-w-m btn-primary">
                </form>
            
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
 <script type="text/javascript">

        function tipocod(sel) {
         if  (sel.value=="curp"){
              AM = document.getElementById("curp");
              AM.style.display = "";

              HDT = document.getElementById("serie");
              HDT.style.display = "none";

         }else if(sel.value=="serie") {

              AM = document.getElementById("curp");
              AM.style.display = "none";

              HDT = document.getElementById("serie");
              HDT.style.display = "";
          }
         }

         $("#cerrar").click(function(){
            
                window.location.href='index.php';
           });

        function validacion(){

        var curp = document.getElementById("curptext").value;
        var serie = document.getElementById("serietext").value;
        var opcion = document.getElementById("option").value;

        
            if (opcion == "curp") {
            if(curp == null || curp.length < 18  ){
            sweetAlert("Cuidado", "No hay datos en el campo CURP.", "error");
            return false;
            }

            }else{

            if(serie == null || serie.length < 15 ){
            sweetAlert("Cuidado", "No hay datos en el campo No. Serie.", "error");
            return false;

            }
        

        }
    }

       
    </script>

</html>


