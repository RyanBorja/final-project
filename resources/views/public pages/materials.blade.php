@extends('layouts.app')
@section('content')
<div class="mt-3">
    <stone-selector :stone-data='{{ $stones->toJson() }}'></stone-selector>
</div>
@endsection