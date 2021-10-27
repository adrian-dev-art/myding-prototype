<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />

  <title>Myding | HOME</title>
</head>
<body>


      
  
  
  <!-- topbar -->
  <section class="topbar -top container-sm shadow-lg rounded-bottom">
    <h1 class="app">MYDING</h1>
    
    <ul class="left-bar">
      <li>
        <a href="#message">
          <img src="Assets/Icons/chat-outline.png" alt="" />
        </a>
      </li>
      <li>
        <a href="#profile">
          <img class="profile-pic" src="Assets/Images/profile-pic-me.png" alt="" />
        </a>
      </li>
    </ul>
  </section>
  
  <section class="navigation ">
    <button type="button" id="nav-btn" onClick="showNavigation()" onchange="closeNavigation()"></button>
    
    <div class="nav-panel" id="nav">
      <ul>
        <li><a href="#world">
          <img src="Assets/Icons/earth.png" alt="">
        </a></li>
        <li><a href="#search">
          <img src="Assets/Icons/magnify.png" alt="">
        </a></li>
        <li><a href="#world">
          <img src="Assets/Icons/fire-circle.png" alt="">
        </a></li>
        <li><a href="#world">
          <img src="Assets/Icons/bell-outline.png" alt="">
        </a></li>
        <li><a href="#world">
          <img src="Assets/Icons/account-circle-outline.png" alt="">
        </a></li>
      </ul>
    </div>
  </section>
  
  <section class="comment">
    <div class="offcanvas offcanvas-bottom " tabindex="-1" id="comment"
    aria-labelledby="comment">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasBottomLabel">Comment <span class="badge bg-secondary"></span></h5>
      <!-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
    </div>
    <div class="offcanvas-body small">
      
      
      <div class="card-comment mb-2">
        <div class="profile-pic me-1">
          <img class="rounded-circle" src="Assets/Images/profile-pic.png" alt="">
        </div>
        <div class="card-content-comment">
          <div class="top-card-comment ">
            <h5>Adrian</h5>
            <p class="card-text  text-end"><small class="text-muted">3 mins ago</small></p>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, </p>
        </div>
      </div>
      
      
      
    </div>
    
    <form action="" class="comment-form mb-3"> 
      <div class="profile-pic">
        <img src="Assets/Images/profile-pic-me.png" alt="" class="rounded-circle">
      </div>
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2"></label>
      <button type="submit">
        <img src="Assets/Icons/account-circle-outline.png" alt="">
      </button>
    </form>
  </section>
  
  <section class="share">
    <div class="offcanvas offcanvas-bottom share-card" tabindex="-1" id="share" aria-labelledby="share">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="share">Share</h5>
      </div>
      <div class="offcanvas-body small">
        <div class="share-panel">
          <ul class="icon-panel-share">
            <li>
              <a href="">
                <img src="Assets/Icons/clippy.png" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img src="Assets/Icons/gift-outline.png" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img src="Assets/Icons/whatsapp.png" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img src="Assets/Icons/currency-eth.png" alt="">
              </a>
            </li>
            </ul>
            <ul class="icon-person-panel">
              <li>
                <img class="rounded-circle" src="Assets/Images/oRdM_95gK2s.png" alt="">
              </li>
              <li>
                <img class="rounded-circle" src="Assets/Images/oRdM_95gK2s.png" alt="">
              </li>
              <li>
                <img class="rounded-circle" src="Assets/Images/oRdM_95gK2s.png" alt="">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-- <section class="react">
      <div class="react-panel">
        <ul>
          <li>
            <img src="Assets/Icons/thumb-up-outline.png" alt="">
          </li>
          <li>
            <img src="Assets/Icons/thumb-down-outline.png" alt="">
          </li>
          <li>
            <img src="Assets/Icons/clover.png" alt="">
          </li>
          <li>
            <img src="Assets/Icons/emoticon.png" alt="">
          </li>
          <li>
            <img src="Assets/Icons/emoticon-confused-outline.png" alt="">
          </li>
        </ul>
      </div>
    </section> -->
    
    
    
    @foreach ($posts as $post)
    <div id="card" class="container d-flex justify-content-center align-items-center">
      
      <!-- card-content -->
      <section class="card-post shadow-lg mb-3 mt-3">
        <div class="top-card container-sm">
          <!-- Bagian Kiri Card -->
          <ul class="top-card-left ">
            <li >
              <a href="#profile" >
                <img class="profile-pic" src="Assets/Images/profile-pic-me.png" alt="" />
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
              <img src="Assets/Icons/more-btn.png" alt="" />
            </a>
          </div>
        </div>
        
        <!-- Bagian gambar di card -->
        <div class="image-card">
          <img src="Assets/Images/img-post.png" alt="" />
        </div>
        
        <!-- Bagian Content kaya deskripsi -->
        <div class="description-card container">
          <a href="#profile">
            <img class="profile-pic" src="Assets/Images/profile-pic-me.png" alt="" />
          </a>
          <h6 class="title m-1">
            <?= $post->title; ?>
              <button onclick="myFunction()" id="myBtn" class="fs-6">more</button>
            </h6>
          </div>
            <p id="desc-post" class="description-post container mb-3"> 
              {{$post->description}}
            </p>
          
          <div class="card-panel container-sm mb-2">
            <ul class="icon-card">
              <li>
                <button type="button" class="btn btn-category">
                  {{ $post->category->category_name }}
                </button>
              </li>
              <li>
                <button href="#emot" onclick="react()" >
                  <img id="emot" src="Assets/Icons/emoticon-outline.png" alt="" />
                </button>
              </li>
              <li>
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#comment"
                aria-controls="comment">
                <img src="Assets/Icons/comment-quote-outline.png" alt="" />
              </button>
            </li>
            <li>
              <button type="button" data-bs-toggle="offcanvas" data-bs-target="#share"
              aria-controls="share">
              <img src="Assets/Icons/share-all-outline.png" alt="" />
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


    function myFunction() {
      var desc = document.getElementById("desc-post");
      var btnText = document.getElementById("myBtn");

      if (desc.style.display === "none") {
        desc.style.display = "inline";
        btnText.innerHTML = "less";
      } else {
        btnText.innerHTML = "more";
        desc.style.display = "none";
      }
    }

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
      var smile = "Assets/Icons/emoticon-white.png"
      var sad = "Assets/Icons/emoticon-confused-white.png"

      if (x.src = smile) {
        x.src = sad
      } else {
        x.src = smile
      }
    }
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

</html>