window.addEventListener('DOMContentLoaded',()=>{
  const img_1=document.querySelector('#img_1');//trójkąty
  if(img_1.getContext){
    const img_1_ctx=img_1.getContext('2d');
    img_1_ctx.fillStyle = 'rgb(0, 0, 0)';
    img_1_ctx.beginPath();
    img_1_ctx.moveTo(250, 120);
    img_1_ctx.lineTo(200, 50);
    img_1_ctx.lineTo(300, 50);
    img_1_ctx.fill();

    img_1_ctx.beginPath();
    img_1_ctx.moveTo(250, 130);
    img_1_ctx.lineTo(200, 200);
    img_1_ctx.lineTo(300, 200);
    img_1_ctx.fill();

    img_1_ctx.beginPath();
    img_1_ctx.moveTo(245, 125);
    img_1_ctx.lineTo(200, 60);
    img_1_ctx.lineTo(200, 190);
    img_1_ctx.fill();

    img_1_ctx.beginPath();
    img_1_ctx.moveTo(255, 125);
    img_1_ctx.lineTo(300, 60);
    img_1_ctx.lineTo(300, 190);
    img_1_ctx.fill();


  }
  const img_2=document.querySelector('#img_2');//koło
  if(img_2.getContext){
    const img_2_ctx=img_2.getContext('2d');
    
    img_2_ctx.fillStyle = 'rgba(0, 0, 0)';
    img_2_ctx.beginPath();
    img_2_ctx.arc(250, 300, 100, 0, Math.PI * 2, true); 
    img_2_ctx.stroke();
    

    img_2_ctx.fillStyle = 'rgba(250, 0, 0, 0.5)';
    img_2_ctx.beginPath();
    img_2_ctx.arc(250, 440, 100, 0, Math.PI * 2, true); 
    img_2_ctx.stroke();
    img_2_ctx.fill();

    img_2_ctx.fillStyle = 'rgba(0, 250, 0, 0.5)';
    img_2_ctx.beginPath();
    img_2_ctx.arc(250, 160, 100, 0, Math.PI * 2, true); 
    img_2_ctx.stroke();
    img_2_ctx.fill();

    img_2_ctx.fillStyle = 'rgba(0, 0, 250, 0.5)';
    img_2_ctx.beginPath();
    img_2_ctx.arc(110, 300, 100, 0, Math.PI * 2, true); 
    img_2_ctx.stroke();
    img_2_ctx.fill();

    img_2_ctx.fillStyle = 'rgba(250, 250, 0,0.5)';
    img_2_ctx.beginPath();
    img_2_ctx.arc(390, 300, 100, 0, Math.PI * 2, false); 
    img_2_ctx.stroke();
    img_2_ctx.fill();


 
  }
  const img_3=document.querySelector('#img_3');
  if(img_3.getContext){
    const img_3_ctx=img_3.getContext('2d');
    img_3_ctx.fillStyle = 'rgb(0, 0, 0)';
    img_3_ctx.beginPath();
    img_3_ctx.moveTo(250, 100);
    img_3_ctx.lineTo(200, 150);
    img_3_ctx.lineTo(300, 150);
    img_3_ctx.fill();

    img_3_ctx.fillStyle = 'rgb(0, 0, 0)';
    img_3_ctx.beginPath();
    img_3_ctx.moveTo(220, 150);
    img_3_ctx.lineTo(220, 300);
    img_3_ctx.lineTo(280, 300);
    img_3_ctx.lineTo(280, 300);
    img_3_ctx.lineTo(280, 150);
    img_3_ctx.stroke();
    img_3_ctx.fill();


    
    img_3_ctx.beginPath();
    img_3_ctx.moveTo(280, 300);
    img_3_ctx.lineTo(300, 350);
    img_3_ctx.stroke();

    img_3_ctx.beginPath();
    img_3_ctx.moveTo(220, 300);
    img_3_ctx.lineTo(200, 350);
    img_3_ctx.stroke();
   
    
  }
});