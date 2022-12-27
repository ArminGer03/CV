function f(){
  var txt;
  if (confirm("by pressing the OK button, your message will be send")) {
    txt = "Your message has been sent";
  } else {
    txt = "Your message hasn't been sent";
  }
  document.getElementById("demo").innerHTML = txt;
}