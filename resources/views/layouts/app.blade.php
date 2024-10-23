<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
     <!-- Vendor css (Require in all Page) -->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.min.css') }}">

<!-- Icons css (Require in all Page) -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/icons.min.css') }}">

<!-- App css (Require in all Page) -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}">

<!-- Theme Config js (Require in all Page) -->
<script src="assets/js/config.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
          
            <!-- Page Heading -->
            @isset($header)
                <header class="">
                    <div class="  py-6 lg:px-12 px-6 text-slate-400 pt-28">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
