@extends('backend.app')

@section('content')
<div class="container">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <h5>
                Foto de Perfil
            </h5>
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img alt="" class="circle responsive-img materialboxed" src="{{ asset('profile/images')}}/{{ $user->image_profile}}" data-caption="A picture of a way with a group of trees in a park" width="250">
                        <!-- notice the "circle" class -->
                    </img>
                </div>
                <div class="col s10">
                    <span class="black-text">
                        <h6>
                            Usuario: {{ $user->name }}
                        </h6>
                        <h6>
                            Correo: {{ $user->email }}
                        </h6>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- minute 5:28 --}}
