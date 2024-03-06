window.addEventListener("DOMContentLoaded", () => {
  let showModal = document.querySelector("#showModal");
  let dialog = document.querySelector('#dialog');
  showModal.addEventListener('click', () => {
    dialog.showModal();
  });
});
