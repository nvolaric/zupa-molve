<div class="clearfix"></div>
<footer class="content-info glavni-footer">
  <div class="container">
    <div class="row py-5">
      <div class="col-md-4 kontakt py-2">
        @while($footer_kontakt->have_posts()) @php($footer_kontakt->the_post())
            {{ the_content() }}
        @endwhile
        @php(wp_reset_postdata())
      </div>
      <div class="col-md-4 py-2 srednji">
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation',
            'container' => '',
            'menu_class' => '']) !!}
            @endif
      </div>
      <div class="col-md-4 py-2">
          <ul class="menu-footer-zupa">

          </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <p class="pt-3 copyright">
     &copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?>
  </p>

  </div>
</footer>
