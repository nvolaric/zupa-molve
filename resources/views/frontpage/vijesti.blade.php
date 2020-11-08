<h2 class="home">Vijesti</h2>
@php($count = 1)
@if ($vijesti_ostale->have_posts())
  @while ($vijesti_ostale->have_posts())
    @php($vijesti_ostale->the_post())
      @if (is_sticky())
        <div class="sticky mt-3 rounded-lg">
        <a href="@php(the_permalink())">
            <div class="">@php(the_post_thumbnail('large', array('class' => 'img-fluid ')) )</div>
            <div class="p-3">
                <p class="datum m-0 p-0">@php (the_date( 'd. m. Y.'))</p>
                <h3 class="mb-1">@php(the_title())</h3>
            <p class="m-0 p-0">@php(the_excerpt())</p>
          </div>
        </a>
      </div>
      @elseif ($count==1)
      <div class="row">
          <div class="col-lg-6 py-3 prvi">
            <a href="@php(the_permalink())">
              <div>
                @if (has_post_thumbnail())
                @php(the_post_thumbnail('vijesti-front', array('class' => 'img-fluid ')) )
                @else
                <img src="@asset('images/default-image.jpg')" class="img-fluid">
                @endif
              </div>
              <div class="datum pt-2">@php (the_date( 'd. m. Y.'))</div>
              <h3 class="mb-1">@php(the_title())</h3>
              @php(the_excerpt())
            </a>
          </div>
          @php($count++)
      @elseif ($count<=7)
        @if ($count==2)
          <div class="col-lg-6">
            <div class="row">
        @endif
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
        @if ($count==7)
            </div>
          <a href="{{ get_the_permalink(8703) }}" class="btn btn-primary float-right btn-lg"><i class="far fa-arrow-alt-circle-right"></i> Ostale vijesti</a>
        </div>
      </div>
      @endif
      @php($count++)
    @else

    @endif
  @endwhile
@endif
@php(wp_reset_postdata())
</div>
