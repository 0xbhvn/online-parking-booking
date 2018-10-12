@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Current Pass</div>

                <div class="card-body">
                    <?php $carbon = new \Carbon\Carbon($booking->created_at); ?>
                    @if($carbon->addDays($booking->validity) > \Carbon\Carbon::now())
                        Valid till {{ $carbon->toFormattedDateString() }}
                    @else
                        <a href="/booking"><button type="button" class="btn btn-primary">Book</button></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
