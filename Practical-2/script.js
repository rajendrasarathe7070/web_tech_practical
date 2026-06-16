function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  if (name == "" || email == "" || password == "") {
    alert("All fields are required");
    return false;
  }
  if (password.length < 6) {
    alert("Password must contain at least 6 characters");
    return false;
  }
  alert("Registration Successful");
  return true;
}
