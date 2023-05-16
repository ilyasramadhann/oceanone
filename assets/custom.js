var className = "active";
var scrollTrigger = 60;

window.onscroll = function function1() {
  // We add pageYOffset for compatibility with IE.
  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
    document.getElementsByTagName("nav")[0].classList.add(className);
  } else {
    document.getElementsByTagName("nav")[0].classList.remove(className);
  }
};

function changeDisplay(){
  var new_display = "<textarea id='textarea' rows='4' cols='30'>Ocean One are a turnkey solution to begin the journey of reducing your business's environmental footprint or going plastic neutral.</textarea><br><input type='button' id='bt' value='Submit' onclick='changeValue()'/>"

  document.getElementById("p-display").innerHTML = new_display;
}

function changeValue(){
  var desc = document.getElementById("p-display");
  var new_desc = document.getElementById("textarea").value;

  desc.innerText = new_desc;
}

function printOutput(){
  var name=document.getElementById("name").value;
  var email=document.getElementById("email").value;
  var message=document.getElementById("message").value;

  document.getElementById("caption").innerHTML = "Thanks for your response! Your data recorded as :";
  document.getElementById("hasil-name").innerHTML="Hello, my name is ";
  document.getElementById("hasil-email").innerHTML="Please contact me through :<br>";
  document.getElementById("hasil-message").innerHTML="I want to say about : <br>";

  document.getElementById("sname").innerHTML = name;
  document.getElementById("semail").innerHTML = email;
  document.getElementById("smessage").innerHTML = message;
}



