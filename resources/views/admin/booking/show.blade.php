@extends('admin.layouts.main')

@section('title')
    Booking {{ $booking->service->name }}
@endsection
@section('content')
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Service {{ $booking->service->name }}</h4>
                        </div>
                        <a class="btn btn-primary" href="{{ route('admin.booking.index') }}">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="user-profile">
                                <img src="{{ Storage::url($booking->service->image) }}" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                            </div>
                            <div class="mt-3">
                                <h3 class="d-inline-block"><a href="{{ route('admin.services.show', $booking->service->id) }}">{{ $booking->service->name }}</a></h3>
                                <p>{{ ucwords($booking->service->type) }}</p>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">About Booking</h4>
                        </div>

                    </div>
                    <div class="card-body">


                        <div class="mt-2">
                            <h6 class="mb-1">Amount ($):</h6>
                            <p>{{ $booking->payment->amount  }}
                                {{ $booking->payment->amount === $booking->service->price ? '(Full Price)' : '(Deposit Price)' }}
                            </p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Client Name/Email:</h6>
                            <p><a href="{{ route('admin.clients.show', $booking->user->id) }}">{{ $booking->user->name }}/{{ $booking->user->email }}</a></p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Date:</h6>
                            <p>{{ $booking->date }}</p>
                        </div>

                        <div class="mt-2">
                            <h6 class="mb-1">Time:</h6>
                            <div>
                                {{ $booking->time }}
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Booked On:</h6>
                            <p>{{ $booking->service->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
