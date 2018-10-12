@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Booking Details</div>

                    <div class="card-body">
                        Area: {{ $booking->area }}
                        <br>
                        Slot: {{ $booking->slot }}
                        <br>
                        <form method="POST" action="/booking/{{ $booking->id }}/store">
                            @csrf
                            <select name="validity">
                                <option value="1">Day Pass @ Rs 49</option>
                                <option value="30">Month Pass @ Rs 499</option>
                            </select>
                            <br>
                            <input type="submit" value="Pay">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
