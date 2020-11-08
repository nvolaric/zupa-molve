<h2 class="home">Vijesti</h2>

@if ($vijesti_sticky->have_posts())
@while ($vijesti_sticky->have_posts())
  @php($vijesti_sticky->the_post())
    <div class="py-2 prvi sticky rounded-lg">
    <a href="@php(the_permalink())">
      <div class="row">
        <div class="col-lg-12 pt-0 mt-0">@php(the_post_thumbnail('large', array('class' => 'img-fluid ')) )</div>
        <div class="col-lg-12">
          <div class="datum pt-2 pl-3">@php (the_date( 'd. m. Y.'))</div>
        <h3 class="mb-1 pl-3">@php(the_title())</h3>
        <!-- <div class="pl-3">@php(the_excerpt())</div> -->
      </div>
      </div>
    </a>
  </div>
@endwhile
@endif
@php(wp_reset_postdata())

<div class="row">
@if ($vijesti_prva->have_posts())
@while ($vijesti_prva->have_posts())
  @php($vijesti_prva->the_post())

      <div class="col-lg-6 py-3 prvi">
      <a href="@php(the_permalink())">
          <div>@php(the_post_thumbnail('vijesti-front', array('class' => 'img-fluid ')) )</div>
          <div class="datum pt-2">@php (the_date( 'd. m. Y.'))</div>
          <h3 class="mb-1">@php(the_title())</h3>
          @php(the_excerpt())
      </a>
    </div>
@else
    @endif
@endwhile
@endif
@php(wp_reset_postdata())

@php($count = 1)
@if ($vijesti_ostale->have_posts())
<div class="col-lg-6">
  <div class="row">
    @while ($vijesti_ostale->have_posts())
      @php($vijesti_ostale->the_post())
      @if ($count==1)
          @php($count++)
      @else
        <div class="col-md-4 py-3 ostali">
        <a href="@php(the_permalink())">
            <div>
              @if (has_post_thumbnail())
              @php(the_post_thumbnail('vijesti-front', array('class' => 'img-fluid')))
              @else
              <img src="@asset('images/default-image.jpg')" class="img-fluid">
              @endif
            </div>
            <div class="datum pt-2">@php (the_date( 'd. m. Y.'))</div>
            <h3 class="mb-1 pb-3">@php(the_title())</h3>
        </a>
      </div>
          @php($count++)
      @endif
    @endwhile
  </div>
  <a href="{{ get_the_permalink(8703) }}" class="btn btn-primary float-right btn-lg"><i class="far fa-arrow-alt-circle-right"></i> Ostale vijesti</a>
</div>
@endif
@php(wp_reset_postdata())
</div>
