function validate() {
  let validated = true;
  let polo = document.getElementById("polo");
  let flipFlops = document.getElementById("flipFlops");
  let joggers = document.getElementById("joggers");
  let username = document.getElementById("username");
  let password = document.getElementById("password");

  let quantityError = "Quantity must be a number greater than or equal to zero";

  console.log((polo.value));


  if (isNaN(polo.value) || polo.value < 0){
    validated = false;
    poloError.innerHTML = quantityError;
  }

  if (isNaN(flipFlops.value) || flipFlops.value < 0){
    validated = false;
    flipFlopsError.innerHTML = quantityError;
  }

  if (isNaN(joggers.value) || joggers.value < 0){
    validated = false;
    joggersError.innerHTML = quantityError;
  }

  if (!(/\S+@\S+\.\S+/test(username.value))){
    validated = false;
    usernameError.innerHTML = "Username must be a valid email address (me@example.biz)";
  }

  if (!password.value){
    validated = false;
    passwordError.innerHTML = "Please input a password";
  }

  if (validated){
    document.getElementById("storefront").submit();
  }
}
