<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    use Partials\RecentPosts;

    public function vijestiSticky(){

      $sticky = get_option( 'sticky_posts' );

          $args = [
              'post_type'           => 'post',
              'posts_per_page'      => 1,
              'post__in' => $sticky,
              'ignore_sticky_posts' => 1
          ];
          return $query = new \WP_Query($args);
    }

    public function vijestiPrva(){
          $args = [
              'post_type'           => 'post',
              'posts_per_page'      => 1,
              'ignore_sticky_posts' => 1
          ];
          return $query = new \WP_Query($args);
    }

    public function vijestiOstale(){
          $args = [
              'post_type'           => 'post',
              'posts_per_page'      => 8
          ];
          return $query = new \WP_Query($args);
    }



}
