@extends('front.template_neo') 

@section('hero')
<div class="tc b--black-10 pt4 pb2 bg-dark-pink neoboard-gradient">
  <div class=" tc-l">
    <div>
      <img src="/img/neologo_header.png" class="tc tc-l" alt=""></img>
    </div>
    <div class="center mw7 mb4">
      <div class="w-100 w-100-m w-100-l">
        <img class="" src="svg/neoboard.svg" alt="">
      </div>
      <div>
        <a class="w-100 w-80-m w-30-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" target="_blank"
          href="http://8bitmixtape.github.io/NeoWiki">[View Docs]</a>
        <a class="w-100 w-80-m w-30-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" target="_blank"
          href="http://github.com/8BitMixtape/">[View Source]</a>
        <a class="w-100 w-80-m w-30-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 dib" href="#">[Buy Mixtape]</a>
      </div>
    </div>
  </div>
</div>
@endsection 

@section('main')
<section class="cf pa5-ns items-center  bg-white ">
  <div class="fl w-100 w-100-m mt4 mt2-ns mb5-m w-40-l tc">
    <img class="" src="https://8bitmixtape.github.io/NeoWiki/images/boards/Pins_NEO-Coconut_v03.jpg">
  </div>

  <div class="fl w-100  w-100-m  w-60-l db tc tl-ns ph3">
    <h1 class="f3 f1-l fw2 mb3 mt4 mt0-ns black fontbit lh-copy hot-pink">Features:</h1>
    <h2 class="f5 f4-m f4-l fw1 mb4 mb5-l lh-title black-60 tl">The key feature of the new 8Bit Mixtape is the easiness of uploading new codes using an audio communication protocol,
      means just playing a .wav sound file from your computer/smart phone (or walkman). A specific bootloader (TinyAudioBoot)
      has to be installed on the chip to be able to do so. The bootloader is the first program that is started when you turn
      on your mixtape. you should see the right led blinking slowly. The bootloader is in waiting programmable mode for 5
      seconds, and then starts the main program. If your board, doesnt blink for 5 seconds, maybe the bootloader has disappeared,
      see below for instructions on how to flash the bootloader (using ISP-programming).</h2>
    <a href="https://www.amazon.com/Apple-iPhone-Warranty-Unlocked-Cellphone/dp/B015E8UTIU/ref=sr_1_2?ie=UTF8&qid=1481330742&sr=8-2&keywords=iphone+6s"
      class="dib grow"></a>
  </div>

</section>

<div class="pa4">
  <h1 class="f4 bold center black  fontbit center tl-ns f2-ns black">DOWNLOAD MIXTAPE</h1>
  <div class="overflow-auto">
    <table class="f6 w-100 center fontbit tracked-mega bg-black white" cellspacing="0">
      <thead>
        <tr class="stripe-dark">
          <th class="fw6 tl pa3 bg-white">Name</th>
          <th class="fw6 tl pa3 bg-white">Username</th>
          <th class="fw6 tl pa3 bg-white">Email</th>
          <th class="fw6 tl pa3 bg-white">ID</th>
        </tr>
      </thead>
      <tbody class="lh-copy">
        <tr class="stripe-dark">
          <td class="pa3">Hassan Johnson</td>
          <td class="pa3">@hassan</td>
          <td class="pa3">hassan@companywithalongdomain.co</td>
          <td class="pa3">14419232532474</td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">Taral Hicks</td>
          <td class="pa3">@hicks</td>
          <td class="pa3">taral@companywithalongdomain.co</td>
          <td class="pa3">72326219423551</td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">Tyrin Turner</td>
          <td class="pa3">@tt</td>
          <td class="pa3">ty@companywithalongdomain.co</td>
          <td class="pa3">92325170324444</td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">Oliver Grant</td>
          <td class="pa3">@oli</td>
          <td class="pa3">oliverg@companywithalongdomain.co</td>
          <td class="pa3">71165170352909</td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">Dean Blanc</td>
          <td class="pa3">@deanblanc</td>
          <td class="pa3">dean@companywithalongdomain.co</td>
          <td class="pa3">71865178111909</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<section class="sans-serif pa5 mw9 bg-light-green">
  <div class="cover">
    <div class="tc-l tc-m tc">
      <h2 class="mb5 black70">a project by:</h2>
      <h1 class="fontcomic f2 f-subheadline-m tc tc-m f-headline-l mb5 purple">Center of Alternative Coconut Research</h1>
      <img class="w-100 w-40-l w-60-m tc" width="100%" src="svg/cocologo.svg" alt=""></img>
    </div>
  </div>
</section>
@endsection