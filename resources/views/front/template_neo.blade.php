<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>8BitMixtape</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" href="apple-touch-icon.png"> @yield('head') {!! HTML::style('css/tachyons.min.css') !!} {!! HTML::style('css/custom.css') !!}

  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</head>

<body class="w-100 black-50 bg-white">

  <section class="sans-serif  bg-black">
    <header class=" w-100 tl tl-m  tc-l b--orange pa3">
      <nav class="ttu ">
        <a class="menushadow mw10 link db db-m di-m di-l pa2 tl light-purple  black90 tracked-mega fontbit" href="/" title="Home">8BITMIXTAPE</a>
        <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="/exchange" title="Home">/MIXTAPE_EXCHANGE</a>
        <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="#" title="About">/COMMUNITY</a>
        <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="https://8bitmixtape.github.io/NeoWiki/#/Home"
          title="Store">/DOCS</a>
        <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="#"
          title="Store">/BUY</a>
        <a class="mw10 link db db-m di-m di-l pa2 tl neon-green dim black90 tracked-mega fontbit" href="/login"
          title="Store">/LOGIN</a>
          
      </nav>
    </header>
    @yield('hero')
  </section>

  @yield('main')

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
      <div class="mb4 mb0-ns w-100 w-50-l tc fr">
        <a class="white-70 f5 f3-ns fw6 tl link dim dib pv3 mt2 mb4 mb0-l" href="mailto:hello@impossible.com">
        cassette@8bitmixtape.com
      </a>
      </div>
      <div class="mb4 mb0-ns fl w-100 w-50-l">
        <p class="black f4 fw6 mb2 f6 mt0">
          Sign up for our newsletter.
        </p>
        <input placeholder="Email Address" class="mw-100 w-100 w5-ns f5 input-reset ba b--black-20 pv3 ph4 border-box">
        <input type="submit" value="Subscribe"  class="input-reset w-100 w-auto-ns bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray">
      </div>
    </section>
    <div class="dt dt--fixed w-100">
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
  {!! HTML::script('/js/hex2wav.js') !!} 

  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(function () {

      $('#logout').click(function (e) {
        e.preventDefault();
        $('#logout-form').submit();
      })
      
    });
  </script>

  @yield('scripts')

</body>

</html>