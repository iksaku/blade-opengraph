{{-- See: https://ogp.me/#optional --}}

@props(['content' => ''])

@push('meta')
    <meta property="og:site_name" content="{{ $content }}">
@endpush