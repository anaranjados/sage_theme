{{--
  Template Name: Article categories
--}}

@extends('layouts.app')

@section('content')
   @include('partials.page-header')
   @include('partials.content-page')
   
   @php( $po = get_posts( ['post_type'=>'articles'] ))
   <ul>
      @foreach( $po as $a )
      <li>
         <a href=
            {!! $a->guid !!}
            >
            {!! $a->post_title !!}
         </a>
      </li>
      @endforeach
   </ul>

@endsection
   