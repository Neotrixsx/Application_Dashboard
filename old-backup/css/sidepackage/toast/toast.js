function toastFun() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.classList.add = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.classList = x.classList.replace("show", ""); }, 3000);
}