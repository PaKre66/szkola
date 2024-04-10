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
window.addEventListener('DOMContentLoaded', () => {
  const dropper1 = document.querySelector('#dropper1');
  const drag_img1 = document.querySelector('#drag_img1');
  dropper1.addEventListener('drop', (event) => {
      event.preventDefault();
      let data = event.dataTransfer.getData('text');
      event.target.appendChild(document.querySelector('#' + data));
  });
  dropper1.addEventListener('dragover', (event) => {
      event.preventDefault();
  });
  drag_img1.addEventListener('dragstart', (event) => {
      event.dataTransfer.setData('text', event.target.id);
  });
});

window.addEventListener('DOMContentLoaded', () => {
  const dropper2 = document.querySelector('#dropper2');
  const drag_img2 = document.querySelector('#drag_img2');
  dropper2.addEventListener('drop', (event) => {
      event.preventDefault();
      let data = event.dataTransfer.getData('text');
      event.target.appendChild(document.querySelector('#' + data));
  });
  dropper2.addEventListener('dragover', (event) => {
      event.preventDefault();
  });
  drag_img2.addEventListener('dragstart', (event) => {
      event.dataTransfer.setData('text', event.target.id);
  });
});

window.addEventListener('DOMContentLoaded', () => {
  const dropper3 = document.querySelector('#dropper3');
  const drag_img3 = document.querySelector('#drag_img3');
  dropper3.addEventListener('drop', (event) => {
      event.preventDefault();
      let data = event.dataTransfer.getData('text');
      event.target.appendChild(document.querySelector('#' + data));
  });
  dropper3.addEventListener('dragover', (event) => {
      event.preventDefault();
  });
  drag_img3.addEventListener('dragstart', (event) => {
      event.dataTransfer.setData('text', event.target.id);
  });
});