<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
    <a href="{{ route('admin.services.show', $service->id) }}" class="d-flex align-items-center justify-content-between">
        @if($service->image)
            <div class="rounded-circle overflow-hidden">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($service->image) }}" style="object-fit: cover; height: 70px; width: 70px;" />
            </div>
        @else
            <div class="rounded-circle overflow-hidden">
                <img src="{{ asset('assets/img/logo.png') }}" style="object-fit: cover; height: 70px; width: 70px;" />
            </div>
        @endif

        <span class="px-2">{{ $service->name }}</span>
    </a>
</div>
