<article @php( post_class("row") )>
   <main class="open">
      <h5 class="col-8">
         @php(the_excerpt())
      </h5>
      <span class="col-4">
         {!! get_the_post_thumbnail( $post_id, 'thumbnail' ) !!}
      </span>
      <hr class="col-12">
      <section class="col-12">
         <div id="gallery" class="row text-center">
            @php( $media = get_attached_media('image', $post_id ) )
            @foreach( $media as $item => $k)

               <figure class="col-3">
                  {!! wp_get_attachment_image( $item, 'medium') !!}
               </figure>
            
            @endforeach
         </div>
      </section>
   </main>
   <div id="popup" hidden>
      <span>❌</span>
   </div>
</article>
