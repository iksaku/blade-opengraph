{{-- See: https://ogp.me/#type_music.playlist --}}

@props([
    'song' => null,
    'songDisc' => null,
    'songTrack' => null,
    'creator' => null
])

<x-og::type content="music.playlist" />

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

    @isset($creator)
        <meta name="og:music:creator" content="{{ $creator }}">
    @endisset
@endpush