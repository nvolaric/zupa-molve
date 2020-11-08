
    <div class="col-md-4 py-3 ostali">
    <a href="@php(the_permalink())">
        <div>
          @if (has_post_thumbnail())
          @php(the_post_thumbnail('vijesti-front', array('class' => 'img-fluid')))
          @else
          <img src="@asset('images/default-image.jpg')" class="img-fluid">
          @endif
        </div>
        <div class="datum pt-1">@php (the_date( 'd. m. Y.'))</div>
        <h3 class="mb-1 pb-3">@php(the_title())</h3>
    </a>
  </div>
