<div class="measure {{ $class }} {{ $errors->has($label) ? 'has-error' : '' }}">
    @if($type == 'textarea')
        <label for="{{ $label }}" class="f6 b db mb2">{{ $name }} <span class="normal black-60">{{ $required }}</span></label>
        {!! Form::textarea($label, $value, ['class' => 'db border-box hover-black w-100 ba b--black-20 pa2 br2 mb2', 'placeholder' => $placeholder, 'aria-describedby' => "$label-desc" ]) !!} 
    @elseif($type == 'file')
        <label for="{{ $label }}" class="f6 b db mb2">{{ $name }} <span class="normal black-60">{{ $required }}</span></label>
        {!! Form::input($type, $label, $value, ['class' => 'input-reset ba b--black-20 pa2 mb2 db w-100','type'=>'file', 'placeholder' => $placeholder, 'aria-describedby' => "$label-desc"]) !!} 
    @else    
        <label for="{{ $label }}" class="f6 b db mb2">{{ $name }} <span class="normal black-60">{{ $required }}</span></label>
        {!! Form::input($type, $label, $value, ['class' => 'input-reset ba b--black-20 pa2 mb2 db w-100','type'=>'file', 'placeholder' => $placeholder, 'aria-describedby' => "$label-desc"]) !!} 
    @endif
    @if($errors->has($label))
        {!! $errors->first($label, '<small id="{{ $label }}-desc" class="f6 red black-60 db mb2">:message</small>') !!}  
    @else
        <small id="{{ $label }}-desc" class="f6 black-60 db mb2">{{ $helper }}</small>
    @endif
</div>



