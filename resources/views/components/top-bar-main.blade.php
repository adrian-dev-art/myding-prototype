<section class="topbar -top container-sm ">
        <h1 class="app">
          <a href="/">
            MYDING
          </a>
        </h1>
        
        <ul class="left-bar">
          <li>
            <a href="#message">
              <img src="/Assets/Icons/chat-outline.png" alt="" />
            </a>
          </li>
          <li>
          <a href="/profile/{{auth()->user()->id}}">
              <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
            </a>
          </li>
          <li>
          {{-- <a href="{{Auth::logout()}}">
              <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
            </a>
          </li> --}}
        </ul>
      </section>