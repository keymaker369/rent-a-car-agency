function ajaxFunction()
{
var xmlHttp;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
	//var zaPronaci = "zika";
	var zaPronaci = document.getElementById("textID").value;
	xmlHttp.open("GET","zauzetost.php?zaPronaci="+zaPronaci,true);
  xmlHttp.send(null);
  xmlHttp.onreadystatechange=function()
    {
    if(xmlHttp.readyState==4)
      {
      document.getElementById("vreme").value=xmlHttp.responseText;
      }
    }

}