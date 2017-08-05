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
    <fieldset id="" class="ba b--transparent ph0 mh0">
      {!! Form::controlTachyons('input','name', 'Program', $errors, (isset($name)) ? $name : "" , "What is your program name?", "(required)" ) !!}
      {!! Form::controlTachyons('input','variant', 'Variant', $errors, "" , "What is the board variant?", "(optional)" ) !!}
      {!! Form::controlTachyons('textarea','description', 'Description', $errors, "" , "What does your program do?", "(required)" ) !!}
      {!! Form::controlTachyons('input','url', 'Url', $errors, "" , "Misc url..", "(optional)" ) !!}
      {!! Form::controlTachyons('file','hex', 'HEX', $errors, "" , "HEX File", "(required)" , "mb0") !!} 
    </fieldset>
    <div class="">
      <input class="b ph3 pv2 input-reset ba b--black bg-transparent pointer f6 dib" type="submit" value="Upload">
    </div>
  </form>
</div>
@endsection


