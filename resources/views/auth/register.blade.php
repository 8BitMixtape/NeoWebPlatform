@extends('front.template_neo')

@section('main')


<article class="pa4 black-80">
  {!! Form::open(['url' => 'register']) !!}	
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="ph0 mh0 fw6 clip">Sign Up</legend>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="email-address">Username</label>
        <input class="pa2 input-reset ba bg-transparent w-100 measure" type="email" name="username"  id="email-address">
      </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="email-address">Email address</label>
        <input class="pa2 input-reset ba bg-transparent w-100 measure" type="email" name="email"  id="email-address">
      </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="password">Password</label>
        <input class="b pa2 input-reset ba bg-transparent" type="password" name="password"  id="password">
      </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="password">Password Confirmation</label>
        <input class="b pa2 input-reset ba bg-transparent" type="password" name="password_confirmation"  id="password">
      </div>
    </fieldset>
    <div class="mt3"><input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6" type="submit" value="Sign Up"></div>
  {!! Form::close() !!}
</article>

@endsection

@section('scripts')

    <script>
        $(function () {
            $('.badge').popover();
        });
    </script>

@endsection