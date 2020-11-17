{{-- See: https://ogp.me/#metadata --}}

@props(['content'])

@push('meta')
    <meta property="og:image" content="{{ $content }}">
@endpush