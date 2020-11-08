<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('frontpage.slideshow')

    <div class="wrap container">
      <div class="content">
        @include('frontpage.tri-istaknute')
      </div>
    </div>
    <div class="najave py-5">
    <div class="wrap container">
      <div class="content">
        @include('frontpage.najave')
      </div>
    </div>
  </div>
  <div class="wrap container vijesti py-5">
    <div class="content">
      @include('frontpage.vijesti')
    </div>
  </div>
  @include('frontpage.majka')
  @include('frontpage.filomena')
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
