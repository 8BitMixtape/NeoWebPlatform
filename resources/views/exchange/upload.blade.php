@extends('front.template_neo') 

@section("usermenu")
  @if(session('statut') !== 'visitor')
    @include("exchange.user_menu")
  @endif
@endsection

@section("main")
<div class="pa4">
  <h1 class="f4 bold center black mb4 fontbit center  tl-ns f2-ns black lh-copy lh-copy-m lh-title-ns tc">UPLOAD MIXTAPE</h1>
  {!! Form::open(['url' => 'member','enctype' => 'multipart/form-data', 'method' => 'post', 'class' => 'black-80']) !!}
  @include("exchange.upload_form")
  {!! Form::close() !!}
</div>
@endsection


