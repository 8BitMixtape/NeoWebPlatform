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
      {!! Form::controlTachyons('input','variant', 'Variant', $errors, "" , "What is the board variant?", "(required)" ) !!}
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


@section("scripts")



<script>
$(function () {

      var hex2wav = new Hex2wav();
      var hex_cache = {};

      var uploadHex = function(hex_string)
      {
        var decoded_hex_array = hex2wav.decodeHexFile(hex_string);
        var signal = hex2wav.generateProgrammingSignal(decoded_hex_array);
        hex2wav.playSignal(hex2wav.audioCtx, signal);
      }

      window.downloadHex = function(dom)
      {
          var hex_id = dom.getAttribute('value');
          var hex_name = dom.getAttribute('programName');

          var normal_txt = "Download";
          var getting_txt = "Loading..";
          var failed_txt = "Retry..";

          dom.innerHTML = getting_txt;

          $.ajax({
              url: '/exchange/hex/' + hex_id,
              type: 'GET'
          })
          .done(function(data) {
            //console.log(data);
            hex_cache[hex_id] = data;
            window.openModal(hex_id, hex_name);
            dom.innerHTML = normal_txt;
            
          })
          .fail(function() {
            dom.innerHTML = failed_txt;       
          });

      }

      window.openModal = function (hex_id, hex_name)
      {
          vex.dialog.open({
            buttons: [],
            unsafeMessage: '<div class="pa4 black fontpress"><h1 class="fontbit mb4">Upload HEX</h1> <hr class=""/> <p>Program name: <b>' + hex_name + '</b></p> <p> <ul class="ma0 pl3"><li>Connect 8BitMixtapeNEO <b>Audio Programming</b> to <b>CPU speaker out</b></li> <li>Power it on</li>  <li>While its blinking, click UPLOAD</li></ul></p></div>',
            input: ' <button type="submit" onclick="window.uploadHexBtn(this, event);" value="' + hex_id + '" class=" bg-black-70 hover-bg-black input-reset w-100  b--black-10 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray tracked-mega fontbit">UPLOAD</button>'
        });
      }

      //global
      window.uploadHexBtn = function(event, dom)
      {
        var hex_id = (event.getAttribute('value')); 
        console.log(hex_cache[hex_id]);     
        uploadHex(hex_cache[hex_id]);
        dom.preventDefault();
      }

});
</script>
@endsection


