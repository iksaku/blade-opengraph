{{-- See: https://ogp.me/#structured --}}

@props([
    'content',
    'url' => null,
    'secureUrl' => null,
    'type' => null,
    'width' => null,
    'height' => null,
    'alt' => null
])

@push('meta')
    <meta property="og:image" content="{{ $content }}">

    @isset($url)
        <meta property="og:image:url" content="{{ $url }}">
    @endisset

    @isset($secureUrl)
        <meta property="og:image:secure_url" content="{{ $secureUrl }}">
    @endisset

    @isset($type)
        <meta property="og:image:type" content="{{ $type }}">
    @endisset

    @isset($width)
        <meta property="og:image:width" content="{{ $width }}">
    @endisset

    @isset($height)
        <meta property="og:image:height" content="{{ $height }}">
    @endisset

    @isset($alt)
        <meta property="og:image:alt" content="{{ $alt }}">
    @endisset
@endpush