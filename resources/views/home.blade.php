@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="p-2">
                        <a href="/newstone" class="text-white"><button type="button" class="btn btn-success btn-lg btn-block mb-3 m-2">Add a new stone card</button></a><br>
                        <a href="/stones" class="text-white"><button type="button" class="btn btn-primary btn-lg btn-block mb-3 m-2">Edit stone cards</button></a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
