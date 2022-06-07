{{--
  Template Name: Proenza article
  Template Post Type: articles
--}}

@extends('layouts.app')

@section('content')
 @while(have_posts())
  @php(the_post())
      @include('partials.page-header')   
      <div class="row justify-content-center">
         <div class="mb-5">
            @include('partials.pr_article')
         </div>
      </div>
@endwhile
@endsection