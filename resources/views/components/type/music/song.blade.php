{{-- See: https://ogp.me/#type_music.song --}}

@props([
    'duration' => null,
    'albums' => null,
    'albumDisc' => null,
    'albumTrack' => null,
    'musicians' => null
])

<x-og::type content="music.song" />

@push('meta')
    @isset($duration)
        <meta name="og:music:duration" content="{{ $duration }}">
    @endisset

    @isset($album)
        @foreach(Arr::wrap($albums) as $album)
            <meta name="og:music:album" content="{{ $album }}">
        @endforeach
    @endisset

    @isset($albumDisc)
        <meta name="og:music:album:disc" content="{{ $albumDisc }}">
    @endisset

    @isset($albumTrack)
        <meta name="og:music:album:track" content="{{ $albumTrack }}">
    @endisset

    @isset($musicians)
        @foreach(Arr::wrap($musicians) as $musician)
            <meta name="og:music:musician" content="{{ $musician }}">
        @endforeach
    @endisset
@endpush