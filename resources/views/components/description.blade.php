{{-- See: https://ogp.me/#optional --}}

@props(['content'])

@push('meta')
    <meta property="og:description" content="{{ $content }}">
@endpush