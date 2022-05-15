@extends('layout')
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    @section('contentfluid')

    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">


        <!-- Page Heading -->
        @if (isset($header))
            <header >
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{auth()->user()->name."'s Profile"}}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @if (isset( $slot))
            {{ $slot }}

            @endif

        </main>
    </div>

        @stack('modals')

        @livewireScripts
        @endsection


</html>
