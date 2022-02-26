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
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    var error_message1 = document.getElementById("error_message1");
    var error_message2 = document.getElementById("error_message2");
    var error_message3 = document.getElementById("error_message3");
    
    error_message.style.padding = "10px";
    
    var text;
    if(name.length < 5){
      text = "Please Enter valid Username";
      error_message.innerHTML = text;
      error_message.style.display = 'block';
      return false;
    }else{
      error_message.style.display = 'none'; 
    }
    
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      error_message1.innerHTML = text;
      error_message1.style.display = 'block';
      return false;
    }
    else{
        error_message1.style.display = 'none'; 
      }
    if(isNaN(phone) || phone.length < 10){
        text = "Please Enter valid Phone Number";
        error_message2.innerHTML = text;
      error_message2.style.display = 'block';
        return false;
      }
      else{
        error_message2.style.display = 'none'; 
      }
    if(message.length <= 100){
      text = "Please Enter More Than 100 Characters";
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