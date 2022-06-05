<time datetime="{{ get_post_time( __('j F Y', 'dom') ) }}">
   {!! get_post_time(__('j F Y', 'dom')) !!}
</time>
<p> 
   {!! get_the_tag_list('Теги: ', ', ') !!}
</p>
<figure>
   {!! get_the_post_thumbnail() !!}
</figure>