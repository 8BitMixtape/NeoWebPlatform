@extends('front.template_neo')

@section('main')


<article class="pa4 black-80">

  <h1 class="f4 bold center black mb4 fontbit center tl-ns f2-ns black lh-copy lh-copy-m lh-title-ns tc">Register</h1>

  {!! Form::open(['url' => 'register']) !!}	
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">

      {!! Form::controlTachyons('input','email', 'E-Mail', $errors, "" , "What is your email address?", "(required)" ) !!}
      {!! Form::controlTachyons('input','username', 'Username', $errors, "" , "What is your usename for login?", "(required)" ) !!}
      {!! Form::controlTachyons('password','password', 'Password', $errors, "" , "What is your password?", "(required)" ) !!}
      {!! Form::controlTachyons('password','password_confirmation', 'Password Confirmation', $errors, "" , "Confirm password..", "(required)", "" ) !!}

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