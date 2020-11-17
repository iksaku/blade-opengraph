{{-- See: https://ogp.me/#type_video.episode --}}

{{-- NOTE: This is an extension of 'video.movie' type --}}

@props([
    'series' => null
])

<x-og::type.video.movie type="video.episode" {{ $attributes }} />

@push('meta')
    @isset($series)
        <meta name="video:series" content="{{ $series }}">
    @endisset
@endpush