window.addEventListener('DOMContentLoaded',()=>{
  let img=document.querySelectorAll('section>img');
    img.forEach(el=>{
      el.addEventListener('click',()=>{
        document.querySelector('main>img').src=el.src;
        
      });
    });


  let icon=document.querySelector('#icon');
  icon.src=(icon.src=='icon-off.jpg')?('icon-on.jpg'):('icon-off.jpg');
  icon.forEach(el2=>{
    el2.addEventListener('click',()=>{
      document.querySelector('#icon').src=icon.src;
    });
  });


});