

var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;

function validate(){
  console.log("ugh");
  var username = document.getElementById('inpt_username').value;
  var password = document.getElementById('inpt_pass').value;
  var errors = [];

  if (!ck_username.test(username)) {
    errors[errors.length] = "Usernames can't have special characters.";
  }
  if (!ck_password.test(password)) {
    errors[errors.length] = "Invalid password.";
  }
  if (errors.length > 0) {

    reportErrors(errors);
    return false;
  }
  return true;
}

function reportErrors(errors){
  var msg = "Invalid input:\n";
  for (var i = 0; i<errors.length; i++) {
    var numError = i + 1;
    msg += "\n" + numError + ". " + errors[i];
  }
  alert(msg);
}
