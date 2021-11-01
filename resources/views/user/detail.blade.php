@extends('layout.main')
@section('content')

<h1>kamu di detail</h1>

    @foreach ($posts as $post)
    <div id="card" class="container d-flex justify-content-center align-items-center">
      
      <!-- card-content -->
      <section class="card-post shadow-lg mb-3 mt-3">
        <div class="top-card container-sm">
          <!-- Bagian Kiri Card -->
          <ul class="top-card-left ">
            <li >
              <a href="#profile" >
                <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
              </a>
            </li>
            <li class="mx-2">
              <a href="#profile">
                <p class="profile-name">
                  {{ $post->user->name}}
                </p>
              </a>
              <p class="text-time">{{$post->created_at->diffForHumans() }} at {{$post->place}}</p>
              
            </li>
          </ul>
          
          <!-- Bagian Kanan Card -->
          <div class="right-card-post">
            <a href="#detail">
              <img src="/Assets/Icons/more-btn.png" alt="" />
            </a>
          </div>
        </div>
        
        <!-- Bagian gambar di card -->
        <div class="image-card">
          <img src="/Assets/Images/img-post.png" alt="" />
        </div>
        
        <!-- Bagian Content kaya deskripsi -->
        <div class="description-card container">
          {{-- <a href="#profile">
            <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
          </a> --}}
          <h6 class="title m-1"><?= $post->title; ?></h6>
          </div>
          
          <div class="card-panel container-sm mb-2">
            <ul class="icon-card">
              <li>
                <button type="button" class="btn btn-category">
                  {{ $post->category->category_name }}
                </button>
              </li>
              <li>
                <button href="#emot" onclick="react()" >
                  <img id="emot" src="/Assets/Icons/emoticon-outline.png" alt="" />
                </button>
              </li>
              <li>
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#comment"
                aria-controls="comment">
                <img src="/Assets/Icons/comment-quote-outline.png" alt="" />
              </button>
            </li>
            <li>
              <a href="/post/{{$post->id}}"  >
                <img id="detail" src="/Assets/Icons/eye-outline.png" alt="" />
              </a>
            </li>
            <li>
              <button type="button" data-bs-toggle="offcanvas" data-bs-target="#share"
              aria-controls="share">
              <img src="/Assets/Icons/share-all-outline.png" alt="" />
            </button>
          </li>
        </ul>
      </div>
    </section>
    
  </div>
  @endforeach
  
  <!-- Optional JavaScript; choose one of the two! -->
  
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"></script>
  
  
  <script>


    // function myFunction() {
    //   var desc = document.getElementById("desc-post");
    //   var btnText = document.getElementById("myBtn");

    //   if (desc.style.display === "none") {
    //     desc.style.display = "inline";
    //     btnText.innerHTML = "less";
    //   } else {
    //     btnText.innerHTML = "more";
    //     desc.style.display = "none";
    //   }
    // }

    function showNavigation() {
      var nav = document.getElementById("nav")
      if (nav.style.display === "none") {
        nav.style.bottom = "1vh"
        nav.style.display = "block"
      } else {
        nav.style.display = "-5vh"
        nav.style.display = "none"
      }
    }



    function react() {
      var x = document.getElementById("emot")
      var smile = "/Assets/Icons/emoticon-white.png"
      var sad = "/Assets/Icons/emoticon-confused-white.png"

      if (x.src = smile) {
        x.src = sad
      } else {
        x.src = smile
      }
    }
  </script>

@endsection()