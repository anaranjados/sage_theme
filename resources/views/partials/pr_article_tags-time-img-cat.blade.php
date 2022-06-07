<time datetime="{{ get_post_time( __('j F Y', 'dom') ) }}">
   {!! get_post_time(__('j F Y', 'dom')) !!}
</time>
<p> 
   {!! get_the_tag_list('Теги: ', ', ') !!}
</p>
<p>
   @php( $terms = get_the_terms($post->ID, 'articles_cat') )
   @if ($terms)
      Рубрики:
      @foreach( $terms as $t )
         {!! $t->name, ', ' !!}
      @endforeach
   @endif
</p>
<figure>
   {!! get_the_post_thumbnail() !!}
</figure>