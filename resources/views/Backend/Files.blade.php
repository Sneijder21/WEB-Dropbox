@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s6 left">
            <h1>Subir Archivos</h1>
        </div>
        <div class="col s6 right">
            <form action="#">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="" id="">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
