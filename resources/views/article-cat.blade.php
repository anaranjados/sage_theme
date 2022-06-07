{{--
  Template Name: Article categories
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    
    @php( $art_cat = get_categories( ['taxonomy' => 'articles_cat'] ) )
      @foreach( $art_cat as $a )
         <a href=
         {!! get_category_link( $a->term_id ) !!}
            
            > {!! $a->name !!} </a>, 
      @endforeach

  @endwhile
@endsection
   