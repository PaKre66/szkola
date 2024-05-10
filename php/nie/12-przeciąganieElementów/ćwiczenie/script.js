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
// window.addEventListener('DOMContentLoaded', () => {
//     if(typeof(Storage) !== 'undefined') {
//         // Kod dla sessionStorage i localStorage
//         // sessionStorage.setItem('name', 'Marysia'); // Usuwane po zamknięciu karty
//         // localStorage.setItem('name', 'Ala'); // Nie usuwa się po zamknięciu strony
//         // document.querySelector('#name').innerHTML = localStorage.getItem('name');
//         // localStorage.removeItem('name');
//         const formBgColor = document.forms[0];
//         const body = document.querySelector('body');
//         formBgColor.addEventListener('submit', (e) => {
//             e.preventDefault();
//             let color = formBgColor.querySelector('#bgColor').value;
//             localStorage.setItem('bgColor', color);
//             body.style.backgroundColor = color;
//         });
//         if (localStorage.getItem('bgColor') !== null) {
//             body.style.backgroundColor = localStorage.getItem('bgColor');
//         }
//     }
//     else {
//         // Brak obsługi Web Storage API
//     }
// });
window.addEventListener('DOMContentLoaded', () => {
    if(typeof(Storage) !== 'undefined') {
        // Kod dla sessionStorage i localStorage
        // sessionStorage.setItem('name', 'Marysia'); // Usuwane po zamknięciu karty
        // localStorage.setItem('name', 'Ala'); // Nie usuwa się po zamknięciu strony
        // document.querySelector('#name').innerHTML = localStorage.getItem('name');
        // localStorage.removeItem('name');`
        const dropperdrag_img = document.dropper[0];
        const body = document.querySelector('body');
        dropperdrag_img.addEventListener('submit', (e) => {
            e.preventDefault();
            let color = dropperdrag_img.querySelector('#drag_img').value;
            localStorage.setItem('drag_img', color);
            body.style.backgroundColor = color;
        });
        if (localStorage.getItem('drag_img') !== null) {
            body.style.backgroundColor = localStorage.getItem('drag_img');
        }
    }
    else {
        // Brak obsługi Web Storage API
    }
});