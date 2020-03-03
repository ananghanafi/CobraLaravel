@extends('partial.master')
@section('title')
@yield('title')
@endsection
@section('css_default')
<style>
</style>
 @stack('css')
@yield('css')
@endsection
@section('body')
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      {{-- <div class="page-loader-wrapper" style="padding-top:192px;">
        <img src="{{ asset('vendor/img/loading.gif') }}" width="90">
        <p>Please wait...</p>
      </div> --}}
      @extends('partial.header')
      @extends('partial.sidebar')
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
              <div class="section-header">
                  @yield('section-header')
              </div>
              <div class="section-body">
                @yield('section-body')
              </div>
          </section>
          {{-- <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018
                <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
          </footer> --}}
        </div>
    </div>
  </div>
@endsection
@section('js_default')
@extends('partial.footer')
<script>
  console.log('Start :');
</script>
 @stack('js')
@yield('js')
@endsection
