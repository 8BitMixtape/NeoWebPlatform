    <fieldset id="" class="ba b--transparent ph0 mh0">
      {!! Form::controlTachyons('input','name', 'Program', $errors, null , "What is your program name?", "(required)" ) !!}
      {!! Form::controlTachyons('input','variant', 'Variant', $errors, null , "What is the board variant?", "(optional)" ) !!}
      {!! Form::controlTachyons('textarea','description', 'Description', $errors, null , "What does your program do?", "(required)" ) !!}
      {!! Form::controlTachyons('input','url', 'Url', $errors, null , "Misc url..", "(optional)" ) !!}
      {!! Form::controlTachyons('textarea','hex', 'HEX', $errors, null , "HEX File", "(required)" , "mb0") !!} 
    </fieldset>
    <div class="">
      <input class="b ph3 pv2 input-reset ba b--black bg-transparent pointer f6 dib" type="submit" value="Upload">
    </div>