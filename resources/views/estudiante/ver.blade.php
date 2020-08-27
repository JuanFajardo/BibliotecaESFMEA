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
<embed src="{{asset('/RughHXvNTFm9zzBett0zzPpFGaE2r7mjB9/'.$libro->archivo)}}" width="100%" height="575" toolbar="0">
@endif
@endsection


@section('js')
@endsection
