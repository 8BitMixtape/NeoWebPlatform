@extends('front.template_neo') 
@section("main")
<div class="pa4">
  <h1 class="f4 bold center black mb4 fontbit center tl-ns f2-ns black lh-copy lh-copy-m lh-title-ns tc">DOWNLOAD MIXTAPE</h1>
  <div class="overflow-auto">
    <table class="f6 w-100 center fontpress bg-green white" cellspacing="0">
      <thead>
        <tr class="white bg-black ">
          <th class="fw6 tl pa3 ">NAME</th>
          <th class="fw6 tl pa3 ">DESCRIPTION</th>
          <th class="fw6 tl pa3 ">VARIANT</th>
          <th class="fw6 tl pa3 ">DOWNLOAD</th>
        </tr>
      </thead>
      <tbody class="lh-copy">
        @foreach($mixtapes as $item)
        <tr class="stripe-dark">
          <td class="pa3">{{ $item->name }}</td>
          <td class="pa3">{{ $item->description }}</td>
          <td class="pa3">{{ $item->variant }}</td>
          <td class="pa3"> <button onclick="window.downloadHex(this)" value="{{ $item->id }}">download</button> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


<div id="uploadPrompt" style="display: none;">
<h1 class="fontbit">Upload</h1>
<p>connect 8bitmixtapeneo, power it on, then click play hex</p>
  <input type="submit" value="Play HEX" onclick="event.preventDefault();" class="input-reset w-100  bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray">
</div>

@endsection


@section("scripts")
<script>
$(function () {

      hex2wav = new Hex2wav();
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

          var normal_txt = "download";
          var getting_txt = "downloading hex..";
          var failed_txt = "retry..";

          dom.innerHTML = getting_txt;

          $.ajax({
              url: '/exchange/hex/' + hex_id,
              type: 'GET'
          })
          .done(function(data) {
            hex_cache[hex_id] = data;
            window.openModal(hex_id);
            dom.innerHTML = normal_txt;
            
          })
          .fail(function() {
            dom.innerHTML = failed_txt;       
          });

      }

      window.openModal = function (hex_id)
      {
          vex.dialog.open({
            buttons: [],
            unsafeMessage: '<div class="pa2"><h1 class="fontbit">Upload HEX</h1> <p>Connect 8BitMixtapeNEO, power it on, then click UPLOAD</p></div>',
            input: ' <button type="submit" onclick="window.uploadHexBtn(this, event);" value="' + hex_id + '" class="input-reset w-100  bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray">UPLOAD</button>'
        });
      }

      //global
      window.uploadHexBtn = function(event, dom)
      {
        var hex_id = (event.getAttribute('value'));      
        uploadHex(hex_cache[hex_id]);
        dom.preventDefault();
      }

});
</script>
@endsection


