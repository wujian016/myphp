function getXMLHTTPRequest(){
	var req = new XMLHttpRequest();
	return req;
}

 // var myReq = getXMLHTTPRequest();

function getServerTime(){
  var thePage = 'servertime.php';
  var myRand = parseInt(Math.random()*999999999999);
  var theURL = thePage + "?rand=" + myRand;

  myReq.open("GET",theURL,true);
  myReq.onreadystatechange = theHTTPResponse;
  myReq.send(null);

} 



function theHTTPResponse(){
	if(myReq.readyState == 4){
		if(myReq.status == 200){
			console.log(myReq.responseXML);
			var timeString = myReq.responseXML.getElementsByTagName("timestring")[0];
			console.log(timeString.childNodes[0].nodeValue);
			document.getElementById('showtime').innerHTML = timeString.childNodes[0].nodeValue;
		}else{
			document.getElementById('showtime').innerHTML = "loading...";
		}

	}
}