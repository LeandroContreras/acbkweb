<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro con múltiples pasos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" >
    <script src="{{asset('js/script.js')}}" defer></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgb(0,45,95);">
		<div class="container-fluid" >
			<img src="{{asset('imagenes/acb azul fia.png') }}" style="width: 200px;" alt="" class="navbar-brand">
			<a href="" class="auto py-4" style="color: rgb(255, 255, 255);
			text-decoration: none; ;">
			 <h4>AUTOMOVIL CLUB BOLIVIANO</h4></a>
		</div>
	  </nav>
	  <nav class="navbar navbar-expand-lg bg-light sticky-top2">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				  Dropdown link
				</a>
				<ul class="dropdown-menu">
				  <li><a class="dropdown-item" href="#">Action</a></li>
				  <li><a class="dropdown-item" href="#">Another action</a></li>
				  <li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
    <div class="container">
		<div class="imagenes">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
				<div class="carousel-indicators">
				  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="{{asset('imagenes/slalom.jpg') }}" class="d-block w-100" alt="...">
				  </div>
				  <div class="carousel-item">
					<img src="{{asset('imagenes/slalom3.jpg') }}" class="d-block w-100" alt="...">
				  </div>
				  <div class="carousel-item">
					<img src="{{asset('imagenes/slalom2.jpg') }}" class="d-block w-100" alt="...">
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Next</span>
				</button>
			  </div>
		</div>
	</div>
	<div class="bodyf">
	<div class="containerform justify-content-center" style="border: solid">
		<header>REGISTRO DE PARTICIPANTES</header>
        <!--Progress bar-->
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            
            <div
              class="progress-step progress-step-active"
              data-title="Participante"
            ></div>
            <div class="progress-step" data-title="Apoderado"></div>
            <div class="progress-step" data-title="Perfil"></div>
          </div>
		<div class="formularioPrincipal col-md-8 mt-3">
                <div class="card-header row justify-content-center">
                    <div class="col-md-10">    
                        <form method="POST" action="#" novalidate>
                            @csrf
                            <!--Pagina1-->
                            <div class="form-step form-step-active col-6" >
                                <div class="titulo">Datos del Participante</div>
                                <div class="input-group">
                                    <label for="nombre">Nombres</label>
                                    <input  type="text" 
                                            name="nombres"
                                            class="@error('nombres')
                                                is-invaled
                                            @enderror"
                                            id="nombres"  
                                            placeholder="Nombres"
                                            value={{old('nombres')}}
                                            >
                                            @error('nombres')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                </div>
                                <div class="input-group">
                                    <label for="paterno">Apellido Paterno</label>
                                    <input type="text"
                                           name="paterno"
                                           class="@error('paterno')
                                            is-invalid
                                           @enderror"
                                           id="paterno"
                                           placeholder="Apellido Paterno "
                                           value={{old('paterno')}} 
                                    >
                                    @error('paterno')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="materno">Apellido Materno</label>
                                    <input type="text"
                                           name="materno"
                                           class="@error('materno')
                                            is-invalid
                                           @enderror"
                                           id="materno"
                                           placeholder="Apellido Materno"
                                           value={{old('materno')}} 
                                    >
                                    @error('materno')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="date">Fecha de Nacimiento</label>
                                    <input type="date"
                                           name="telefono"
                                           class="@error('date')
                                            is-invalid
                                           @enderror"
                                           id="date"
                                           placeholder="Fecha"
                                           value={{old('date')}} 
                                    >
                                    @error('date')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="sexo">Sexo</label>
                                    <select name="sexo" 
                                            class="@error('tipo')
                                                is-invalid
                                            @enderror"
                                            id="sexo">
                                            <option value="">--Seleccione--</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                    </select>
                                    @error('sexo')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="departamento">Departamento</label>
                                    <select name="departamento" 
                                            class="@error('departamento')
                                                is-invalid
                                            @enderror"
                                            id="departamento" >
                                            <option value="">--Seleccione--</option>
                                            <option>La Paz</option>
                                            <option>Oruro</option>
                                            <option>Potosí</option>
                                            <option>Cochabamba</option>
                                            <option>Santa Cruz</option>
                                            <option>Tarija</option>
                                            <option>Chuquisaca</option>
                                            <option>Pando</option>
                                            <option>Beni</option>
                                    </select>
                                    @error('departamento')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group has-success">
                                    <label for="descripcion">Altura</label>
                                    <input type="text"
                                           name="descripcion"
                                           class="@error('descripcion')
                                            is-invalid
                                           @enderror"
                                           id="descripcion"
                                           placeholder="Valor en centimetros"
                                           value={{old('descripcion')}} 
                                    >
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="descripcion">Peso</label>
                                    <input type="text"
                                           name="descripcion"
                                           class="@error('descripcion')
                                            is-invalid
                                           @enderror"
                                           id="descripcion"
                                           placeholder="Valor en Kilogramos"
                                           value={{old('descripcion')}} 
                                    >
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="">
                                    <a href="#" class="btn btn-next width-50 ml-auto">Siguiente</a>
                                  </div>   
                            </div>
                            <!--Pagina 2-->
                            <div class="form-step col-6">
                                <div class="titulo">Datos del Tutor</div>
                                <div class="input-group">
                                    <label for="nombre">Nombres</label>
                                    <input  type="text" 
                                            name="nombres"
                                            class="@error('nombres')
                                                is-invaled
                                            @enderror"
                                            id="nombres"  
                                            placeholder="Nombres"
                                            value={{old('nombres')}}
                                            >
                                            @error('nombres')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                </div>
                                <div class="input-group">
                                    <label for="paterno">Apellido Paterno</label>
                                    <input type="text"
                                           name="paterno"
                                           class="@error('paterno')
                                            is-invalid
                                           @enderror"
                                           id="paterno"
                                           placeholder="Apellido Paterno "
                                           value={{old('paterno')}} 
                                    >
                                    @error('paterno')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="materno">Apellido Materno</label>
                                    <input type="text"
                                           name="materno"
                                           class="@error('materno')
                                            is-invalid
                                           @enderror"
                                           id="materno"
                                           placeholder="Apellido Materno"
                                           value={{old('materno')}} 
                                    >
                                    @error('materno')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="telefono">Telefono Celular</label>
                                    <input type="integer"
                                           name="telefono"
                                           class="@error('telefono')
                                            is-invalid
                                           @enderror"
                                           id="telefono"
                                           placeholder="Telefono"
                                           value={{old('telefono')}} 
                                    >
                                    @error('telefono')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="email">Email</label>
                                    <input name="email" 
                                           class="@error('email')
                                                is-invalid
                                            @enderror"
                                            id="email"
                                            placeholder="Correo Electronico"
                                            value={{old('email')}}
                                    >
                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text"
                                           name="direccion"
                                           class="@error('direccion')
                                            is-invalid
                                           @enderror"
                                           id="direccion"
                                           placeholder=""
                                           value={{old('direccion')}} 
                                    >
                                    @error('direccion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="btns-group">
                                    <a href="#" class="btn btn-prev">Atras</a>
                                    <a href="#" class="btn btn-next">Siguiente</a>
                                  </div> 
                            </div>
                            <!--Pagina3-->
                            <div class="form-step col-6">
                                <div class="titulo">Perfil del competidor</div>
                                    <div class="input-group">
                                        <label for="experiencia" class="preguntas">
                                            ¿Tienes experiencia en Karting Slalom? &nbsp</label>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="experiencia" id="experiencia" value="option1" >
                                            <label class="form-check-label">
                                              Si
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="experiencia" id="experiencia" value="option2">
                                            <label class="form-check-label">
                                              No
                                            </label>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label for="paterno" class="experiencia">
                                        ¿Tienes familiares que se relacionen con los motores? &nbsp</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="experiencia1" id="experiencia1" value="option1" >
                                            <label class="form-check-label">
                                              Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="experiencia1" id="experiencia1" value="option2">
                                            <label class="form-check-label">
                                              No
                                            </label>
                                        </div>
                                <div class="input-group">
                                    <label for="materno" class="experiencia">
                                        ¿Ves carrera de automoviles en TV o Web? &nbsp</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="experiencia2" id="experiencia2" value="option1" >
                                            <label class="form-check-label">
                                              Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="experiencia1" id="experiencia1" value="option2">
                                            <label class="form-check-label">
                                              No
                                            </label>
                                        </div>
                                </div>
                                <div class="input-group">
                                    <label for="telefono">Telefono Celular</label>
                                    <input type="integer"
                                           name="telefono"
                                           class="@error('telefono')
                                            is-invalid
                                           @enderror"
                                           id="telefono"
                                           placeholder="Telefono"
                                           value={{old('telefono')}} 
                                    >
                                    @error('Telefono')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="sexo">Sexo</label>
                                    <select name="sexo" 
                                            class="@error('tipo')
                                                is-invalid
                                            @enderror"
                                            id="sexo">
                                            <option value="">--Seleccione--</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                    </select>
                                    @error('sexo')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="departamento">Departamento</label>
                                    <select name="departamento" 
                                            class="@error('departamento')
                                                is-invalid
                                            @enderror"
                                            id="departamento" >
                                            <option value="">--Seleccione--</option>
                                            <option>La Paz</option>
                                            <option>Oruro</option>
                                            <option>Potosí</option>
                                            <option>Cochabamba</option>
                                            <option>Santa Cruz</option>
                                            <option>Tarija</option>
                                            <option>Chuquisaca</option>
                                            <option>Pando</option>
                                            <option>Beni</option>
                                    </select>
                                    @error('departamento')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group has-success">
                                    <label for="descripcion">Altura</label>
                                    <input type="text"
                                           name="descripcion"
                                           class="@error('descripcion')
                                            is-invalid
                                           @enderror"
                                           id="descripcion"
                                           placeholder="Introduzca Descripcion del Contacto"
                                           value={{old('descripcion')}} 
                                    >
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="descripcion">Peso</label>
                                    <input type="text"
                                           name="descripcion"
                                           class="@error('descripcion')
                                            is-invalid
                                           @enderror"
                                           id="descripcion"
                                           placeholder="Introduzca Descripcion del Contacto"
                                           value={{old('descripcion')}} 
                                    >
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="btns-group">
                                    <a href="#" class="btn btn-prev">Previous</a>
                                    <a href="#" class="btn btn-next">Next</a>
                                  </div> 
                            </div>
                            <!--Pagina 4-->
                            <div class="form-step col-6">
                                <div class="titulo">Datos del Tutor</div>
                                <div class="input-group">
                                    <label for="nombre">Nombres</label>
                                    <input  type="text" 
                                            name="nombres"
                                            class="@error('nombres')
                                                is-invaled
                                            @enderror"
                                            id="nombres"  
                                            placeholder="Nombres"
                                            value={{old('nombres')}}
                                            >
                                            @error('nombres')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                </div>
                                <div class="input-group">
                                    <label for="paterno">Apellido Paterno</label>
                                    <input type="text"
                                           name="paterno"
                                           class="@error('paterno')
                                            is-invalid
                                           @enderror"
                                           id="paterno"
                                           placeholder="Apellido Paterno "
                                           value={{old('paterno')}} 
                                    >
                                    @error('paterno')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="materno">Apellido Materno</label>
                                    <input type="text"
                                           name="materno"
                                           class="@error('materno')
                                            is-invalid
                                           @enderror"
                                           id="materno"
                                           placeholder="Apellido Materno"
                                           value={{old('materno')}} 
                                    >
                                    @error('materno')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="telefono">Telefono Celular</label>
                                    <input type="integer"
                                           name="telefono"
                                           class="@error('telefono')
                                            is-invalid
                                           @enderror"
                                           id="telefono"
                                           placeholder="Telefono"
                                           value={{old('telefono')}} 
                                    >
                                    @error('Telefono')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="sexo">Sexo</label>
                                    <select name="sexo" 
                                            class="@error('tipo')
                                                is-invalid
                                            @enderror"
                                            id="sexo">
                                            <option value="">--Seleccione--</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                    </select>
                                    @error('sexo')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="departamento">Departamento</label>
                                    <select name="departamento" 
                                            class="@error('departamento')
                                                is-invalid
                                            @enderror"
                                            id="departamento" >
                                            <option value="">--Seleccione--</option>
                                            <option>La Paz</option>
                                            <option>Oruro</option>
                                            <option>Potosí</option>
                                            <option>Cochabamba</option>
                                            <option>Santa Cruz</option>
                                            <option>Tarija</option>
                                            <option>Chuquisaca</option>
                                            <option>Pando</option>
                                            <option>Beni</option>
                                    </select>
                                    @error('departamento')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group has-success">
                                    <label for="descripcion">Altura</label>
                                    <input type="text"
                                           name="descripcion"
                                           class="@error('descripcion')
                                            is-invalid
                                           @enderror"
                                           id="descripcion"
                                           placeholder="Introduzca Descripcion del Contacto"
                                           value={{old('descripcion')}} 
                                    >
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="descripcion">Peso</label>
                                    <input type="text"
                                           name="descripcion"
                                           class="@error('descripcion')
                                            is-invalid
                                           @enderror"
                                           id="descripcion"
                                           placeholder="Introduzca Descripcion del Contacto"
                                           value={{old('descripcion')}} 
                                    >
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="btns-group">
                                    <a href="#" class="btn btn-prev">Previous</a>
                                    <a href="#" class="btn btn-next">Next</a>
                                  </div> 
                            </div>

                        </form>
                    </div>
                </div>
		</div>
	</div>
	</div>
    <script src="./js/index.js"></script>
</body>
</html>
