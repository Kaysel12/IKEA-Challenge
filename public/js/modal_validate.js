const exampleModal = new bootstrap.Modal(document.getElementById("exampleModal"), {});
const messageExist = document.querySelector("#exampleModal .modal-body .message");


if (messageExist ) {
    exampleModal.show();
}
