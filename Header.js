function pop()
{
    var pop = document.getElementById("form");
    pop.style.left = "50%";
}

function close()
{
    var close = document.getElementById("form");
    if(close.style.left == "50%")
    {
        close.style.left = "100%";
        close.style.transitionDuration = "0.3s";
        close.style.transitionDelay = "ease";
    }
    else
    {
        close.style.left = "50%";
    }
}