<!--=====================================
FACTURACION
======================================-->

    <?php 
		if($_SESSION){
			echo'

<div id="modalAgregarFact" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">


        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

	        <div class="modal-header" style="background:#3c8dbc; color:white">

	          <button type="button" class="close" data-dismiss="modal">&times;</button>

	          <h4 class="modal-title">Agregar Factura</h4>

	        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
		<form method="post" enctype="multipart/form-data">
	        <div class="modal-body">
	        
	          <div class="box-body">
	            
				            <div class="form-group">
				              
				            <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

				                <input type="text" class="form-control input-lg" name="nombrefiscalUsuario" placeholder="Ingresar Nombre fiscal" value="'.$_SESSION["nombrefiscal"].'" required>

				            </div>

				            </div>

				            <div class="form-group">
				              
				            <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

				                <input type="email" class="form-control input-lg" name="correofactUsuario" placeholder="Ingresar Email Facturacion"  value="'.$_SESSION["correofact"].'"  required>

				            </div>

				            </div>

				            <div class="form-group">
				              
				              <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

				                <input type="text" class="form-control input-lg" name="rfcUsuario" placeholder="Ingresar RFC" value="'.$_SESSION["rfc"].'" required>

				              </div>

				            </div>

				            <div class="form-group">
				              
				              <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

				                <input type="text" class="form-control input-lg" name="cpUsuario" placeholder="Ingresar cp" value="'.$_SESSION["cp"].'" required>

				              </div>

				            </div>

				            <div class="form-group">
				              
				              <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

				                <input type="text" class="form-control input-lg" name="regimenfiscalUsuario" placeholder="Ingresar regimenfiscal" value="'.$_SESSION["regimenfiscal"].'" required>

				              </div>

				            </div>

	          </div>

	        </div>

	        <div class="modal-footer">

	          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

	          <button type="submit" class="btn btn-primary">Guardar Factura</button>

	        </div>

	    </form>

    </div>

  </div>

</div>
			';

				}
			?>

<!--=====================================
MODAL Editar  FACTURA MODO DIRECTO
======================================-->
    <?php 
		if($_SESSION){
			echo'

<div id="modalEditarFact" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Factura Directo</h4>

        </div>

		 <form method="post" enctype="multipart/form-data">
	        <div class="modal-body">
	          <div class="box-body">

	            

				            <div class="form-group">
				              
				              <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

				                <input type="text" class="form-control input-lg"  id="editarnombrefiscal" name="editarnombrefiscal" placeholder="Cambiar Nombre fiscal" value="'.$_SESSION["nombrefiscal"].'" >

				              </div>

				            </div>

				            <div class="form-group">
				              
				             <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

				                <input type="email" class="form-control input-lg" id="editaremailfacturacion" name="editaremailfacturacion" placeholder="Cambiar Email" id="nuevoEmail" value="'.$_SESSION["correofact"].'" >

				              </div>

				             </div>

				            <div class="form-group">
				              
				              <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

				                <input type="text" class="form-control input-lg" id="editarrfc" name="editarrfc" placeholder="Cambiar RFC" value="'.$_SESSION["rfc"].'" >

				              </div>

				            </div>

				            <div class="form-group">
				              
				              <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

				                <input type="text" class="form-control input-lg" id="editarcp" name="editarcp" placeholder="Cambiar cp" value="'.$_SESSION["cp"].'" >

				              </div>

				            </div>

				            <div class="form-group">
				              
				              <div class="input-group">
				              
				                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

				                <input type="text" class="form-control input-lg" id="editarregimenfiscal" name="editarregimenfiscal" placeholder="Cambiar regimenfiscal" value="'.$_SESSION["regimenfiscal"].'" >

				              </div>

				            </div>

					        <div class="modal-footer">

					          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
					          <button type="submit" class="btn btn-default backColor" value="ENVIAR">Guardar Cambios Factura</button>';

							}

							?>
							  
					        </div>
	             </div>
	         </div>

			<?php
				$actualizarPerfil = new ControladorUsuarios();
				$actualizarPerfil->ctrActualizarPerfil();
			?>	
		</form>

     </div>

	  </div>

	</div>

 <!-- </div>

</div>-->

	<!--=====================================
	Tabla de facturacion
	======================================-->
		<?php 
		if($_SESSION){

	    echo' <div class="container">

				  <div class="title-box">
				    <h1>Datos de Facturacion</h1>
				    <p class="lead"></p>
				  </div>

					<button class="btn btn-primary p-5" data-toggle="modal" data-target="#modalAgregarFact">Agregar Factura</button>

						<table class="table table-bordered grocery-crud-table table-hover">

					    <thead>
					      <tr>
					        <th>Nombre Fiscal</th>
					        <th>Email Facturacion</th>
					        <th>RFC</th>
					        <th>CP</th>
					        <th>REGIMEN FISCAL</th>
					        <th>Acciones</th>
					      </tr>
					    </thead>

						    <tbody>

						<tr>
						     <td>'.$_SESSION['nombrefiscal'].' </td>
						     <td>'.$_SESSION["correofact"].'</td>
						     <td>'.$_SESSION["cp"].'</td>
						     <td>'.$_SESSION["rfc"].'</td>
						     <td>'.$_SESSION["regimenfiscal"].'</td>

							<td>
							    <div class="btn-group">
							                              
							        <button class="btn btn-warning btnEditarPerfil" idPerfil="" data-toggle="modal" data-target="#modalEditarFact"><i class="fa fa-pencil"></i></button>

							        <button class="btn btn-danger btnEliminarPerfil" idPerfil="" ><i class="fa fa-times"></i></button>
							    </div>  

							</td>
						</tr>


						     </tbody>
						</table>
				</div>
			';
		}
	?>



