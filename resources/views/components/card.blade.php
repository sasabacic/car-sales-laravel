<div class="card">
    <div class="card-header">{{ $title }}</div>
    @if ($slot->isEmpty())
        <p>Please give me some content</p>
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>
