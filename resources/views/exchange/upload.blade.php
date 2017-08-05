@extends('front.template_neo') 

@section("usermenu")
  @if(session('statut') !== 'visitor')
    @include("exchange.user_menu")
  @endif
@endsection

@section("main")
<div class="pa4">
  <h1 class="f4 bold center black mb4 fontbit center  tl-ns f2-ns black lh-copy lh-copy-m lh-title-ns tc">UPLOAD MIXTAPE</h1>
  


<form class="black-80">

  <fieldset id="" class="ba b--transparent ph0 mh0">
    <div class="measure mb4">
      <label for="program" class="f6 b db mb2">Program <span class="normal black-60">(required)</span></label>
      <input id="program" class="input-reset ba b--black-20 pa2 mb2 db w-100" type="text" aria-describedby="program-desc">
      <small id="program-desc" class="f6 black-60 db mb2">What is your program name?</small>
    </div>

    <div class="measure mb4">
      <label for="variant" class="f6 b db mb2">Variant <span class="normal black-60">(required)</span></label>
      <input id="variant" class="input-reset ba b--black-20 pa2 mb2 db w-100" type="text" aria-describedby="variant-desc">
      <small id="variant-desc" class="f6 black-60 db mb2">What is the board variant?</small>
    </div>

    <div class="measure mb4">
      <label for="description" class="f6 b db mb2">Description <span class="normal black-60">(required)</span></label>
      <textarea id="description" name="description" class="db border-box hover-black w-100  ba b--black-20 pa2 br2 mb2" aria-describedby="description-desc"></textarea>
      <small id="description-desc" class="f6 black-60">What does your program do?</small>
    </div>

    <div class="measure mb4">
      <label for="url" class="f6 b db mb2">URL <span class="normal black-60">(optional)</span></label>
      <input id="url" class="input-reset ba b--black-20 pa2 mb2 db w-100" type="text" aria-describedby="url-desc">
      <small id="url-desc" class="f6 black-60 db mb2">Misc url..</small>
    </div>

    <div class="measure">
      <label for="hexfile" class="f6 b db mb2">Hex File <span class="normal black-60">(required)</span></label>
      <input id="hexfile" class="input-reset ba b--black-20 pa2 mb2 db w-100" type="file" aria-describedby="hexfile-desc">
      <small id="hexfile-desc" class="f6 black-60 db mb2">File description.</small>
    </div>

  </fieldset>

  <div class="">
    <input class="b ph3 pv2 input-reset ba b--black bg-transparent pointer f6 dib" type="submit" value="Upload">
  </div>

</form>
  
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


