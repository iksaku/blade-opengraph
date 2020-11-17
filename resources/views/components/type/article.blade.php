{{-- See: https://ogp.me/#type_article --}}

@props([
    'publishedTime' => null,
    'modifiedTime' => null,
    'expirationTime' => null,
    'authors' => null,
    'section' => null,
    'tags' => null
])

<x-og::type content="article" />

@push('meta')
    @isset($publishedTime)
        <meta property="article:published_time" content="{{ $publishedTime->toIso8601String() }}">
    @endisset

    @isset($modifiedTime)
        <meta property="article:modified_time" content="{{ $modifiedTime->toIso8601String() }}">
    @endisset

    @isset($expirationTime)
        <meta property="article:expiration_time" content="{{ $expirationTime->toIso8601String() }}">
    @endisset

    @isset($authors)
        @foreach(Arr::wrap($authors) as $author)
            <meta property="article:author" content="{{ $author }}">
        @endforeach
    @endisset

    @isset($section)
        <meta property="article:section" content="{{ $section }}">
    @endisset

    @isset($tags)
        @foreach(Arr::wrap($tags) as $tag)
            <meta property="article:tag" content="{{ $tag }}">
        @endforeach
    @endisset
@endpush