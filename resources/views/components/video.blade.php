{{-- See: https://ogp.me/#structured --}}

@props([
    'content',
    'url' => null,
    'secureUrl' => null,
    'type' => null,
    'width' => null,
    'height' => null
])

@push('meta')
    <meta property="og:video" content="{{ $content }}">

    @isset($url)
        <meta property="og:video:url" content="{{ $url }}">
    @endisset

    @isset($secureUrl)
        <meta property="og:video:secure_url" content="{{ $secureUrl }}">
    @endisset

    @isset($type)
        <meta property="og:video:type" content="{{ $type }}">
    @endisset

    @isset($width)
        <meta property="og:video:width" content="{{ $width }}">
    @endisset

    @isset($height)
        <meta property="og:video:height" content="{{ $height }}">
    @endisset
@endpush