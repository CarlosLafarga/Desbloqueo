<?php
	include($_SERVER['DOCUMENT_ROOT']."/Desbloqueo/conexion.php");
	function verArchivo($curpserie,$option){

		$cn = Conectarse();
		if($option =='curp'){

			$sql = "SELECT * FROM ct_equipos_rep WHERE curp = '".$curpserie."'";
				
		}elseif ($option =='serie') {

			$sql = "SELECT * FROM ct_equipos_rep WHERE no_serie = '".$curpserie."'";
		}
        

        $ejecutar = mysql_query($sql,$cn) or die(mysql_error());
        $if = mysql_fetch_array($ejecutar);

        if($if['codigo_des'] == "" || $if['archivo_des'] == ""){

          echo '<h3>Su código o archivo aún no ha sido generado ingrese sus datos en un lapso de 3 días hábiles  a patir de cuanto se hizo la alta de sus datos, para intentar esta opción.</h3>
           <br><br>
           <input class="btn btn-w-m btn-primary" type="button" name="cerrar" id="cerrar" value="Cerrar">';

        }else{

  ?>
		            <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Clave Centro</th>
                        <th>Nombre Escuela</th>
                        <th>Numero de Serie del Equipo</th>
                        <th>Nombre Niño</th>
                        <th>Curp</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                        <th>Archivo o Codigo</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP
                     $i=0;
                     while($row_esc=mysql_fetch_array($ejecutar))
                     {
                     $i++; 
                     ?>     
                     <tr>
                     <td><?PHP echo $i;?></td>
                     <td><?PHP echo $row_esc["clavecct"];?></td>
                     <td><?PHP echo $row_esc["nombre_escuela"];?></td>
                     <td><?PHP echo $row_esc["no_serie"];?></td> 
                     <td><?PHP echo $row_esc["nombre_nino"];?></td>
                     <td><?PHP echo $row_esc["curp"];?></td>
                     <td><?PHP echo $row_esc["nombre_mun"];?></td>
                     <td><?PHP echo $row_esc["nombre_loc"];?></td>

                     <td>
                     <?PHP
                     if(!empty($row_esc['codigo_des'])){

                     	  echo '<p><b>'.$row_esc['codigo_des'].'</b></p>';

                     } elseif (!empty($row_esc['archivo_des'])) {
                     	
                     echo '<a href="'.$row_esc['archivo_des'].'" download >
                           <img src="/Desbloqueo/img/if_zip_2446.png" ></img></a>';
                     }
                     ?>
                     </td>
                     </tr>
                     <?php
                     }
                     ?>
                    </tbody>
                    
                    </table>
                    <input class="btn btn-w-m btn-primary" type="button" name="cerrar" id="cerrar" value="Cerrar">
                    </div>
<?PHP
        }

	}

?>