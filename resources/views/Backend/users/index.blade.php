@extends('backend.app')
@section('content')
	<div class="container">
        <div class="row">

            <div class="col s6 left" style="margin-top: 5%; margin-bottom: 5%;">
                <h5><i class="material-icons">assignment_ind</i>Usuarios</h5>
            </div>

            <div class="col s6 right-align" style="margin-top: 5%; margin-bottom: 5%;">
                <a href="{{ route('admin.users.create') }}" class="waves-effect waves-light green accent-4 btn"><i class="material-icons left">add</i>AGREGAR NUEVO USUARIO</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col s12">
            <table class="center reposive-table highlight">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Cargo</th>
                        <th>Foto de Perfil</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>Admins</td>
                          
                        <td>
                            <a href="#user"> <img class="circle" src="{{ asset('profile/images')}}/{{ $user->image_profile}}" style="width: 50px;height: auto;"> </a>
                        </td>
                        
                        <td>
                            <a href="{{ route('admin.users.show',$user->id) }}" class="waves-effect waves-light green accent-4 btn" target="_blank"><i class="material-icons left">visibility</i>Detalle</a>
                        </td>

                        <td>
                            <a href="{{ route('admin.users.edit',$user->id) }}" class="waves-effect waves-light blue lighten-2 btn"><i class="material-icons left">edit</i>Editar</a>
                        </td>

                        <td>
                            <form action="{{ route('admin.users.destroy',$user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="waves-effect waves-light red darken-1 btn" type="submit"><i class="material-icons left">delete</i>Eliminar</button>
                            </form>
                          
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="space"></div>

            <div class="center-align">
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </div>

@stop