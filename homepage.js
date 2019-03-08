/***TOPBUTTON***/
window.onscroll = function() {scrollFunction();};

document.getElementById("myBtn").onclick = function() {topFunction();};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}