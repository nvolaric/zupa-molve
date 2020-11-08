<h2 class="home">Najave</h2>
<ul class="list-group list-group-flush">
  <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit</h5>
      <small>15. kolovoza do 17. siječnja 2020.</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
  </a> -->

    @if ($najave->have_posts())
    @while ($najave->have_posts())
      @php($najave->the_post())
      <a href="@php(the_permalink())" class="list-group-item list-group-item-action flex-column align-items-start">
        <!-- <p class="p-0 m-0">@php(the_field('datum_najave'))</p> -->
        <h3 class="mb-1">@php(the_title()) @if (get_field('datum_najave')) <span>| @php(the_field('datum_najave')) </span> @endif</h3>
      </a>
    @endwhile
    @endif
    @php(wp_reset_postdata())
  <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">

    <h5 class="mb-1">List group item heading <small>3 days ago</small></h5>
  </a> -->
</ul>
