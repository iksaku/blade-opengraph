{{-- See: https://ogp.me/#type_music.radio_station --}}

@props(['creator' => null])

<x-og::type content="music.radio_station" />

@push('meta')
    @isset($creator)
        <meta name="og:music:creator" content="{{ $creator }}">
    @endisset
@endpush