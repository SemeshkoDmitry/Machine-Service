<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $attributes->get('title') }}</h5>
        <p class="card-text">{{ $attributes->get('text') }}</p>

        {{ $slot }}
    </div>
</div>