@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-4  col-12 left">
            <h1>
                Subir Archivos
            </h1>
        </div>
        <div class="col col-sm-12 col-md-8 col-12 right">
            <form action="{{ route('admin.files.store') }}" enctype="multipart/form-data" id="upload" method="post">
                @csrf
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
                <button class="btn waves-effect waves-light" name="action" type="submit">
                    Guardar
                    <i class="material-icons right">
                        save
                    </i>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
