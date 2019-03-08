

hist = document.getElementById("hist");
numer = document.getElementById("numer");
biere = document.getElementById("biere");
footer = document.getElementById("footer");

function togglebiere()
{
    if (biere.hidden==true)
	{
        biere.hidden = false;
        hist.hidden = true;
        numer.hidden = true;
    }
}

function togglehist()
{
	if (hist.hidden==true)
	{
        hist.hidden = false;
        biere.hidden = true;
        numer.hidden = true;
    }
}

function togglenumer()
{
	if (numer.hidden==true)
	{
        numer.hidden = false;
        hist.hidden = true;
        biere.hidden = true;
    }
}

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