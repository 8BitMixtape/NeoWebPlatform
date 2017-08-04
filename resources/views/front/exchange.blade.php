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
          <td class="pa3"> <button onclick="window.uploadHexBtn(this)" value="{{ $item->id }}">download</button> </td>
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

      hexUploading = false;
      hex2wav = new Hex2wav();

      var hex_cache = {};

      var uploadHex = function(hex_string)
      {
        var decoded_hex_array = hex2wav.decodeHexFile(hex_string);
        var signal = hex2wav.generateProgrammingSignal(decoded_hex_array);
        hex2wav.playSignal(hex2wav.audioCtx, signal);
      }

      var getAndUploadHex = function(hex_id, dom)
      {
            var normal_txt = "download";
            var getting_txt = "getting hex..";
            hexUploading = true;
            dom.innerHTML = getting_txt;
            
            //check if cached
            if (hex_cache[hex_id]){
              console.log('cached');
              uploadHex(hex_cache[hex_id]);
              hexUploading = false;
              dom.innerHTML = normal_txt;
              return;
            }

            $.ajax({
                url: '/exchange/hex/' + hex_id,
                type: 'GET'
            })
            .done(function(data) {
              hex_cache[hex_id] = data;
              uploadHex(data);
              hexUploading = false;
              dom.innerHTML = normal_txt;
            })
            .fail(function() {
              hexUploading = false;
              dom.innerHTML = normal_txt;              
            });
      }

      //global
      window.uploadHexBtn = function(event)
      {
        var hex_id = (event.getAttribute('value'));
        if (!hexUploading) {
          getAndUploadHex(hex_id, event);
        }else{
          console.log("already uploading");
        }
      }

});
</script>
@endsection


