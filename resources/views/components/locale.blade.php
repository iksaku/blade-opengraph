{{-- See: https://ogp.me/#optional --}}

@props(['content', 'alternates'])

@push('meta')
    <meta property="og:locale" content="{{ $content ?? app()->getLocale() }}">

    @isset($alternates)
        @foreach(Arr::wrap($alternates) as $alternate)
            <meta name="og:locale:alternate" content="{{ $alternate }}">
        @endforeach
    @endisset
@endpush