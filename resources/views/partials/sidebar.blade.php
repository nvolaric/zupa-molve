<div class="najave-sidebar p-3 rounded-bottom">
<h3>Najave</h3>
  @if ($najave->have_posts())
  @while ($najave->have_posts())
    @php($najave->the_post())
    <a href="@php(the_permalink())" class="my-2 px-2 py-1">
      @if (get_field('datum_najave'))
      <p class="p-0 m-0">@php(the_field('datum_najave'))</p>
      @endif
      <h4 class="p-0 m-0"> @php(the_title())</h4>
    </a>
  @endwhile
  @endif
  @php(wp_reset_postdata())
<!-- <br /> -->

<h3 class="mt-4">Župni listić</h3>
  @if ($listic_zadnji->have_posts())
  @while ($listic_zadnji->have_posts())
    @php($listic_zadnji->the_post())
  <a href="@php(the_field('zupni_listic'))" class="mt-2 px-2 pt-3 pb-2">
    <!-- <p class="m-0"><i class="fas fa-newspaper"></i> Župni listić</p> -->
    <h4 class="p-0 m-0"><i class="fas fa-newspaper"></i> @php(the_title())</h4>
  </a>
  @endwhile
  @endif
  @php(wp_reset_postdata())

  <a href="{{ get_post_type_archive_link('listic') }}" class="listic-link-sidebar px-2 py-1 m-0">&raquo Arhiva župnih listića</a>
<!--
  <br /> -->

  <h3 class="mt-4">Raspored svetih misa</h3>
  <a href="{{ get_the_permalink(330) }}" class="my-2 px-2 py-3">
  <!-- <p class="m-0"><i class="fas fa-newspaper"></i> Župni listić</p> -->
  <h4 class="p-0 m-0"><i class="fas fa-church"></i> Raspored svetih misa</h4>
  </a>
<!--
  <br /> -->

  <h3 class="mt-4">Sakramenti</h3>
  <a href="{{ get_the_permalink(8855) }}" class="my-2 px-2 py-3">
  <!-- <p class="m-0"><i class="fas fa-newspaper"></i> Župni listić</p> -->
  <h4 class="p-0 m-0"><i class="fas fa-cross"></i> Kršteni, umrli, vjenčani u župi</h4>
  </a>

  <h3 class="mt-4">Doniraj</h3>
  <a href="{{ get_the_permalink(920) }}" class="my-2 px-2 py-3">
  <!-- <p class="m-0"><i class="fas fa-newspaper"></i> Župni listić</p> -->
  <h4 class="p-0 m-0"><i class="far fa-money-bill-alt"></i> Doniraj</h4>
  </a>
<!-- <br /> -->
  <h3 class="mt-4">Tražilica</h3>
  {!! get_search_form(false) !!}

</div>
