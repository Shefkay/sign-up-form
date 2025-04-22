// checking password
function chkPassword() {
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm_password").value;

  // console.log(typeof (password));
  // console.log(typeof (confirmPassword));

  if (confirmPassword != '' && password != confirmPassword) {
    alert('Unmatched Password');
    document.getElementById("confirm_password").value = "";
    document.getElementById("password").value = "";
    document.getElementById("password").focus();
    document.getElementById("submit").style = "display:none;";
  } else if (password == confirmPassword) {
    document.getElementById("submit").style = "display:block;";
  };
};
// checking password ends