<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
            <div class="card-header">{{$cardHeader or $slot}}</div>
                @if (isset($cardBody))
                    <div class="card-body">{{ $cardBody }}</div>
                @endif
                @if (isset($cardImg))
                    {{ $cardImg }}
                @endif
            </div>
        </div>
    </div>
</div>