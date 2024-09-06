function validaTexto(id,error,largo){
	var er ="";
	document.getElementById(id).style.background = "#FFFFFF";
	if(document.getElementById(id).value ==""){
		document.getElementById(id).style.background = "#F8C2BA";
		er=error;
	}
	return er;
}

//BOTON AGREGAR USUARIO
function validacionUsuario(){
  Swal.fire({
      title: 'Agregar Usuario',
			width: 1300,
      html:

											'<img id="img" src="" height="100px" style="border-radius: 50%;border: 2px solid black;">' +
											'<div style="text-align:right;color:red; font-size:100%;">'+
												// '<label for="nombre" class="form-label">Enviar Correo</label>'+
												'<i class="bi bi-envelope-at" style="font-size:50px;"></i>'+'<br>'+
												'<input type="checkbox" name="" id="mail" value="1">'+
											'</div>'+

											'<br>' +
											'<div class="adjuntarImagen">' +
											'<input type="file"           id="fotoUsuario" >' +
											'</div>' +

                         '<div class="container">'+
                          '<div class="container text-center">'+
                              '<form action="#" id="formularioAgregarusuario"  method="POST" autocomplete="nope">'+
                              '<div class="row align-items-center">'+

                                  '<div class="col">'+
                                      '<label for="nombre" class="form-label">Nombre</label>'+
                                      '<input type="text" id="nombre" name="nombreUsuario" class="swal2-input" autocomplete="nope">'+
                                  '</div>'+

                                  '<div class="col">'+
                                      '<label for="txt_apePaterno" class="form-label">Apellido. Paterno</label>'+
                                      '<input type="text" class="swal2-input" name="apellidoPater" id= "apellidoPaterno"autocomplete="nope" >'+
                                  '</div>'+

                                  '<div class="col">'+
                                      '<label for="apellidoMaterno" class="form-label">Apellido. Materno</label>'+
                                      '<input type="text" id="apellidoMaterno" name="apellidoMater" class="swal2-input">'+
                                  '</div>'+

                              '</div><br>'+
                                '<div class="row align-items-center">'+

                                  '<div class="col">'+
                                      '<label for="run" class="form-label">   RUN   </label>'+'<br>'+
                                      '<input type="text" id="run" name="run" class="swal2-input">'+
                                  '</div>'+

                                  '<div class="col">'+
                                      '<label for="txt_fono_1" class="form-label">Fono 1</label>'+'<br>'+
                                      '<input type="text" id="txt_fono_1" name="fono1" class="swal2-input" >'+
                                  '</div>'+
                                  '<div class="col">'+
                                      '<label for="txt_fono_2" class="form-label">Fono 2</label>'+'<br>'+
                                      '<input type="text" id="txt_fono_2" name="fono2"class="swal2-input">'+
                                  '</div>'+
                              '</div>'+
                              '<div class="row align-items-center">'+
                                  '<div class="col">'+
                                      '<label for="txt_correo" class="form-label">Correo</label>'+'<br>'+
                                      '<input type="text" id="txt_correo" name="correo" class="swal2-input" >'+
                                  '</div>'+

                                  '<div class="col">'+
                                  '<label for="pass" class="form-label">Clave</label>'+'<br>'+
                                  '<input type="password" id="pass" name="pass" class="swal2-input" autocomplete="nope">'+
                              '</div>'+

                                  '<div class="col">'+
                                      '<label for="txt_passConfirmacion" class="form-label">Pass Confiramcion</label>'+'<br>'+
                                      '<input type="password" id="passConfir" name="passCon"class="swal2-input" autocomplete="nope">'+
                                  '</div>'+
                              '</div>'+
                          '</div>',
													background: '#E2E7D8', // color de fondo
								         	showCancelButton: true,
								         	confirmButtonText: 'Enviar',
								         	cancelButtonText: 'Cancelar',
								         	showLoaderOnConfirm: true,
													preConfirm: () => {
														const mail         		= Swal.getPopup().querySelector('#mail').value
														const nombre         		= Swal.getPopup().querySelector('#nombre').value
														const imagen         		= Swal.getPopup().querySelector('#fotoUsuario').value
														const apellidoPaterno   = Swal.getPopup().querySelector('#apellidoPaterno').value
														const apellidoMaterno   = Swal.getPopup().querySelector('#apellidoMaterno').value
														const run         			= Swal.getPopup().querySelector('#run').value
														const txt_fono_1        = Swal.getPopup().querySelector('#txt_fono_1').value
														const txt_fono_2        = Swal.getPopup().querySelector('#txt_fono_2').value
														const txt_correo        = Swal.getPopup().querySelector('#txt_correo').value
														const pass         			= Swal.getPopup().querySelector('#pass').value
														const passConfir      	= Swal.getPopup().querySelector('#passConfir').value
														error="";
														// error+= validaTexto('nombre','-Falta nombre   <br>');
														// error+= validaTexto('apellidoPaterno','* Falta Apellido Paterno  <br>')
														// error+= validaTexto('apellidoMaterno','* Falta Apellido Materno  <br>')
														// error+= validaTexto('run','* Falta Run  <br>')
														// error+= validaTexto('txt_fono_1','* Falta Fono  <br>')
														// error+= validaTexto('txt_fono_2','* Falta Fono  <br>')
														// error+= validaTexto('txt_correo','* Falta Correo  <br>')
														// error+= validaTexto('mail','* Falta Ingresar Clave de Confirmacion  <br>')
														// error+= validaTexto('pass','* Falta Ingresar una clave <br>')
														// error+= validaTexto('passConfir','* Falta Ingresar Clave de Confirmacion  <br>')

														error+= validaTexto('nombre','nombre, ');
														error+= validaTexto('apellidoPaterno','Apellido Paterno, ')
														error+= validaTexto('apellidoMaterno','Apellido Materno,  ')
														error+= validaTexto('run',' Run,')
														error+= validaTexto('txt_fono_1','Falta Fono,')
														error+= validaTexto('txt_fono_2','Falta Fono', )
														error+= validaTexto('txt_correo','Falta Correo, ')
														error+= validaTexto('mail','Falta Ingresar Clave de Confirmacion,')
														error+= validaTexto('pass','Falta Ingresar una clave')
														error+= validaTexto('passConfir','Falta Ingresar Clave de Confirmacion')

														if(error != ""){
																Swal.showValidationMessage('<p><strong>'+ error +'</strong></p>')
														}

														$.ajax({
																type: 'POST',  // Envío con método POST
																url: '../guardar/guardarUsuario.php',  // Fichero destino (el PHP que trata los datos)
																data: { nombre             			 :nombre,
																				apellidoPaterno          :apellidoPaterno,
																				imagen   					       :imagen,
																				apellidoMaterno          :apellidoMaterno,
																				run                			 : run,
																				txt_fono_1               : txt_fono_1,
																				txt_fono_2               : txt_fono_2,
																				mail			               : mail,
																				txt_correo               : txt_correo,
																				pass                		 : pass,

																 } // Datos que se envían
														})

											}, //FIN DE preConfirm
											allowOutsideClick: () => !Swal.isLoading()
								}).then((result) => {
									if (result.isConfirmed) {
									Swal.fire(
											'Usuario Creado!',
											'----------',
											'success'
									)
									}
							 })

							 let img = document.getElementById("img");
								let input = document.getElementById("fotoUsuario");

								input.onchange = (e) => {
										if (input.files[0])
												img.src = URL.createObjectURL(input.files[0]);
								}






















					 }
			//
      //                       if(error !=""){
      //                           Swal.fire({
      //                             position: 'top-center',
      //                             icon: 'error',
      //                             title: 'Atencion...',
      //                             html:  "<h4><strong><div class='alert alert-dark ' role='alert'>"+
      //                             "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'>"+
      //                             " <use xlink:href='#exclamation-triangle-fill'/></svg><div>"+error+"</div></div></strong></h4>",
      //                             width:              "30%",
      //                             padding:            "30px"
      //                           })
			//
      //                           return;
      //                       }else{
      //                             $.ajax({
      //                                 type: 'POST',  // Envío con método POST
      //                                 url: '../guardar/guardarUsuario.php',  // Fichero destino (el PHP que trata los datos)
      //                                 data: { nombre              :nombre,
      //                                         apePaterno          :apePaterno,
      //                                         apeMaterno          :apeMaterno,
      //                                         run                 : run,
      //                                         fono_1              : fono_1,
      //                                         fono_2              : fono_2,
      //                                         correo              : correo,
      //                                         pass                : pass,
      //                                         pas_confi           : pas_confi
      //                                  } // Datos que se envían
      //                             })
      //                           }
      //                         if (result.isConfirmed) {
      //                             Swal.fire('guardado!', '', 'success')
			//
      //                         } else if (result.isDenied) {
      //                             Swal.fire('NO GUARDAR', '', 'info')
      //                         }
      //     });
      // }
