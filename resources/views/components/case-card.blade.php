<div class="card px-3 py-3">
    <img src="{{ asset($imgSrc) }}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{!! $text !!}</p>
    </div>
    <div class="card-footer">
        @if (isset($link))
            <a href="{{ $link }}" class="btn btn-primary me-2" target="_blank">Посмотреть !</a>
        @endif
        @if (isset($gitHubLink))
            <a class="btn p-0" href="{{ $gitHubLink }}" target="_blank">
                <span style="font-size: 2.5em; color: black;">
                    <i class="fab fa-github-square"></i>
                </span>
            </a>
        @endif
    </div>
</div>
