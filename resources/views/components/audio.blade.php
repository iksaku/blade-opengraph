{{-- See: https://ogp.me/#structured --}}

@props([
    'content',
    'url' => null,
    'secureUrl' => null,
    'type' => null
])

@push('meta')
    <meta property="og:audio" content="{{ $content }}">

    @isset($url)
        <meta property="og:audio:url" content="{{ $url }}">
    @endisset

    @isset($secureUrl)
        <meta property="og:audio:secure_url" content="{{ $secureUrl }}">
    @endisset

    @isset($type)
        <meta property="og:audio:type" content="{{ $type }}">
    @endisset
@endpush