var button = document.getElementById("button");
var form = document.querySelector("form");
var button2 = document.getElementById("button2");
var span = document.getElementsByTagName("span")[0];




button.addEventListener("click", function(){
	form.setAttribute("action", "view2.php");
	span.innerHTML = "<b>Link</b><br/><input id='link' type='text' name='get-link' value='' size='30'/><br/><br/>";
	button.setAttribute("type", "hidden");
	button2.setAttribute("type", "button");



});

button2.addEventListener("click", function(){
	form.setAttribute("action", "view.php");
	span.innerHTML = "";
	button.setAttribute("type", "button");
	button2.setAttribute("type", "hidden");



});


function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
}

function myFunction2() {
  var copyText = document.getElementById("myInput2");
  copyText.select();
  document.execCommand("copy");
}

function myFunction3() {
  var copyText = document.getElementById("myInput3");
  copyText.select();
  document.execCommand("copy");
}

function myFunction4() {
  var copyText = document.getElementById("myInput4");
  copyText.select();
  document.execCommand("copy");
}