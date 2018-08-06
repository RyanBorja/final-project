{{-- <div class="container"> --}}
    <div class="row justify-content-center" style="width:100% !important;">
        <div class="card" style="width:100% !important;">
            <div class="card-header pt-4" style="width:100% !important;">{{$cardHeader or $slot}}</div>
            @if (isset($cardBody))
                <div class="card-body" style="width:100% !important;">{{ $cardBody }}</div>
            @endif
            @if (isset($cardImg))
                    {{ $cardImg }}
            @endif
        </div>
    </div>
{{-- </div> --}}