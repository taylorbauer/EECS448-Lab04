function validate() {
  let validated = true;
  let polo = document.getElementById("polo.value");
  let flipFlops = document.getElementById("flipFlops.value");
  let joggers = document.getElementById("joggers.value");
  let username = document.getElementById("username");
  let password = document.getElementById("password");

  let quantityError = "Quantity must be a number greater than or equal to zero";

  if (isNaN(polo) || polo < 0){
    validated = false;
    poloError.innerHTML = quantityError;
  }

  if (isNaN(flipFlops) || flipFlops < 0){
    validated = false;
    flipFlopsError.innerHTML = quantityError;
  }

  if (isNaN(joggers) || joggers < 0){
    validated = false;
    joggersError.innerHTML = quantityError;
  }

  if (username.value == "" || username.value == null){
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
