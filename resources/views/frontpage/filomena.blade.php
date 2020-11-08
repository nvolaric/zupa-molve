<section class="filomena">
  <div class="p-3 container rounded-lg">
    <div class="row">
    <div class="col-md-6 fade-right">
      {!! get_the_post_thumbnail(218,'large', array('class' => 'img-fluid')) !!}
    </div>
    <div class="col-md-6 px-5">
      <h3 class="">{{ get_the_title(218)}}</h3>
      <p class="rounded-lg">{{ get_the_excerpt(218) }}</p>
        <a href="{{ get_the_permalink(218) }}" class="btn btn-primary btn-lg mb-2"><i class="far fa-arrow-alt-circle-right"></i> {{ get_the_title(218) }}</a><br />
          <a href="{{ get_the_permalink(215) }}" class="btn btn-primary btn-lg"><i class="far fa-arrow-alt-circle-right"></i> {{ get_the_title(215) }}</a>
    </div>
    </div>
  </div>
  <div class="p-3 container rounded-lg">
    <div class="row">
    <div class="col-md-6  d-block d-md-none d-lg-none d-xl-none">
      {!! get_the_post_thumbnail(219,'large', array('class' => 'img-fluid')) !!}
    </div>
    <div class="col-md-6 px-5">
      <h3 class="">{{ get_the_title(219)}}</h3>
      <p class="rounded-lg">{{ get_the_excerpt(219) }}</p>
        <a href="{{ get_the_permalink(219) }}" class="btn btn-primary btn-lg"><i class="far fa-arrow-alt-circle-right"></i> {{ get_the_title(219) }}</a>
    </div>
    <div class="col-md-6 d-none d-sm-none d-md-block">
      {!! get_the_post_thumbnail(219,'large', array('class' => 'img-fluid')) !!}
    </div>
    </div>
  </div>

  <div class="p-3 container rounded-lg">
    <div class="row">
    <div class="col-md-6">
      {!! get_the_post_thumbnail(768,'large', array('class' => 'img-fluid')) !!}
    </div>
    <div class="col-md-6 px-5">
      <h3 class="">{{ get_the_title(768)}}</h3>
      <p class="rounded-lg">{{ get_the_excerpt(768) }}</p>
        <a href="{{ get_the_permalink(768) }}" class="btn btn-primary btn-lg"><i class="far fa-arrow-alt-circle-right"></i> {{ get_the_title(768) }}</a>
    </div>
    </div>
  </div>
</section>
