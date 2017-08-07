$(function () {

      var isuploading = false;
      var hex2wav = new Hex2wav();
      var hex_cache = {};

      var uploadHex = function(hex_string, cb)
      {
        var decoded_hex_array = hex2wav.decodeHexFile(hex_string);
        var signal = hex2wav.generateProgrammingSignal(decoded_hex_array);
        var time = (signal.length/44100)*1000;
        hex2wav.playSignal(hex2wav.audioCtx, signal);
        setTimeout(cb, time);
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

        if (isuploading) {
          dom.preventDefault();
          return;
        }

        var hex_id = (event.getAttribute('value')); 
        console.log(hex_cache[hex_id]);     

        event.innerHTML = "Uploading..";
        isuploading = true;

        uploadHex(hex_cache[hex_id], function(){
            event.innerHTML = "Retry";
            isuploading = false;
        });

        dom.preventDefault();
      }

});