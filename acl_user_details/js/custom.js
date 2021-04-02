$(document).ready(function() {
	getUser();
	getMessages();
});

var username = null;
var firstName = null;
var lastName = null;

function getUser() {
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
	  	username=JSON.parse(this.responseText).username;
	    firstName=JSON.parse(this.responseText).firstName;
	    lastName=JSON.parse(this.responseText).lastName;
		document.getElementById("name").innerHTML = 'Hello ' + firstName + ' ' + lastName + '!';
	  }
	};
	xmlhttp.open("GET", "/api/user/details.php?u=108", true);
	xmlhttp.send(); 
}

function getMessages() {

	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
	    response=JSON.parse(this.responseText);
	    var content = '<table><tr><th>From</th><th>Message</th></tr>';
	    for(var i = 0; i < response.length; i++) {
    		var obj = response[i];
    		content += '<tr><td>' + obj.from + '</td><td>' + obj.message + '</td></tr>';
		}
		content += '</table>';
		document.getElementById("messages").innerHTML = content;
	  }
	};
	xmlhttp.open("GET", "/api/user/messages.php", true);
	xmlhttp.send(); 
}
