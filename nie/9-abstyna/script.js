window.addEventListener('DOMContentLoaded', () => {
   let przycisk = document.querySelector("#showModal");
   let przycisk2 = document.querySelector("#hideModal");
   let modal = document.querySelector("#lightbox");
   przycisk.addEventListener('click',()=>{
      modal.style.display='flex';
   });
   przycisk2.addEventListener('click',()=>{
      modal.style.display='none';
   });

});