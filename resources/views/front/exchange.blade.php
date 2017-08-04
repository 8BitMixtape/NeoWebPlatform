@extends('front.template_neo') 
@section("main")
<div class="pa4">
  <h1 class="f4 bold center black mb4 fontbit center tl-ns f2-ns black lh-copy lh-copy-m lh-title-ns tc">DOWNLOAD MIXTAPE</h1>
  <div class="overflow-auto">
    <table class="f6 w-100 center fontpress ba b--black-10 bg-white black" cellspacing="0">
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
          <td class="pa3"> <button class="input-reset w-100 tracked-mega bg-black-70 b--black-10 white f6 pv2 pv2-ns ph4 ba b--black-80 bg-hover-mid-gray fontbit" onclick="window.downloadHex(this)" value="{{ $item->id }}" programName="{{ $item->name }}">Download</button> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
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
          var hex_name = dom.getAttribute('programName');

          var normal_txt = "Download";
          var getting_txt = "downloading hex..";
          var failed_txt = "retry..";

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
            input: ' <button type="submit" onclick="window.uploadHexBtn(this, event);" value="' + hex_id + '" class=" bg-black input-reset w-100  b--black-10 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray tracked-mega fontbit">UPLOAD</button>'
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


