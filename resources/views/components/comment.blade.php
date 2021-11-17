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
            <img src="/Assets/Images/avatar.png" alt="" height="40" width="40" class="rounded-circle mx-5">         
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
      @if (auth()->user()->profile_picture )
          <img src="/Assets/Images/{{ auth()->user()->profile_picture }}" alt="" height="40" width="40" class="rounded-circle ">
        @else
            <img src="/Assets/Images/avatar.png" alt="" height="40" width="40" class="rounded-circle">    
        @endif
    </div>
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2"></label>
    <button type="submit">
      <img src="/Assets/Icons/paper-plane.png" alt="">
    </button>
  </form>
</section>