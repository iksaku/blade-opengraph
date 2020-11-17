{{-- See: https://ogp.me/#metadata --}}

@props(['content'])

@push('meta')
    <meta property="og:type" content="{{ $content }}">
@endpush