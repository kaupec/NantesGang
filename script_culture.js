

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