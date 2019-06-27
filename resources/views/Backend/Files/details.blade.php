@extends('backend.app')
@section('content')

<div class="container">
    <div class="col s12">
    	<p>{{ $PostFiles->name }}</p>
    	<p>{{ $PostFiles->belongs->name }}</p>
    	<p>{{ $PostFiles->belongsUser->name }}</p>
    	<a href="{{ route('admin.files.show',$PostFiles->name) }}" class="waves-effect waves-light green accent-4 btn" target="_blank"><i class="material-icons left">visibility</i>Ver</a>
    </div>
</div>

@endsection

{{-- minute 5:28 --}}

