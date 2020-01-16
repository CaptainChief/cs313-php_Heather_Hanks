function Clicked()
{
    alert("You clicked me!!!");
}

function Change_Color()
{
    var color = document.getElementById("color").value;
    document.getElementById("div1").style.background = color;
    document.getElementById("div1").className = "";  
}