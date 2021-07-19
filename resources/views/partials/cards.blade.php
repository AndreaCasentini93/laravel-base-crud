<section id="cards_section">
    <div class="container">
        <h1>DC Comics Volumes</h1>
        <div class="d-flex flex-wrap text-center">
            @foreach ($comicsVolumes as $volume)
                <a href="{{ $volume->slug }}" class="comics_card">
                    <img src="{{ $volume->thumb }}" alt="{{ $volume->title }}">
                    <h3>{{ $volume->series }}</h3>
                    <h6>{{ $volume->type }}</h6>
                    <h4>&euro; {{ $volume->price }}</h4>
                </a>
            @endforeach
        </div>
    </div>
</section>