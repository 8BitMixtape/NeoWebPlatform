
<main class="pa3 bg-black-20 black-80 ">
  <div>
    <a class="ba black-70 no-underline hover-bg-black hover-white fontpress br2 b inline-flex items-center mr3 pv2 ph3" href="/member/upload"
      title="Join our Slack Channel">
        <span>
          UPLOAD MIXTAPE
        </span>
      </a>
    <a class="ba black-70 no-underline hover-bg-black hover-white fontpress br2 b inline-flex items-center mr3 pv2 ph3" href="/member/mixtape"
      title="Join our Slack Channel">
        <span>
          MY MIXTAPE
        </span>
      </a>
    <a class="ba black-70 no-underline hover-bg-black hover-white fontpress br2 b inline-flex items-center mr3 pv2 ph3" href="/member/editprofile"
      title="Join our Slack Channel">
        <span>
          EDIT PROFILE
        </span>
      </a>
    <a id="logout" class="ba black-70 no-underline hover-bg-black hover-white fontpress br2 b inline-flex items-center mr3 pv2 ph3" href="/logout"
      title="Join our Slack Channel">
        <span>
          LOGOUT
        </span>
          {!! Form::open(['url' => '/logout', 'id' => 'logout-form']) !!}{!! Form::close() !!}
      </a>      
  </div>
</main>

@push('scripts')
<script>
$('#logout').click(function(e) {
    e.preventDefault();
    $('#logout-form').submit();
});
</script>
@endpush