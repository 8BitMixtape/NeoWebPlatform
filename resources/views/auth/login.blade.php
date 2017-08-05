@extends('front.template_neo')

@section('main')
<main class="pa4 black-80">


  <h1 class="f4 bold center black mb4 fontbit center tl-ns f2-ns black lh-copy lh-copy-m lh-title-ns tc">Login</h1>


@if(session()->has('error'))
    @include('partials/error', ['type' => 'danger', 'message' => session('error')])
@endif	

{{--  {!! link_to('password/reset', trans('front/login.forget')) !!}  --}}
{{--  {!! link_to('register', trans('front/login.registering'), ['class' => 'btn btn-default']) !!}  --}}

{!! Form::open(['url' => 'login', 'class' => 'measure left']) !!}	
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      {!! Form::controlTachyons('input','log', 'E-Mail', $errors, "" , "Enter your email address", "(required)" ) !!}
      {!! Form::controlTachyons('password','password', 'Password', $errors, "" , "Enter your password", "(required)" ) !!}

      <label class="pa0 ma0 lh-copy f6 pointer"><input type="checkbox"> Remember me</label>
    </fieldset>
    <div class="">
      <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="Sign in">
    </div>
    <div class="lh-copy mt3">
      {!! link_to('register', "Sign up", ['class' => 'f6 link dim black db']) !!}
      <a href="#0" class="f6 link dim black db">Forgot your password?</a>
    </div>
{!! Form::close() !!}
</main>
@endsection

