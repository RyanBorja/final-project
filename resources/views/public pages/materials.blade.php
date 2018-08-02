@extends('layouts.app')
@section('content')
    
<stone-selector :stone-data='{{ $stones->toJson() }}'></stone-selector>
@endsection