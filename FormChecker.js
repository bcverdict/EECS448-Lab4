var D = "";
var str = "";
var SecStr = "";
var BearQ = 0;
var BunnyQ = 0;
var PigQ = 0;
function Sub()
{
    str=document.getElementById("user").value;
    SecStr = document.getElementById("TextID").value;
    var at = str.indexOf("@");
    if(at<0)
    {
      alert("Not a proper email address!");
      return false;
    }
    if(at>str.length-6)
    {
      alert("Not a proper email address");
      return false;
    }
    if(str.substring(str.length-4,str.length)!=".com")
    {
      alert("Nope");
      return false;
    }
    if(str.length==0)
    {
      alert("Must enter an email!");
      return false;
    }
    if(SecStr.length==0)
    {
      alert("Must enter a password!");
      return false;
    }
    if(document.getElementById("TBQ").value<0)
    {
      alert("Not a proper quantity of Teddy Bears");
      return false;
    }
    if(document.getElementById("SBQ").value<0)
    {
      alert("Not a proper quantity of Stuffed Bunnies");
      return false;
    }
    if(document.getElementById("SPQ").value<0)
    {
      alert("Not a proper quantity of Stuffed Pigs");
      return false;
    }
    else
    {
      return true;
    }
}
function Reset()
{
  document.getElementById("TextID").value = "";
  document.getElementById("user").value = "";
  document.getElementById("TBQ").value = 0;
  document.getElementById("SBQ").value = 0;
  document.getElementById("SPQ").value = 0;
}
