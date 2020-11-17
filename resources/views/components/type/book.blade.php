{{-- See: https://ogp.me/#type_book --}}

@props([
    'authors' => null,
    'isbn' => null,
    'releaseDate' => null,
    'tags' => null
])

<x-og::type content="book" />

@push('meta')
    @isset($authors)
        @foreach(Arr::wrap($authors) as $author)
            <meta name="og:book:author" content="{{ $author }}">
        @endforeach
    @endisset

    @isset($isbn)
        <meta name="og:book:isbn" content="{{ $isbn }}">
    @endisset

    @isset($releaseDate)
        <meta name="og:book:release_date" content="{{ $releaseDate->toIso8601String() }}">
    @endisset

    @isset($tags)
        @foreach(Arr::wrap($tags) as $tag)
            <meta name="og:book:tag" content="{{ $tag }}">
        @endforeach
    @endisset
@endpush