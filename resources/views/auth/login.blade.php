@extends('front.template_neo')

@section('main')
<main class="pa4 black-80">

@if(session()->has('error'))
    @include('partials/error', ['type' => 'danger', 'message' => session('error')])
@endif	

{{--  {!! link_to('password/reset', trans('front/login.forget')) !!}  --}}
{{--  {!! link_to('register', trans('front/login.registering'), ['class' => 'btn btn-default']) !!}  --}}

{!! Form::open(['url' => 'login', 'class' => 'measure left']) !!}	
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="f4 fw6 ph0 mh0 fontbit">Sign In</legend>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="email-address">Email</label>
        <input class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="log"  id="email-address">
      </div>
      <div class="mv3">
        <label class="db fw6 lh-copy f6" for="password">Password</label>
        <input class="b pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="password" name="password"  id="password">
      </div>
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

