@extends('layouts.app')

@section('content')

  <!-- @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif -->
  <div class="container-fluid title-wrap pt-4 pb-2 mt-2 mb-4" role="document">
    <div class="wrap container">
      <header>
        @include('partials.page-header')
      </header>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <main class="entry-content col-12 col-md-8 order-1 order-md-1">
      @while (have_posts()) @php the_post() @endphp
          @include('partials.content-'.get_post_type())
      @endwhile
          {!! $paginacija !!}
    </main>
    <aside class="sidebar col-12 col-md-4 order-2 order-md-2">
      @include('partials.sidebar')
    </aside>
    </div>
  </div>

@endsection
