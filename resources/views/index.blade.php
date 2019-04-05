@extends('layouts.app')
@section('content')

<form method="POST" action="{{route('adicionar')}}" class="form-group">
	@csrf
	{{-- {{dd($lista)}} --}}
	@foreach($lista as $tipo => $indice)
		@foreach($indice as $value => $nome)
			<label for="{{$nome}}">{{$nome}}</label>
				<input type="{{$tipo}}" name="{{$nome}}" value="{{$value}}">
		@endforeach
	@endforeach
	<input type="submit" name="">
</form>
@endsection