
<form role="search" method="get" class="mb-3" action="<?php echo esc_url( home_url( '/' ) ) ?>">

<div class="input-group md-form form-sm form-2 pl-0">
		<input type="text" class="search-field form-control my-0 py-1 red-border" placeholder="Traži" value="<?php echo get_search_query() ?>" name="s" aria-label="Traži" />

  <div class="input-group-append">
    <button type="submit" class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
  </div>
</form>
