<article @php( post_class() )>
   <main class="row">
      <h5 class="col-8">
         @php(the_excerpt())
      </h5>
      <span class="col-4 thumb">
         {!! get_the_post_thumbnail( $post_id, 'thumbnail' ) !!}
      </span>
      <hr class="col-12">
      <section class="col-12">
         <div id="gallery" class="row text-center">
            @php( $arg = [
                     'post_type' => 'attachment', 
                     'posts_per_page' => 16, 
                     'post_status' => 'any', 
                     'post_parent' => null
                  ])
            @php( $at = get_posts($arg) )
            @foreach($at as $a )
            <figure class="col-3">
               {!! wp_get_attachment_image($a->ID , 'thumbnail' ) !!}
            </figure>
            @endforeach
         </div>
      </section>
   </main>
   <div id="popup" hidden>
      <span>❌</span>
   </div>
</article>
