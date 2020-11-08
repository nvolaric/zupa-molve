

<div class="row py-4 text-center tri-istaknute">
  <div class="col-lg-4">
    @if ($listic_zadnji->have_posts())
    @while ($listic_zadnji->have_posts())
      @php($listic_zadnji->the_post())
      <a href="@php(the_field('zupni_listic'))" target="_blank">
        <div class="m-3 py-2 shadow-sm rounded-lg">
          <p class="faikona"><i class="fas fa-newspaper"></i></p>
          <p class="naslov">Župni listić</p>
          <p class="opis">@php(the_title())</p>
        </div>
      </a>
      @endwhile
      @endif
      @php(wp_reset_postdata())
  </div>
  <div class="col-lg-4 ">

    <a href="{{ get_the_permalink(330) }}" >
    <div class="m-3 py-2 shadow-sm rounded-lg">
      <p class="faikona"><i class="fas fa-church"></i></p>
      <p class="naslov">{{ get_the_title(330) }}</p>
      <p class="opis">Raspored svetih misa u svetištu</p>
    </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{ get_the_permalink(8855) }}" >
    <div class="m-3 py-2 shadow-sm rounded-lg">
      <p class="faikona"><i class="fas fa-cross"></i></p>
      <p class="naslov">{{ get_the_title(8855) }}</p>
      <p class="opis">Kršteni, umrli, vjenčani u župi</p>
    </div>
  </a>
  </div>
</div>
