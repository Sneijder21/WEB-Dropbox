@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s4 m9 right-align" style="margin-top: 5%;">
            <a href="{{ route('admin.files.create') }}" class="waves-effect waves-light green accent-4 btn"><i class="material-icons left">add</i>New File</a>
        </div>
        <div class="col s8 m3 right-align" style="margin-top: 5%;">
            <a href="#modal1" class="waves-effect waves-light green accent-4 btn tooltipped modal-trigger" data-position="top" data-tooltip="New Category"><i class="material-icons left">add</i>New Category</a>   
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 xl12 left">
            <h3>
                Esta es la lista de todos los Archivos
            </h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="col s12">
        <table class="center reposive-table highlight">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Usuario</th>
                    <th>Detalle</th>
                    <th>Ocultar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($PostFiles as $postfile)
                    <tr>
                        <td>{{ $postfile->name }}</td>
                        <td>{{ $postfile->belongs->name }}</td>
                        <td>{{ $postfile->belongsUser->name }}</td>
                        
        {{--                 <td>
                            <a href="{{ route('admin.files.show',$postfile->name) }}" class="waves-effect waves-light green accent-4 btn" target="_blank"><i class="material-icons left">visibility</i>Ver</a>
                        </td> --}}


                        <td>
                            <a href="{{ route('admin.files.id',$postfile->slug) }}" class="waves-effect waves-light green accent-4 btn" target="_blank"><i class="material-icons left">visibility</i>Detalle</a>
                        </td>


                        <td>
                            <a  href="{{ route('admin.files.hidde',$postfile->id) }}" class="waves-effect waves-light teal lighten-2 btn"><i class="material-icons left" >visibility_off</i>Ocultar</a>
                        </td>

                        <td>
                            <a  href="{{ route('admin.files.delete',$postfile->name) }}" class="waves-effect waves-light red darken-1 btn"><i class="material-icons left">delete</i>Borrar</a>
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

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <form action="{{ route('admin.category.store') }}" method="post">
        <div class="modal-content">
            <h4 style="margin-bottom: 5%;">Registro de Categoria</h4>
                @csrf
            <div class="input-field col s6">
                <i class="material-icons prefix">category</i>
                <input id="icon_prefix" type="text" class="validate" name="name_category" required>
                <label for="icon_prefix">Nombre del catalogo</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="modal-close waves-effect waves-green btn-flat">Guardar</button>
        </div>
    </form>
</div>
          

@stop
