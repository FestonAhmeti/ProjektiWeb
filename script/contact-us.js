const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

/**--------Validation of Form -----------*/
function validate(){
    var name = document.getElementById("emriPlote").value;
    var lastname = document.getElementById("mbiemri").value;
    var email = document.getElementById("emaili").value;
    var message = document.getElementById("mesazhi").value;
    var error_message = document.getElementById("error_message");
    var error_message1 = document.getElementById("error_message1");
    var error_message2 = document.getElementById("error_message2");
    var error_message3 = document.getElementById("error_message3");
    
    error_message.style.padding = "10px";
    
    var text;
    if(name.length < 5){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      error_message.style.display = 'block';
      return false;
    }else{
      error_message.style.display = 'none'; 
    }
     if(lastname < 5){
      text = "Please Enter valid Lastname";
      error_message1.innerHTML = text;
    error_message1.style.display = 'block';
      return false;
    }
    else{
      error_message2.style.display = 'none'; 
    }
    
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      error_message2.innerHTML = text;
      error_message2.style.display = 'block';
      return false;
    }
    else{
        error_message1.style.display = 'none'; 
      }
   
    if(message.length <= 50){
      text = "Please Enter More Than 50 Characters";
      error_message3.innerHTML = text;
      error_message3.style.display = 'block';
      return false;
    }
    else{
        error_message3.style.display = 'none'; 
      }
    alert("Form Submitted Successfully!");
    return true;
  }