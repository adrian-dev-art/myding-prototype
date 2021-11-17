<section class="navigation ">
  <button type="button" id="nav-btn" onClick="showNavigation()" onchange="closeNavigation()"></button>
  
  <div class="nav-panel" id="nav">
    <ul>
      <li><a href="/">
        <img src="/Assets/Icons/earth.png" alt="">
      </a></li>
      <li><a href="#search">
        <img src="/Assets/Icons/magnify.png" alt="">
      </a></li>
      <li><a href="/">
        <img src="/Assets/Icons/fire-circle.png" alt="">
      </a></li>
      <li><a href="#world">
        <img src="/Assets/Icons/bell-outline.png" alt="">
      </a></li>
      <li><a href=" /profile/{{ auth()->user()->id}} ">
        @if (auth()->user()->profile_picture)
          <img src="/Assets/Images/{{ $post->user->profile_picture }}" alt="" height="30" width="30" class="rounded-circle">
        @else
            <img src="/Assets/Icons/account-circle-outline.png" alt="" height="30" width="30" class="rounded-circle">    
        @endif
      </a></li>
    </ul>
  </div>
</section>