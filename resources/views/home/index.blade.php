@extends('layouts.app')

@section('content')
    @include('home.header')
    @include('home.hero')
    @include('home.clients')
    @include('home.presentation')
    @include('home.pricing')
    @include('home.features')
    {{-- @include('home.articles') --}}
    @include('home.subscription')
{{--    @include('home.cliens_footer')--}}
@endsection

@section('footer')
    @include('home.footer')
@endsection

@section('javascript')
<script>
$("a").on("click", function () {
      console.log(this.href.split("#")[1]);
      var urlHash = this.href.split("#")[1];
      $('html,body').animate({
          scrollTop: $('.' + urlHash + ', #' + urlHash +',[name='+urlHash+']').first().offset().top -100
      }, 1000);
  });
</script>
@endsection
