<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>8BitMixtape</title>
        <meta name="description" content="">    
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        @yield('head')

        {!! HTML::style('css/tachyons.min.css') !!}
        {!! HTML::style('css/custom.css') !!}

        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    </head>

  <body class="vh-100 w-100 black-50 bg-white" >




<section class="sans-serif  w-100 bg-black" >
    <header class=" w-100 tl tl-m  tc-l b--orange pa3" >
            <nav class="ttu ">
                <a class="mw10 link db db-m di-m di-l pa2 tl pink  black90 tracked-mega fontbit" href="#" title="Home">8BITMIXTAPE</a>
                <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="index.html" title="Home">/MIXTAPE_EXCHANGE</a>
                <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="eeprom.html" title="About">/COMMUNITY</a>
                <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="https://8bitmixtape.github.io/NeoWiki/" title="Store">/DOCS</a>
                <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="https://8bitmixtape.github.io/NeoDocs/" title="Store">/BUY</a>   
            </nav>
    </header>


 <div class="tc b--black-10 pa4  bg-dark-pink neoboard-gradient" >
    <div class=" tc-l">

        <div>
            <img src="https://i.imgur.com/aUPxPgg.png" class="tc tc-l" alt=""></img>
        </div>


        <div class="center mw7  mb4" data-flickity='{  }'>
            <div class="w-100 w-100-m w-100-l">
                 <img class="" src="svg/neoboard.svg"  alt="">
            </div>            
            <div class="w-100 w-100-m w-100-l">
                 Test
            </div>            
            
        </div>


        <a class="w-100 w-80-m w-20-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" href="/components/">[View Docs]</a>
        <a class="w-100 w-80-m w-20-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" href="http://github.com/8BitMixtape/">[View Source]</a>
        <a class="w-100 w-80-m w-20-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 dib" href="http://unpkg.com/tachyons/css/tachyons.min.css">[Buy Mixtape]</a>
    </div>

</div>

</section>






<section class="cf pa5 items-center  bg-white "  >
  <div class="fl w-100 w-100-m mb5-m w-40-l tc">
    <img class="" src="https://8bitmixtape.github.io/NeoWiki/images/boards/Pins_NEO-Coconut_v03.jpg"> 
  </div>

  <div class="fl w-100  w-100-m  w-60-l db tc tl-ns ph3" >
    <h1 class="f3 f1-l fw2 mb3 mt4 mt0-ns black fontbit hot-pink">Features:</h1>
    <h2 class="f5 f3-m f3-l fw1 mb4 mb5-l lh-title black-60">The key feature of the new 8Bit Mixtape is the easiness of uploading new codes using an audio communication protocol, means just playing a .wav sound file from your computer/smart phone (or walkman).
A specific bootloader (TinyAudioBoot) has to be installed on the chip to be able to do so. The bootloader is the first program that is started when you turn on your mixtape. you should see the right led blinking slowly. The bootloader is in waiting programmable mode for 5 seconds, and then starts the main program. If your board, doesnt blink for 5 seconds, maybe the bootloader has disappeared, see below for instructions on how to flash the bootloader (using ISP-programming).</h2>
    <a href="https://www.amazon.com/Apple-iPhone-Warranty-Unlocked-Cellphone/dp/B015E8UTIU/ref=sr_1_2?ie=UTF8&qid=1481330742&sr=8-2&keywords=iphone+6s" class="dib grow"></a>
  </div>

</section>





<article class="pa5 b--orange bg-black">
  <h2 class="f3 fw4 pa3 mv0 tracked-mega white fontbit tc neon-green">// MIXTAPES //</h2>
  <div class="cf pa2">
    <div class="fl w-100 w-50-m w-20-l pa2">
      <a href="https://geo.itunes.apple.com/us/album/blonde/id1146195596?at=1l3vqFJ&mt=1&app=music" class="db link dim tc">
        <img src="https://s-media-cache-ak0.pinimg.com/564x/04/10/cd/0410cde6102340c7fe6a91b3f656d0cf.jpg" alt="Frank Ocean Blonde Album Cover" class="w-100 db outline black-10"/>
        <dl class="mt2 f6 lh-copy">
          <dt class="clip">Title</dt>
          <dd class="ml0 black truncate w-100">Blonde</dd>
          <dt class="clip">Artist</dt>
          <dd class="ml0 gray truncate w-100">Frank Ocean</dd>
        </dl>
      </a>
    </div>
    <div class="fl w-100 w-50-m w-20-l pa2">
      <a href="https://geo.itunes.apple.com/us/album/jeffery/id1146718343?at=1l3vqFJ&mt=1&app=music" class="db link dim tc">
        <img src="https://s-media-cache-ak0.pinimg.com/236x/4d/99/e9/4d99e908335e9eb7c5e00838cee90dac.jpg" alt="Young Thug - Jeffery Album Cover" class="w-100 db outline black-10"/>
        <dl class="mt2 f6 lh-copy">
          <dt class="clip">Title</dt>
          <dd class="ml0 black truncate w-100 ttu">Jeffery</dd>
          <dt class="clip">Artist</dt>
          <dd class="ml0 gray truncate w-100">Young Thug</dd>
        </dl>
      </a>
    </div>
    <div class="fl w-100 w-50-m w-20-l pa2">
      <a href="https://geo.itunes.apple.com/us/album/untitled-unmastered./id1089846273?at=1l3vqFJ&mt=1&app=music" class="db link dim tc">
        <img src="https://s-media-cache-ak0.pinimg.com/236x/d4/fa/8b/d4fa8b5491e9ad9b0cac4a0fd88013a0.jpg" alt="Kendrick Lamar untitled unmastered. Album Cover" class="w-100 db outline black-10"/>
        <dl class="mt2 f6 lh-copy">
          <dt class="clip">Title</dt>
          <dd class="ml0 black truncate w-100">untitled umastered.</dd>
          <dt class="clip">Artist</dt>
          <dd class="ml0 gray truncate w-100">Kendrick Lamar</dd>
        </dl>
      </a>
    </div>
    <div class="fl w-100 w-50-m w-20-l pa2">
      <a href="https://geo.itunes.apple.com/us/album/99.9/id1092026376?at=1l3vqFJ&mt=1&app=music" class="db link dim tc">
        <img src="https://s-media-cache-ak0.pinimg.com/564x/2e/87/ba/2e87ba2edbd1e282b7da27b91a16a463.jpg" alt="Kaytranada 99%" class="w-100 db outline black-10"/>
        <dl class="mt2 f6 lh-copy">
          <dt class="clip">Title</dt>
          <dd class="ml0 black truncate w-100">99%</dd>
          <dt class="clip">Artist</dt>
          <dd class="ml0 gray truncate w-100">Kaytranada</dd>
        </dl>
      </a>
    </div>
    <div class="fl w-100 w-50-m w-20-l pa2">
      <a href="https://geo.itunes.apple.com/us/album/aa/id1067924003?at=1l3vqFJ&mt=1&app=music" class="db link dim tc">
        <img src="https://s-media-cache-ak0.pinimg.com/564x/91/65/98/9165984a9b5dc9e938ddcd71da4d39ba.jpg" alt="Baauer Aa - Album Cover" class="w-100 db outline black-10"/>
        <dl class="mt2 f6 lh-copy">
          <dt class="clip">Title</dt>
          <dd class="ml0 black truncate w-100">Aa</dd>
          <dt class="clip">Artist</dt>
          <dd class="ml0 gray truncate w-100">Baauer</dd>
        </dl>
      </a>
    </div>
   
  </div>
