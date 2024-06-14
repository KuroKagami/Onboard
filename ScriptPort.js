
function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  let y = document.forms["myForm"]["email"].value;
  let z = document.forms["myForm"]["message"].value;
  let a = document.forms["myForm"]["phone"].value
  if (x, y, z == "") {
    return false;
  } 
  if (a == ""){
    alert('Sua menssagem foi enviada com sucesso!');
    return true;
  } else {
    alert('Sua menssagem foi enviada com sucesso!');
    return true;
  }
}