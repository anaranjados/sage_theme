<article @php(post_class())>
   <div class="row">
      <h5 class="col-8">
            @php(the_excerpt())
      </h5>   
      <div class="col-4 atcl-meta">
         @include('partials.pr_tags-time-img_meta')
      </div>
   </div>
</article>