//************************************************************************************************* */
//*******************************GUARDAR PRODUCTO************************************************** */
function validacionProducto(){
    Swal.fire({
        title: 'AGREGAR PRODUCTO',
				width: 1300,
				html:
												'<img id="img" src="" height="150px" style="border-radius: 50%;border: 2px solid black;">' +
												'<br><br><br>' +
												'<div class="adjuntarImagen">' +
												'<input type="file"           id="fotoUsuario" >' +
												'</div>' +
												'<br><br>'+
													 '<div class="container">'+
														'<div class="container text-center">'+
																'<form action="#" id="formularioAgregarusuario"  method="POST">'+
																'<div class="row align-items-center">'+

																		'<div class="col">'+
																				'<label for="nombre" class="form-label">Nombre Producto</label>'+
																				'<input type="text" id="nombrePorducto" name="nombrePorducto" class="swal2-input">'+
																		'</div>'+

																		'<div class="col">'+
																				'<label for="txt_Codigo" class="form-label">Codigo Producto</label>'+
																				'<input type="text" class="swal2-input" name="txt_Codigo" id= "txt_Codigo" >'+
																		'</div>'+

																		'<div class="col">'+
																				'<label for="categoria"  class="form-label">Categoria de Producto</label>'+'<br>'+
																				'<select id="categoria" style="width:70%;" class="swal2-input">'+
																					'<option selected value="">-------------------</option>'+
																					'<option value="opcion1">Categoria 1</option>'+
																					'<option value="opcion1">Categoria 2</option>'+
																					'<option value="opcion1">Categoria 3</option>'+
																					'<option value="opcion1">Categoria 4</option>'+
																				'</select>'+
																		'</div>'+

																'</div><br>'+
																	'<div class="row align-items-center">'+

																		'<div class="col">'+
																				'<label for="valorProducto" class="form-label"> Valor Producto   </label>'+'<br>'+
																				'<input type="text" id="valorProducto" name="valorProducto" class="swal2-input">'+
																		'</div>'+

																		'<div class="col">'+
																				'<label for="stockPorducto" class="form-label">Strock Producto</label>'+'<br>'+
																				'<input type="text" id="stockPorducto" name="stockPorducto" class="swal2-input" >'+
																		'</div>'+
																		'<div class="col">'+
																				'<label for="xxx" class="form-label">xxx </label>'+'<br>'+
																				'<input type="text" id="xxx" name="xxx"class="swal2-input">'+
																		'</div>'+
																'</div>'+
																'<div class="row align-items-center">'+
																'<div class="col"><br>'+
																		'<label for="observacionProducto" class="form-label">OBSERVACION DE PRODUCTO </label>'+
																		'<textarea class="form-control" style="border-radius: 20px;border-color: black;" id="observacionProducto" rows="4"></textarea>'+
																'</div>'+




																'</div>'+
														'</div>',
																background: '#E2E7D8', // color de fondo
											         showCancelButton: true,
											         confirmButtonText: 'Enviar',
											         cancelButtonText: 'Cancelar',
											         showLoaderOnConfirm: true,

																preConfirm: () => {
																	const nombrePorducto         		= Swal.getPopup().querySelector('#nombrePorducto').value
																	const txt_Codigo   							= Swal.getPopup().querySelector('#txt_Codigo').value
																	const categoria         				= Swal.getPopup().querySelector('#categoria').value
																	const valorProducto        			= Swal.getPopup().querySelector('#valorProducto').value
																	const stockPorducto        			= Swal.getPopup().querySelector('#stockPorducto').value
																	const xxx        								= Swal.getPopup().querySelector('#xxx').value
																	const observacionProducto       = Swal.getPopup().querySelector('#observacionProducto').value


																	error="";
																	error+= validaTexto('nombrePorducto','Falta nombre   <br>');
																	error+= validaTexto('txt_Codigo','Falta Apellido Paterno  <br>')
																	error+= validaTexto('categoria','Falta Apellido Materno  <br>')
																	error+= validaTexto('valorProducto','Falta Run  <br>')
																	error+= validaTexto('stockPorducto','Falta Fono  <br>')
																	error+= validaTexto('xxx','Falta Correo  <br>')
																	error+= validaTexto('observacionProducto','Falta Ingresar una clave <br>')

																	if (!nombrePorducto) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa tu nombre del Producto.</strong></h3>')
															    }
																	if (!txt_Codigo) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa El Codigo Del Producto.</strong></h3>')
																	}
																	if (!categoria) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingrese una Categoria.</strong></h3>')
																	}
																	if (!valorProducto) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingrese un Valor del Producto.</strong></h3>')
																	}
																	if (!stockPorducto) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingrese un Stock valido.</strong></h3>')
																	}
																	if (!xxx) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa tu zxxxx.</strong></h3>')
																	}
																	if (!observacionProducto) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa uan observacion del Producto.</strong></h3>')
																	}

																	const datos = new FormData();
																		datos.append("nombrePorducto", nombrePorducto);
																		datos.append("txt_Codigo", txt_Codigo);
																		datos.append("categoria", categoria);
																		datos.append("valorProducto", valorProducto);
																		datos.append("stockPorducto", stockPorducto);
																		datos.append("xxx", xxx );
																		datos.append("observacionProducto", observacionProducto);

															var respuesta = fetch("../guardar/guardarProducto.php", {
																method: "POST",
																body: datos
															})
														}, //FIN DE preConfirm
														allowOutsideClick: () => !Swal.isLoading()
											}).then((result) => {
												if (result.isConfirmed) {
												Swal.fire(
														'Producto Agregado!',
														'----------',
														'success'
												)
												}
										 })
											 let img = document.getElementById("img");
											 let input = document.getElementById("fotoUsuario");

											input.onchange = (e) => {
													if (input.files[0])
															img.src = URL.createObjectURL(input.files[0]);
											}
								 }
