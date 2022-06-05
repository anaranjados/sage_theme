{{--
  Template Name: Proenza portfolio
  Template Post Type: post
--}}

@extends('layouts.app')

@section('content')
 @while(have_posts())
  @php(the_post())
      @include('partials.page-header')   
      <div class="row justify-content-center">
         <div class="mb-5">
            @include('partials.pr_portfolio')
         </div>
      </div>
@endwhile
@endsection