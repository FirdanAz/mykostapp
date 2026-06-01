@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'list-unstyled mb-0 mt-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="small text-danger d-flex align-items-center">
                <i class="bi bi-exclamation-circle-fill me-1" style="font-size: 0.75rem;"></i>
                {{ $message }}
            </li>
        @endforeach
    </ul>
@endif