@extends('front.template_neo') 

@section('hero')
<div class="tc b--black-10 pt4 pb2 bg-dark-pink neoboard-gradient">
  <div class=" tc-l">
    <div>
      <img src="/img/neologo_header.png" class="tc tc-l" alt=""></img>
    </div>
    <div class="center mw7 mb4">
      <div class="center w-100 w-90-m w-100-l">
        <img class="" src="svg/neoboard.svg" alt="">
      </div>
      <div>
        <a class="mw5 w-100 w-80-m w-30-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" target="_blank"
          href="http://8bitmixtape.github.io/NeoWiki">[View Docs]</a>
        <a class="mw5 w-100 w-80-m w-30-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 mb3 dib" target="_blank"
          href="http://github.com/8BitMixtape/">[View Source]</a>
        <a class="mw5 w-100 w-80-m w-30-l ba b--white no-underline tracked fontbit dim pa3 br2 bg-purple white mr3 dib" href="#">[Buy Mixtape]</a>
      </div>
    </div>
  </div>
</div>
@endsection 

@section('main')
<section class="cf pa5-ns items-center  bg-white ">
  <div class="fl w-100 w-100-m mt4 mt2-ns mb5-m w-60-l tc pa2">
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/NthrxNBOH2c' frameborder='0' allowfullscreen></iframe></div>
  </div>

  <div class="fl w-100  w-100-m  w-40-l db tc tl-ns ph3">
    <h1 class="f3 f1-l fw2 mb3 mt4 mt0-ns black fontbit lh-copy hot-pink">Features:</h1>
    <p class="f5 f4-m f4-l fw1 mb4 mb2-l lh-title black-80 tl fontpress">The key feature of the new 8Bit Mixtape is the easiness of uploading new codes using an audio communication protocol,
      means just playing a .wav sound file from your computer/smart phone (or walkman). A specific bootloader (TinyAudioBoot)
      has to be installed on the chip to be able to do so. The bootloader is the first program that is started when you turn
      on your mixtape. you should see the right led blinking slowly.</p> 
  </div>

</section>


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
        <tr class="stripe-dark">
          <td class="pa3">testComponents-Advanced</td>
          <td class="pa3">Test all the components of your hardware</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"> <button value="">download</button> </td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">05092008_ChrisMicro_TraschMetalResearchGroup</td>
          <td class="pa3">A claasiic by ChrisMicro</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"><button value="">download</button></td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">NEO_8Pixel_oneliners</td>
          <td class="pa3">Algorithmic sounds, inspired by Viznut. Updated the classic OneLiners to the 8Bit Mixtape NEO, turn on/off visuals.</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"><button value="">download</button></td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">Attiny SoundPitix-VCO NEO</td>
          <td class="pa3">A simple VCO, slightly outdated software syhnth, but cool with visuals now. Board needs to be restarted again after upload to work properly.</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"><button value="">download</button></td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">IrqPcControlSynth 054</td>
          <td class="pa3">PC controlled synthesizer with two LFO and one HFO To control the synth you need this java application. Download Main_IrqPcControllerForSynth.jar</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"><button value="">download</button></td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">Family Mart Chime</td>
          <td class="pa3">Because we can... Greetings from Taipei!</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"><button value="">download</button></td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">One Pixel Board</td>
          <td class="pa3">Ada_1Pixel_oneliners</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"><button value="">download</button></td>
        </tr>
        <tr class="stripe-dark">
          <td class="pa3">Gär Lämpli - ギャランプリー - 起酵燈仔</td>
          <td class="pa3">Gär Lämpli - ギャランプリー</td>
          <td class="pa3">8BitMixtapeNEO</td>
          <td class="pa3"><button value="">download</button></td>
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