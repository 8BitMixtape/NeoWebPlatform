  <div class="overflow-auto">
    <table class="f6 w-100 center fontpress ba b--black-10 bg-white black" cellspacing="0">
      <thead>
        <tr class="white bg-black ">
          <th class="fw6 tl pa3 ">NAME</th>
          <th class="fw6 tl pa3 ">DESCRIPTION</th>
          <th class="fw6 tl pa3 ">VARIANT</th>
          <th class="fw6 tl pa3 ">USER</th>          
          <th class="fw6 tl pa3 ">DOWNLOAD</th>
        </tr>
      </thead>
      <tbody class="lh-copy">
        @foreach($mixtapes as $item)
        <tr class="stripe-dark">
          <td class="pa3 b">{{ $item->name }}</td>
          <td class="pa3">{{ $item->description }}</td>
          <td class="pa3">{{ $item->variant }}</td>
          <td class="pa3">{{ $item->user->username }}</td>          
          <td class="pa3"> <button class="input-reset hover-bg-black w-100 tracked-mega bg-black-70 b--black-10 white f6 pv2 pv2-ns ph4 ba b--black-80 bg-hover-mid-gray fontbit" onclick="window.downloadHex(this)" value="{{ $item->id }}" programName="{{ $item->name }}">Download</button> </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt2">
      {{ $mixtapes->links('exchange.pagination') }}
    </div>

  </div>