@extends('admin.layouts.main')

@section('title')
    Category {{ $category->name }}
@endsection
@section('content')
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Category {{ $category->name }}</h4>
                        </div>
                        <a class="btn btn-primary" href="{{ route('admin.categories.index') }}">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="user-profile">
                                <img src="{{ Storage::url($category->image) }}" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                            </div>
                            <div class="mt-3">
                                <h3 class="d-inline-block">{{ $category->name }}</h3>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">About Category</h4>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="mt-2">
                            <h6 class="mb-1">Created:</h6>
                            <p>{{ $category->created_at->format('M d, Y') }}</p>
                        </div>

                        <div class="mt-2">
                            <h6 class="mb-1">Description:</h6>
                            <div>
                                {{ $category->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
