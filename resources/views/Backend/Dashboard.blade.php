@extends('backend.app')
@section('content')
	    <!-- Inicio de las Cards -->
    <div class="col s12">
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/office.jpg') }} " class="circle responsive-img">
                        <span class="card-title">Office</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light grey darken-3"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4 center-align">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/profile.jpg') }}">
                    </div>
                    
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/office.jpg') }} ">
                        <span class="card-title">Office</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light grey darken-3"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Fin de las cards -->

@stop
