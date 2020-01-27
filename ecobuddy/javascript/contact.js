//Get the button:
topbutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topbutton.style.display = "block";
  } else {
    topbutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


var sendcontact=document.getElementById("sendcontact");
sendcontact.addEventListener("click", sendprocess, false);

function updatecontact(e){
	//takes all variables and sends it to the php script
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(e){     
	console.log(xhr.readyState);     
	


	var firstname = document.forms[0]["firstname"];
    var lastname = document.forms[0]["lastname"];
    var email = document.forms[0]["email"];
    var interest = document.forms[0]["interest"];
    var role = document.forms[0]["role"];
    var comments = document.forms[0]["comments"];

    console.log(firstname.value, lastname.value, email.value, interest.value, role.value, comments.value);

    xhr.open("POST", "/immnewsnetwork/process-contact.php", true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
    xhr.send("firstname="+firstname.value+"lastname="+lastname.value+"&email="+email.value+"&interest="+interest.value+"&role="+role.value+"&comments="+comments.value);
	}
}