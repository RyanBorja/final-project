@extends('layouts.app')

@section('content')
<div class="col-12">
    <a href="/home" class="btn btn-secondary my-3">Go back to dashboard</a>
</div>
<stone-manager :stone-data='{{ $stones->toJson() }}'></stone-manager>

@endsection