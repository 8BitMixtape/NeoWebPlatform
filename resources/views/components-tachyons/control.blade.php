<div class="measure {{ $class }} {{ $errors->has($name) ? 'has-error' : '' }}">
    @if($type == 'textarea')
        <label for="{{ $label }}" class="f6 b db mb2">{{ $name }} <span class="normal black-60">{{ $required }}</span></label>
        <textarea id="{{ $label }}" name="{{ $label }}" class="db border-box hover-black w-100 ba b--black-20 pa2 br2 mb2" aria-describedby="{{ $name }}-desc">{{ $value }}</textarea>    
    @elseif($type == 'file')
        <label for="{{ $label }}" class="f6 b db mb2">{{ $name }} <span class="normal black-60">{{ $required }}</span></label>
        <input id="{{ $label }}" name="{{ $label }}" class="input-reset ba b--black-20 pa2 mb2 db w-100" type="file" value="{{ $value }}" aria-describedby="{{ $name }}-desc">
    @else    
        <label for="{{ $label }}" class="f6 b db mb2">{{ $name }} <span class="normal black-60">{{ $required }}</span></label>
        <input id="{{ $label }}" name="{{ $label }}" class="input-reset ba b--black-20 pa2 mb2 db w-100" type="text" value="{{ $value }}" aria-describedby="{{ $name }}-desc">
    @endif

    @if($errors->has($name))
        {!! $errors->first($name, '<small id="{{ $label }}-desc" class="f6 black-60 db mb2">:message</small>') !!}  
    @else
        <small id="{{ $label }}-desc" class="f6 black-60 db mb2">{{ $helper }}</small>
    @endif

</div>



