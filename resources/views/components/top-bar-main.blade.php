<section class="topbar -top container-sm ">
        <h1 class="app">
          <a href="/">
            MYDING
          </a>
        </h1>
        
        <ul class="left-bar">
          <li class="d-flex justify-content-center"> 
            <a href="#message">
              <img src="/Assets/Icons/chat-outline.png" alt="" />
            </a>
          </li>
          <li>
            <div class="dropdown d-flex ">
              <a class="btn " href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
              </a>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/profile/{{ Auth::id() }}">My Profile</a></li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
              </ul>
            </div>
          </li>
          {{-- <li> --}}
            {{-- <a href="{{Auth::logout()}}">
              <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
            </a>
          </li> --}}
        </ul>
      </section>
      {{-- <a href="/profile/{{auth()->user()->id}}">
          <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
        </a> --}}