</article>



<section class="sans-serif pa5 mw9 bg-light-green">
  <div class="cover">
      <div class="tc-l tc-m tc">
        <h2 class="mb5 black70">a project by:</h2>
        <h1 class="fontcomic f1 f-subheadline-m tc tc-m f-headline-l mb5 purple">Center of Alternative Coconut Research</h1>
        <img class="w-100 w-40-l w-60-m tc" width="100%" src="svg/cocologo.svg" alt=""></img>
      </div>
  </div> 
</section>

<footer class="pa4 pa5-l black-70  b--black-10 bg-black white">
  <div class="mb4-l cf">



    <article class="fl w-100 dib-ns w-auto-ns mr4-m mr5-l mb4 pr2 pr0-ns">
      <h4 class="fontbit tracked neon-green">.. DOCUMENTATION</h4>
      <a class="f6 db fw6 pv1 neon-green link dim" title="Call SF" href="http://8bitmixtape.github.io/NeoDocs/">
        *** NeoDocs
      </a>
      <a class="f6 db fw6 pv1 neon-green link dim" title="Call SF" href="http://8bitmixtape.github.io/NeoWiki/">
        *** NeoWiki
      </a>
      <a class="f6 db fw6 pv1 neon-green link dim" title="Call SF" href="http://8bitmixtape.github.io/NeoWiki">
        *** Instruction Manual
      </a>
      
    </article>
    <article class="fl w-100 dib-ns w-auto-ns mr4-m mr5-l mb4 pl2 pl0-ns">
      <h4 class="fontbit tracked neon-glow neon-green">.. COMMUNITY</h4>
      <a class="f6 db fw6 pv1 neon-green link dim " title="Call SF" href="#">
        *** Forum
      </a>

      <a class="f6 db fw6 pv1 neon-green link dim" title="Call SF" href="https://www.facebook.com/groups/498008960391215/?ref=bookmarks">
        *** Facebook Group
      </a>

    </article>
    <article class="fl w-100 dib-ns w-auto-ns mr4-m mr5-l mb4 pr2 pr0-ns">
      <h4 class="fontbit tracked neon-green">.. DEVELOPERS</h4>
      <a class="f6 db fw6 pv1 neon-green link dim" title="Call SF" href="http://github.com/8bitmixtape">
        *** Github
      </a>   
      <a class="f6 db fw6 pv1 neon-green link dim" title="Call SF" href="#">
        *** Developer Maling List
      </a>        
    </article>
  </div>
  <section class="cf mb5">
    <div class="mb4 mb0-ns w-100 w-50-l fr">
      <a class="white-70 f3 f2-ns fw6 tl link dim dib pv3 mt2 mb4 mb0-l" href="mailto:hello@impossible.com" >
        cassette@8bitmixtape.com
      </a>
    </div>
    <div class="mb4 mb0-ns fl w-100 w-50-l" >
      <p class="black f4 fw6 mb2 f6 mt0">
        Sign up for our newsletter.
      </p>
      <input placeholder="Email Address" class="mw-100 w-100 w5-ns f5 input-reset ba b--black-20 pv3 ph4 border-box">
      <input type="submit" class="input-reset w-100 w-auto-ns bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray">
    </div>
  </section>
  <div class="dt dt--fixed w-100" >
    <div class="dn dtc-ns v-mid">
      <p class="f7 white-70 dib pr3 mb3">
        Copyright © Center of Alternative Coconut Research 2017
      </p>
    </div>
  </div>
  <div class="db dn-ns">
    <p class="f7 white-70 mt4 tc">
      Copyright © Center of Alternative Coconut Research 2017
    </p>
  </div>
</footer>



        
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            $('#logout').click(function(e) {
                e.preventDefault();
                $('#logout-form').submit();
            })
        });

    </script>

    @yield('scripts')

  </body>
</html>