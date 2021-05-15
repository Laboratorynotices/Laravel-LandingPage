<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
@include('layouts.landingPage.head')

  <body>
    @include('layouts.landingPage.header')

    <main role="main">

      @include('layouts.landingPage.services')
      @include('layouts.landingPage.aboutBlock')
      @include('layouts.landingPage.amenities')
      @include('layouts.landingPage.portfolio')
      @include('layouts.landingPage.offer')
      @include('layouts.landingPage.team')
      @include('layouts.landingPage.price')
      @include('layouts.landingPage.numbers')
      @include('layouts.landingPage.testimonials')
      @include('layouts.landingPage.contact')
      <!-- End Clients Section -->
      
    </main>

    @include('layouts.landingPage.footer')

    @include('layouts.landingPage.jsImport')
  </body>
  <!-- End Body -->
</html>