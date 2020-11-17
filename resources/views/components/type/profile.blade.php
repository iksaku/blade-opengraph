{{-- See: https://ogp.me/#type_profile --}}

@props([
    'firstName' => null,
    'lastName' => null,
    'username' => null,
    'gender' => null
])

<x-og::type content="profile" />

@push('meta')
    @isset($first_name)
        <meta name="og:profile:first_name" content="{{ $firstName }}">
    @endisset

    @isset($last_name)
        <meta name="og:profile:last_name" content="{{ $lastName }}">
    @endisset

    @isset($username)
        <meta name="og:profile:username" content="{{ $username }}">
    @endisset

    @isset($gender)
        <meta name="og:profile:gender" content="{{ $gender }}">
    @endisset
@endpush