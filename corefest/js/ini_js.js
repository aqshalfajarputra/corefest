function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function load() {
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
      $("header").addClass("smaller");
    }
    else {
      $("header").removeClass("smaller");
    }
  });
}
