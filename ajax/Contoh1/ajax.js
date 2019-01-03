function loadPage(file)
{ 
	var xmlHttp;
	if (window.XMLHttpRequest)
	{
		// Instansiasi untuk IE7+, Firefox, Chrome, Opera, Safari
		xmlHttp = new XMLHttpRequest();
	}
	else
		{
			// Instansiasi untuk IE5, IE6
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	xmlHttp.onreadystatechange = function()
	{
		if (xmlHttp.readyState==4 && xmlHttp.status==200)
		{
			document.getElementById("page").innerHTML = xmlHttp.responseText;
		}
	}

	xmlHttp.open("GET",file,true);
	xmlHttp.send("");

}