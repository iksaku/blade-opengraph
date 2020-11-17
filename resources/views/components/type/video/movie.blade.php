{{-- See: https://ogp.me/#type_video.movie --}}

{{-- NOTE: This is an inheritable OpenGraph Type, hence the 'type' prop --}}

@props([
    'type' => 'video.movie'
    'actors' => null,
    'directors' => null,
    'writers' => null,
    'duration' => null,
    'release_date' => null,
    'tags' => null
])

<x-og::type content="{{ $type }}" />

@push('meta')
    @isset($actors)
        @foreach(Arr::wrap($actors) as $actor)
            @php
                if (is_array($actor)) {
                    $values = array_values($actor);
                    $actor = $values[0];
                    $role = $values[1] ?? null;
                }
            @endphp

            <meta name="video:actor" content="{{ $actor }}">

            @isset($role)
                <meta name="video:actor:role" content="{{ $role }}"
            @endisset
        @endforeach
    @endisset

    @isset($directors)
        @foreach(Arr::wrap($directors) as $director)
            <meta name="video:director" content="{{ $director }}">
        @endforeach
    @endisset

    @isset($writers)
        @foreach(Arr::wrap($writers) as $writer)
            <meta name="video:writer" content="{{ $writer }}">
        @endforeach
    @endisset

    @isset($duration)
        <meta name="video:duration" content="{{ $duration }}">
    @endisset

    @isset($releaseDate)
        <meta name="video:release_date" content="{{ $releaseDate->toIso8601String() }}">
    @endisset

    @isset($tags)
        @foreach(Arr::wrap($tags) as $tag)
            <meta name="video:tag" content="{{ $tag }}">
        @endforeach
    @endisset
@endpush