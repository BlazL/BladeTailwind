<!doctype html>
<html @php(language_attributes())>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(wp_head())
</head>

<body @php(body_class('font-sans antialiased'))>
@php(wp_body_open())

<!-- Header Section -->
<header class="w-full shadow border-b-2">
    @section('header')
        @include('partials.header')
    @show
</header>

<!-- Main container -->
<div class="flex justify-center min-h-screen bg-yellow-100">

    <!-- Main Content Wrapper -->
    <div class="flex w-full max-w-7xl">

        <!-- Content Section -->
        <div class="w-4/5 px-8">
            @section('content')
                @include('partials.content')
            @show
        </div>

        <!-- Sidebar Section -->
        <aside class="w-1/5 px-8">
            @yield('sidebar')
        </aside>

    </div>

</div>

@php(wp_footer())
</body>
</html>
