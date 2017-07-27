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

@endsection