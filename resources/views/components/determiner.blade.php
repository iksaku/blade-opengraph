{{-- See: https://ogp.me/#optional --}}

@props(['content' => ''])

@push('meta')
    <meta property="og:determiner" content="{{ $content }}">
@endpush