@extends('layouts.app')
@section('content')

    @component('layouts.card')
        @slot('cardHeader')
            <h2 class="card-title">Hours:</h2>
            <p class="card-text">Monday - Friday: 8:00AM - 5:00PM</p>
            <p class="card-text">Saturday: <a href="tel:859-338-8890">By Appointment</a></p>
            <p class="card-text">Sunday: closed</p>
        @endslot
        @slot('cardBody')
        <h2 class="card-title">Location:</h2>
        <p class="card-text">1008 S Main Street</p>
        <p class="card-text">Nicholasville, KY  40356</p>
        @endslot
        @slot('cardImg')
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.866253045096!2d-84.58142988502586!3d37.863419779743374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88425f91fd65fd4b%3A0x9af799eb8aad9ac!2sQuality+Stone+Countertops!5e0!3m2!1sen!2sus!4v1532203232286" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        @endslot
    @endcomponent

    @component('layouts.card')
        @slot('cardHeader')
            <h2 class="card-title">Jennifer Wiseman</h2>
            <p class="card-text">Project Consultant</p>
            <p class="card-text">Phone: (859) 338-8890</p>
            <p class="card-text">Fax: (859)543-0851</p>
            <p class="card-text">Email: <a href="mailto:jennifer@qualitystonecountertops.com">jennifer@qualitystonecountertops.com</a></p>
            <p class="card-text"><a href="qualitystonecountertopsky.com">Corporate office</a></p>
        @endslot
    @endcomponent
@endsection