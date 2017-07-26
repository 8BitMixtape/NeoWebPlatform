@extends('front.template_neo')

@section('hero')
  <div class="tc b--black-10 pa4 bg-dark-pink vh-100-l neoboard-gradient">
    <div class=" tc-l">
      <div>
        <img src="https://i.imgur.com/aUPxPgg.png" class="tc tc-l" alt=""></img>
      </div>
      <div class="center mw7  mb4">
        <div class="w-100 w-100-m w-100-l">
          <img class="" src="svg/neoboard.svg" alt="">
        </div>
      </div>
      <a class="w-100 w-80-m w-20-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" href="/components/">[View Docs]</a>
      <a class="w-100 w-80-m w-20-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" href="http://github.com/8BitMixtape/">[View Source]</a>
      <a class="w-100 w-80-m w-20-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 dib" href="http://unpkg.com/tachyons/css/tachyons.min.css">[Buy Mixtape]</a>
    </div>
  </div>
@endsection

@section('main')

  <section class="cf pa5 items-center  bg-white ">
    <div class="fl w-100 w-100-m mb5-m w-40-l tc">
      <img class="" src="https://8bitmixtape.github.io/NeoWiki/images/boards/Pins_NEO-Coconut_v03.jpg">
    </div>

    <div class="fl w-100  w-100-m  w-60-l db tc tl-ns ph3">
      <h1 class="f3 f1-l fw2 mb3 mt4 mt0-ns black fontbit lh-copy hot-pink">Features:</h1>
      <h2 class="f5 f3-m f3-l fw1 mb4 mb5-l lh-title black-60">The key feature of the new 8Bit Mixtape is the easiness of uploading new codes using an audio communication protocol,
        means just playing a .wav sound file from your computer/smart phone (or walkman). A specific bootloader (TinyAudioBoot)
        has to be installed on the chip to be able to do so. The bootloader is the first program that is started when you
        turn on your mixtape. you should see the right led blinking slowly. The bootloader is in waiting programmable mode
        for 5 seconds, and then starts the main program. If your board, doesnt blink for 5 seconds, maybe the bootloader
        has disappeared, see below for instructions on how to flash the bootloader (using ISP-programming).</h2>
      <a href="https://www.amazon.com/Apple-iPhone-Warranty-Unlocked-Cellphone/dp/B015E8UTIU/ref=sr_1_2?ie=UTF8&qid=1481330742&sr=8-2&keywords=iphone+6s"
        class="dib grow"></a>
    </div>

  </section>





  <article class="pa5 b--orange bg-black">
    <h2 class="f3 fw4 pa3 mv0 tracked-mega white fontbit tc neon-green">// DEMO PROGRAM \\</h2>
    <div class="cf pa2">
      <div class="fl w-100 w-50-m w-20-l pa2">
        <a href="https://geo.itunes.apple.com/us/album/blonde/id1146195596?at=1l3vqFJ&mt=1&app=music" class="db link dim tc">
        <img src="/img/noise.png"" alt="Frank Ocean Blonde Album Cover" class="w-100 db outline black-10"/>
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
        <img src="/img/noise.png"" alt="Young Thug - Jeffery Album Cover" class="w-100 db outline black-10"/>
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
        <img src="/img/noise.png"" alt="Kendrick Lamar untitled unmastered. Album Cover" class="w-100 db outline black-10"/>
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
        <img src="/img/noise.png" alt="Kaytranada 99%" class="w-100 db outline black-10"/>
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
        <img src="/img/noise.png"" alt="Baauer Aa - Album Cover" class="w-100 db outline black-10"/>
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
@endsection
