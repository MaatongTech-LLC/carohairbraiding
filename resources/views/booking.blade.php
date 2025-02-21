@extends('layouts.main')
@section('title')
    Booking
@endsection

@section('content')
    <div class="breadcumb-wrapper background-image" style="background-image: url({{ asset('assets/img/hero/hero_bg_1_3.png') }});">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Booking</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="product-details space-top space-extra-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img">
                            <img src="{{ Storage::url($service->image) }}" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-about">
                        <p class="price">${{$service->price}}</p>
                        <h2 class="product-title">{{ ucwords($service->name) }}</h2>

                        <p class="text">
                           {{ $service->description }}
                        </p>
                        <div class="product_meta mt-4">
                            <span class="posted_in">Type: <a href="#" rel="tag">{{ ucwords($service->type) }}</a></span>
                            <span class="">Duration: <a href="#" rel="tag">{{ $service->duration }}</a></span>
                        </div>
                        <form action="{{ route('checkout') }}">
                            <div class="actions">
                                <input type="hidden" value="{{ $service->id }}" name="service_id">
                                <div class="form-group col-12">
                                    <label class="mb-2" for="date-pick">Date</label>
                                    <input type="text" class="date-pick form-control" name="date" id="date-pick"
                                           placeholder="Select Date" required autocomplete="off"/>
                                </div>
                                <div class="form-group col-12">
                                    <label class="mb-2" for="time-pick">Time</label>
                                    <input type="text" class="time-pick form-control" name="time" id="time-pick"
                                           placeholder="Select Time" required autocomplete="off"/>
                                </div>

                                <div class="wc_payment_method payment_method_cod">
                                    <input id="price" type="radio" class="input-radio" value="full_price" name="pay_price" required> <label
                                        for="price">Pay full amount <strong>(${{ $service->price }})</strong></label>
                                    <div class="payment_box payment_method_cod"><p>Pay the service full amount.</p></div>
                                </div>
                                <div class="wc_payment_method payment_method_cod">
                                    <input id="deposit_price" type="radio" class="input-radio" value="deposit" name="pay_price" required> <label
                                        for="deposit_price">Pay deposit <strong>(${{ $service->deposit_price }})</strong></label>
                                    <div class="payment_box payment_method_cod"><p>Pay for the booking deposit.</p></div>
                                </div>

                            </div>
                            <button type="submit" class="th-btn">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')

    <script>

    </script>
@endpush
