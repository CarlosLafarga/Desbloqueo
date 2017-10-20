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
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h5>Datos Equipo</h5>
            <div class="ibox-tools">
            </div>
            </div>
            <div class="ibox-content">
              
               <?PHP
                
               include("Controller/verArchivoController.php");

               if(empty($_POS['option'])){

                   $option = $_POST['option'];
                   $serie = $_POST['serie'];
                   $curp = $_POST['curp'];
          
                    
                   if($option == "curp"){
                        
                              
                       $b = verArchivo($curp,$option);


                   }elseif ($option == "serie") {
                       
                                  
                       $b = verArchivo($serie,$option);
                   }

                   }else{

                   header("../verificar.php");
               }
               ?>           
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
     <?php include('js.php'); ?>
     <script type="text/javascript">
        
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf',   title: 'ExampleFile'},

                {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
            }
            ]

        });

            
       
         });

        $("#cerrar").click(function(){
            
                window.location.href='index.php';
           });
        
      </script>
    

</body>
 

</html>


