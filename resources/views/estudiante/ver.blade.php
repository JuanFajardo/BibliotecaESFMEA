@extends('maestro')

@section('titulo')
Libro - {{$libro->titulo}}
@endsection

@section('titulo1')
{{$libro->titulo}}<br>
<small> {{$libro->autor}} </small>
@endsection

@section('cuerpo1')
<!-- Libros -->
@if($ver != "NO")
<div style="position:relative;width:100%;">
    <div style="width:100%; background:#000;height:45px;">
    </div>
    <iframe src="{{asset('/RughHXvNTFm9zzBett0zzPpFGaE2r7mjB9/'.$libro->archivo)}}" style="width:100%;height:670px;"></iframe>
</div>
@else
<label class="btn btn-danger"> Su numero de intentos de visualización llego al limite</label>
@endif
@endsection


@section('js')
@endsection
