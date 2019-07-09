@extends('Backend.app')

@section('content')

<div class="container">
    <div class="col s12 left" style="margin-top: 5%; margin-bottom: 5%;">
        <h5>
            <i class="material-icons">
                assignment_ind
            </i>
            Editar usuario
        </h5>
    </div>
    <div class="row">
        <form action="{{ route('admin.users.update',$usuario->id) }}" class="col s12" enctype="multipart/form-data" id="upload" method="post">
            @method('PATCH')
            @csrf
            
            <div class="row">
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">
                        account_circle
                    </i>
                    <input class="validate" id="name" name="name" required="" type="text" value={{ $usuario->name }}>
                        <label for="name">
                            Nombre Completo
                        </label>
                    </input>
                </div>
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">
                        email
                    </i>
                    <input class="validate" id="email" name="email" required="" type="email" value="{{ $usuario->email }}">
                        <label for="email">
                            Correo electronico
                        </label>
                    </input>
                </div>
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">
                        lock
                    </i>
                    <input class="validate" id="password" name="password" required="" type="password" value="{{ $usuario->password }}">
                        <label for="password">
                            Contraseña
                        </label>
                    </input>
                </div>
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">
                        work
                    </i>
                    <input class="validate" id="rol" required="" type="text">
                        <label for="rol">
                            Rol
                        </label>
                    </input>
                </div>
                <div class="row">
                    <div class="col s12 m12 l6">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>
                                    Foto de Perfil
                                </span>
                                <input name="image_profile" required="" type="file" >
                                </input>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" value="{{ $usuario->image_profile }}">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l6">
                        <button class="btn waves-effect waves-light green accent-4 col s6 offset-s4" name="action" style="margin-top: 4%; margin-bottom: 0%;" type="submit">
                            Guardar Usuario
                            <i class="material-icons right">
                                save
                            </i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@stop