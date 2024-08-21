<div>
    @foreach ($images as $image)
    <li>
        <a data-fancybox="gallery" href="{{ asset('assets/img/' . $image) }}">
            <img src="{{ asset('assets/img/' . $image) }}" alt="Product Image">
        </a>
    </li>
    @endforeach

</div>

