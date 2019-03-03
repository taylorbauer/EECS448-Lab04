function validate() {
  let validated = true;
  let polo = parseInt(document.getElementById("polo.value"));
  let flipFlops = parseInt(document.getElementById("flipFlops.value"));
  let joggers = parseInt(document.getElementById("joggers.value"));

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

  if (validated){
    document.getElementById("storefront").submit();
  }
}
