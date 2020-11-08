
  @if (is_singular('najava'))
<p class="meta najava-meta">@php(the_field('datum_najave'))</p> 
  @else
  <p class="meta">OBJAVLJENO: <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ the_date( 'd. m. Y. \u i:s') }}</time></p>
<!-- <p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p> -->
@endif
