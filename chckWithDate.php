<!DOCTYPE HTML>
<html>

<head>
<script>
function showlikeReset() {
		document.getElementById("theDate").style.display = "inline";
		document.getElementById("btnVer").style.display = "inline";
		document.getElementById("lbl").style.display = "inline";
		document.getElementById("txtHint").innerHTML = "";
}

  function myFunction() {
   // document.getElementById("theDate").innerHTML = "Hello World";
  // alert(document.getElementById("theDate").value);
  
  var mystring = document.getElementById("theDate").value;
  
  if(mystring.length == 0 ){
	  
	  alert('Das Feld für das Datum ist leer');
	  return;
  }

  
  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
				document.getElementById("theDate").style.display = "none";
				document.getElementById("btnVer").style.display = "none";
				document.getElementById("lbl").style.display = "none";
            }
        };
        xmlhttp.open("GET","callFrancFinal.php?q="+mystring,true);
        xmlhttp.send();
}

</script>

<title> Katika </title>


</head>

<body>
<div id ="Enveloppe">
<section id ="Entete">
<link href ="Stylesheet.css"rel="stylesheet"type="text/css">
<img alt= "logo de l'entreprise" src="katika.png">
<h1>
</h1>
</section>

  <label id="lbl">Entrez la Date:</label> <input id = "theDate" type="text" ><br>
  
  <button id="btnVer" onclick="myFunction()"> Verifier </button >
  
  <br>
  <div id="txtHint"></div>
   
 <section id="informations">
<h4>

Email 
<p> katika@yahoo.com
</p>
</h4>
</section>
</div>
</body>

</html>