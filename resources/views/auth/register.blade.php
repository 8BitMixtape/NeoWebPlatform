@extends('front.template_neo')

@section('main')


<article class="pa4 black-80">
  {!! Form::open(['url' => 'register']) !!}	
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="ph0 mh0 fw6 clip">Sign Up</legend>

      {!! Form::controlTachyons('input','email', 'E-Mail', $errors, "" , "What is your email address?", "(required)" ) !!}
      {!! Form::controlTachyons('input','username', 'Username', $errors, "" , "What is your usename for login?", "(required)" ) !!}
      {!! Form::controlTachyons('input','password', 'Password', $errors, "" , "What is your password?", "(required)", "" ) !!}

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