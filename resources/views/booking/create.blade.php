@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book Your Parking</div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">Basement Parking</div>
                    @foreach($slots->where('area', 'Base') as $slot)
                        <svg viewBox="0 0 400 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                @if($slot->is_engaged)
                                    <rect fill="#1F1F1F" transform="" x="20" y="25" width="100" height="20"></rect>
                                @elseif($slot->faculty_reserved and auth()->user()->is_faculty)
                                    <a xlink:href="/booking/{{ $slot->id }}">
                                        <rect fill="#2E2EFF" transform="" x="20" y="25" width="100" height="20"></rect>
                                    </a>
                                @elseif($slot->faculty_reserved)
                                    <rect fill="#FF1111" transform="" x="20" y="25" width="100" height="20"></rect>
                                @else
                                    <a xlink:href="/booking/{{ $slot->id }}">
                                        <rect fill="#2E2EFF" transform="" x="20" y="25" width="100" height="20"></rect>
                                    </a>
                                @endif
                            </g>
                        </svg>
                    @endforeach
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">Front Gate Parking</div>
                    @foreach($slots->where('area', 'Front') as $slot)
                        <svg viewBox="0 0 400 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                @if($slot->is_engaged)
                                    <rect fill="#1F1F1F" transform="" x="20" y="25" width="100" height="20"></rect>
                                @elseif($slot->faculty_reserved and auth()->user()->is_faculty)
                                    <a xlink:href="/booking/{{ $slot->id }}">
                                        <rect fill="#2E2EFF" transform="" x="20" y="25" width="100" height="20"></rect>
                                    </a>
                                @elseif($slot->faculty_reserved)
                                    <rect fill="#FF1111" transform="" x="20" y="25" width="100" height="20"></rect>
                                @else
                                    <a xlink:href="/booking/{{ $slot->id }}">
                                        <rect fill="#2E2EFF" transform="" x="20" y="25" width="100" height="20"></rect>
                                    </a>
                                @endif
                            </g>
                        </svg>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
