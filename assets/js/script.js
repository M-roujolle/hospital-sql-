// const spanconfirmation = document.getElementById("alertconfirm");

window.addEventListener("DOMContentLoaded", function () {
  if (document.getElementById("alertconfirm")) {
    Swal.fire("Félicitations", "Ajout réussi !", "success");
  }
});

window.addEventListener("DOMContentLoaded", function () {
  if (document.getElementById("modifconfirm")) {
    Swal.fire("Félicitations", "Modification réussi !", "success");
  }
});
