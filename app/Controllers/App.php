<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }


    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Najnoviji članci', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Rezultati pretraživanja za  <span class="title-search-term"> %s </span>', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Nije pronađeno', 'sage');
        }
        return get_the_title();
    }


        public function listicZadnji()
        {
            $args = [
                'post_type'           => 'listic',
                'posts_per_page'      => 1
            ];

            return $query = new \WP_Query($args);
        }

        public function najave(){
              $args = [
                  'post_type'           => 'najava',
                  'posts_per_page'      => 100
              ];

              return $query = new \WP_Query($args);
        }


        public function footerKontakt(){
              $args = [
                  'post_type'           => 'page',
                  'page_id'             => '8719',
                  'posts_per_page'      => 1
              ];
              return $query = new \WP_Query($args);
        }

        public function paginacija(){
          $args = array(
              'prev_text' => 'Starije',
              'next_text' => 'Novije'
          );
          $proba = get_the_posts_navigation($args) ;
          return $proba;
        }

        public function stranica(){
          if(is_page()){
            return true;
          }else{
            return false;
          }
        }
        // 
        // public function parentTitle(){
        //   $broj = wp_get_post_parent_id(219);
        //   return $broj;
        // }
}
