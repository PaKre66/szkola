window.addEventListener('DOMContentLoaded', () => {
  const dropper = document.querySelector('#dropper');
  const drag_img = document.querySelector('#drag_img');
  dropper.addEventListener('drop', (event) => {
      event.preventDefault();
      let data = event.dataTransfer.getData('text');
      event.target.appendChild(document.querySelector('#' + data));
  });
  dropper.addEventListener('dragover', (event) => {
      event.preventDefault();
  });
  drag_img.addEventListener('dragstart', (event) => {
      event.dataTransfer.setData('text', event.target.id);
  });
});