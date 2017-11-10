@if ($items)
    <ul>
    @foreach ($items as $item)
        <li>{{ $item->main }}</li>
    @endforeach
    </ul>
@endif
