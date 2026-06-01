@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-success rounded-3 d-flex align-items-center']) }}>
        <i class="bi bi-check-circle-fill me-2"></i>
        <div>{{ $status }}</div>
    </div>
@endif