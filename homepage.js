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

/* Jawn animation */
$(function() {
  let welcomeSection = $('.welcome-section'),
      enterButton = welcomeSection.find('.enter-button'),
      body=document.getElementsByTagName('body');

      setTimeout(function() {
          welcomeSection.removeClass('content-hidden');
      },800);

      enterButton.on('click', function(e) {
          e.preventDefault();
          welcomeSection.addClass('content-hidden').fadeOut();
          body.style.background='none';
      });
});

document.getElementsByClassName("enter-button")[0].addEventListener('click',()=>{
  document.getElementsByClassName('welcome-section')[0].style.display='none';
  document.getElementsByClassName('wrapper')[0].style.display='block';
})