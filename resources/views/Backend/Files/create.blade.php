@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <h4 style="text-align: center">Respalde sus fotos con la nueva version de Dropbox</h4>
        <div class="space"></div>
        <div class="col s12 m12 l12 xl12 right">
            <form action="{{ route('admin.files.store') }}" enctype="multipart/form-data" id="upload" method="post">
                @csrf
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix fas fa-file-signature"></i>
                    <input id="icon_prefix" type="text" class="validate" name="name" required>
                    <label for="icon_prefix">Nombre</label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <select name="category">
                        <option value="" disabled selected>Seleccione alguna categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
               
                    </select>
                    <label>Categorias</label>
                </div>

                <div class="space"></div>
                
                <div class="file-field input-field">
                    <div class="btn">
                        <span>
                            Seleccionar
                        </span>
                        <input name="file" type="file">
                        </input>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        </input>
                    </div>
                </div>
                <div class="space"></div>
                <button class="btn waves-effect waves-light col s3 offset-s4" name="action" type="submit">
                    Guardar
                    <i class="material-icons right">
                        save
                    </i>
                </button>
            </form>
        </div>
    </div>
</div>
@stop
