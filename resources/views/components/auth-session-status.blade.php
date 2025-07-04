@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-success small fw-medium']) }}>
        {{ $status }}
    </div>
@endif