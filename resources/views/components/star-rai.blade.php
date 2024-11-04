@if ($rating)
    @for ($i = 1; $i <= 5; $i++)
    {{ $i <= round($rating) ? '★' : '☆' }}
{{--
        @if ($i < round($rating))
        ★
        @elseif ($i = round($rating))
        ✫
        @else
        ☆
        @endif --}}
    @endfor
@else
No rating yet
@endif
