@extends('layouts.app')

@section('content')

  <div class="container-fluid title-wrap pt-4 pb-4 mt-2 mb-4" role="document">
    <div class="wrap container">
      <header>
        @include('partials.page-header')
      </header>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <main class="entry-content arhiva-posts col-12 col-md-8 order-1 order-md-1">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Nisu pronađeni rezultati za navedeni pojam. Pokušajte ponovno.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif
      @while (have_posts()) @php the_post() @endphp
          @include('partials.content-search')
      @endwhile

          {!! $paginacija !!}
    </main>
    <aside class="sidebar col-12 col-md-4 order-2 order-md-2">
      @include('partials.sidebar')
    </aside>
    </div>
  </div>

@endsection
