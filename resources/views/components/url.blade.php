{{-- See: https://ogp.me/#metadata --}}

@props(['content'])

@push('meta')
    <meta property="og:url" content="{{ $content }}">
@endpush