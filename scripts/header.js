window.onload = function () {
  header = document.getElementById("float-bar");
  searchbutton = document.getElementById("search-button");
  if (window.innerHeight < 700) {
      header.classList.add("smaller");
      document.getElementById("search-box").classList.add("smaller");
  }

  
  scroll();
  window.addEventListener('scroll', scroll);
}

 function scroll(e){
    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
    shrinkOn = 40;
    if (distanceY > shrinkOn) {
     if(!header.classList.contains("smaller")) {
      header.classList.add("smaller");
      document.getElementById("search-box").classList.add("smaller");
      searchbutton.innerHTML = ""
      }
    } 
    else {
      if (header.classList.contains("smaller")) {
        header.classList.remove("smaller");
        document.getElementById("search-box").classList.remove("smaller");
        searchbutton.innerHTML = "Search"
      }
    }
  }
