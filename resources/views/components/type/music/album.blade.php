{{-- See: https://ogp.me/#type_music.album --}}

@props([
    'song' => null,
    'songDisc' => null,
    'songTrack' => null,
    'musicians' => null,
    'releaseDate' => null
])

<x-og::type content="music.album" />

@push('meta')
    @isset($song)
        <meta name="og:music:song" content="{{ $song }}">
    @endisset

    @isset($songDisc)
        <meta name="og:music:song:disc" content="{{ $songDisc }}">
    @endisset

    @isset($songTrack)
        <meta name="og:music:song:track" content="{{ $songTrack }}">
    @endisset

    @isset($musicians)
        @foreach(Arr::wrap($musicians) as $musician)
            <meta name="og:music:musician" content="{{ $musician }}">
        @endforeach
    @endisset

    @isset($releaseDate)
        <meta name="og:music:release_date" content="{{ $releaseDate->toIso8601String() }}">
    @endisset
@endpush