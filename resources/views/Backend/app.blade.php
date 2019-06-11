 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<title>Panel Administrativo</title>
 	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	<!-- HoJas de estilo de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Libreria de font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bgstyle.css') }}">
    <style type="text/css">
        .img-profile{
           width: 100%;
           height: 80vh;
        }
    </style>
 </head>
 <body>
    <!-- Navegacion lateral -->
    <div class="grey darken-3" style="height: 35px;">
         <!-- navbar content here  -->
         <!-- <nav></nav> -->
         <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('assets/images/office.jpg')}}" class="img-profile">
                    </div>
                    <a href="#user"><img class="circle" src="{{ asset('assets/images/perfil.png') }}"></a>
                    <a href="#name"><span class="white-text name"> {{ auth()->user()->name }} </span></a>
                    <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
                    <a href="#"><i class="fas fa-power-off" aria-hidden="true" style="margin-right: 15px; color: red;"></i>Cerrar Sesión</a>
                </div>
            </li>
            <li {{ request()->is('panel')? 'class=active':'' }}>
                <a  href="{{ route('admin') }}" class="waves-effect"><i class="fas fa-tasks"></i>Tableros</a>
            </li>
            <li {{ request()->is('users')?'class=active':'' }}>
                <a  href="{{ route('admin.user') }}" class="waves-effect"><i class="fas fa-user-secret"></i>Usuarios</a>
            </li>
            <li {{ request()->is('upload_files')? 'class=active':'' }}>
                <a  href="{{ route('admin.files.index') }}" class="waves-effect"><i class="fas fa-cloud-upload-alt"></i>Archivos</a>
            </li>

        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons menu">menu</i></a>
    </div>
    <!-- Fin de la navegacion lateral -->

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



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
 </body>
 </html>