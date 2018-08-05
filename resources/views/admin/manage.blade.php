@extends('layouts.app')

@section('content')

<a href="/home" class="btn btn-secondary mb-5">Go back to dashboard</a>

<stone-manager :stone-data='{{ $stones->toJson() }}'></stone-manager>

@endsection