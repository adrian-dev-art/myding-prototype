<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="/css/style.css" />

  <title>Myding | HOME</title>
</head>
<body>



    @yield('topbar')

      
      
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
            <!-- <li><a href="/}}"> -->
              <img src="/Assets/Icons/account-circle-outline.png" alt="">
            </a></li>
          </ul>
        </div>
      </section>
      
      <section class="comment">
        <div class="offcanvas offcanvas-bottom " tabindex="-1" id="comment"
        aria-labelledby="comment">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasBottomLabel">Comment <span class="badge bg-secondary"></span></h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
          
          
          <div class="card-comment mb-2">
            <div class="profile-pic me-1">
              <img class="rounded-circle" src="/Assets/Images/profile-pic.png" alt="">
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
            <img src="/Assets/Images/profile-pic-me.png" alt="" class="rounded-circle">
          </div>
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2"></label>
          <button type="submit">
            <img src="/Assets/Icons/paper-plane.png" alt="">
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
                    <img src="/Assets/Icons/clippy.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/Assets/Icons/gift-outline.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/Assets/Icons/whatsapp.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/Assets/Icons/currency-eth.png" alt="">
                  </a>
                </li>
                </ul>
                <ul class="icon-person-panel">
                  <li>
                    <img class="rounded-circle" src="/Assets/Images/oRdM_95gK2s.png" alt="">
                  </li>
                  <li>
                    <img class="rounded-circle" src="/Assets/Images/oRdM_95gK2s.png" alt="">
                  </li>
                  <li>
                    <img class="rounded-circle" src="/Assets/Images/oRdM_95gK2s.png" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

    @yield('content')

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

      <!-- Optional JavaScript; choose one of the two! -->
    <script src="/js/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
 
  </body>

</html>