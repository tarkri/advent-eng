@include('layouts.partials.header')

  <body>

    @include('layouts.partials.navigation')
	<div style="margin-top:50px;">
    @yield('content')
	</div>

   @include('layouts.partials.footer')
   @yield('scripts')
  </body>
</html>
