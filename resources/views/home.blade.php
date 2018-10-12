@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personal Details</div>

                <div class="card-body">
                    Name: <strong>{{ auth()->user()->name }}</strong><br>
                    Email Id: <strong>{{ auth()->user()->email }}</strong><br>
                    Moodle Id: <strong>{{ auth()->user()->moodle }}</strong><br>
                    Vehicle No: <strong>{{ auth()->user()->vehicle_no }}</strong><br>
                </div>
            </div>

            <hr>

            <div class="card">
                <div class="card-header">Current Pass</div>

                <div class="card-body">
                    @if($booking)
                        Slot: <strong>{{ $booking->slot->area }} - {{ $booking->slot->slot }}</strong><br>
                        <?php $carbon = new \Carbon\Carbon($booking->created_at); ?>
                        @if($carbon->addDays($booking->validity) > \Carbon\Carbon::now())
                            Valid till: <strong>{{ $carbon->toFormattedDateString() }}</strong><br>
                            Valid from: <strong>{{ $carbon->subDays($booking->validity)->toFormattedDateString() }}</strong>
                        @else
                            <a href="/booking"><button type="button" class="btn btn-primary">Book</button></a>
                        @endif
                        <br>
                    @else
                        <a href="/booking"><button type="button" class="btn btn-primary">Book</button></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
