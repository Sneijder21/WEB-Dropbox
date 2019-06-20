@extends('backend.app')
@section('content')
	<div class="container">
        <div class="row">

            <div class="col s6 left" style="margin-top: 5%; margin-bottom: 5%;">
                <h5><i class="material-icons">assignment_ind</i>Usuarios</h5>
            </div>

            <div class="col s6 right-align" style="margin-top: 5%; margin-bottom: 5%;">
                <a href="" class="waves-effect waves-light green accent-4 btn"><i class="material-icons left">add</i>AGREGAR NUEVO USUARIO</a>
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
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>
                            <a class="waves-effect waves-light blue lighten-2 btn"><i class="material-icons left">edit</i>Editar</a>
                        </td>
                        <td>
                            <a class="waves-effect waves-light red darken-1 btn"><i class="material-icons left">delete</i>Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>
                            <a class="waves-effect waves-light blue lighten-2 btn"><i class="material-icons left">edit</i>Editar</a>
                        </td>
                        <td>
                            <a class="waves-effect waves-light red darken-1 btn"><i class="material-icons left">delete</i>Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>
                            <a class="waves-effect waves-light blue lighten-2 btn"><i class="material-icons left">edit</i>Editar</a>
                        </td>
                        <td>
                            <a class="waves-effect waves-light red darken-1 btn"><i class="material-icons left">delete</i>Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>
                            <a class="waves-effect waves-light blue lighten-2 btn"><i class="material-icons left">edit</i>Editar</a>
                        </td>
                        <td>
                            <a class="waves-effect waves-light red darken-1 btn"><i class="material-icons left">delete</i>Eliminar</a>
                        </td>
                    </tr>
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