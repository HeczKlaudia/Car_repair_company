@include('includes.header')

<div id="app">
    @include('includes.nav')

    <main class="py-4">
        @yield('content')
    </main>
</div>

@include('includes.footer')