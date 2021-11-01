 
   
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
  