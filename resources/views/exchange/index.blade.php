@extends('front.template_neo') 

@section("main")
<div class="pa4">
  <h1 class="f4 bold center black mb4 fontbit center tl-ns f2-ns black lh-copy lh-copy-m lh-title-ns tc">DOWNLOAD MIXTAPE</h1>
  @include("exchange.table")
</div>

@endsection



@section('scripts')
{!! HTML::script('/js/hexwidget.js') !!}
@endsection



