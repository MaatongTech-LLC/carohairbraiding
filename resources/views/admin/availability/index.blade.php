@extends('admin.layouts.main')

@section('title')
    Availability Calendar
@endsection
@section('content')
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row pt-5">
           <div class="col-lg-12">
               @include('components.calendar')
           </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
