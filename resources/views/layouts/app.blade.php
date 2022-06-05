@include('sections.sc_header')

<main id="main" class="main">
   @yield('content')
</main>

@hasSection('sidebar')
   <aside class="sidebar">
   @yield('sidebar')
   </aside>
@endif

@include('sections.sc_footer')
