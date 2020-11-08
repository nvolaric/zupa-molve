<header>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light justify-content-between pt-4">
    <a class="navbar-brand text-primary" href="{{ home_url('/') }}">MARIJINO SVETIŠTE MOLVE <br /><span class="text-secondary">Župa Uznesenja Blažene Djevice Marije</span></a>
  <button class="navbar-toggler ml-auto float-xs-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation',
      'container' => '',
      'menu_class' => 'nav navbar-nav ml-auto',
      'walker' => new \App\wp_bootstrap4_navwalker()]) !!}
      @endif

  </div>
</nav>
<div>
</header>
