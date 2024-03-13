window.addEventListener('DOMContentLoaded', () => {
  const img_1=document.querySelector('#img_1');
  if(img_1.getContext){
    const img_1_ctx=img_1.getContext('2d');
    img_1_ctx.fillStyle = 'rgb(150, 150, 0)';// Kolor wypełnienia
    img_1_ctx.fillRect(20,15,100,150);// Prostokąt pełny (x, y, w, h)
    img_1_ctx.fillStyle = 'rgba(0, 200, 200, 0.5)';
    img_1_ctx.fillRect(60, 60,100,100);

    img_1_ctx.fillStyle = 'rgb(0, 100, 100)';
    img_1_ctx.beginPath();// Rozpocznj ścieżkę
    img_1_ctx.moveTo(200, 200);// Przesuń kursor do podanej pozycji (x, y)
    img_1_ctx.lineTo(150, 300);// Narysuj linię (x, y)
    img_1_ctx.lineTo(150, 150);
    img_1_ctx.fill();// Wypełnij ścieżkę

    img_1_ctx.fillStyle = 'rgb(200, 100, 100)';
    img_1_ctx.beginPath();
    img_1_ctx.moveTo(300, 300);
    img_1_ctx.lineTo(250, 350);
    img_1_ctx.lineTo(250, 250);
    img_1_ctx.closePath();// Zamknij ścieżkę
    img_1_ctx.stroke();// Rysuje kontur

    img_1_ctx.fillStyle = 'rgba(0, 150, 150,0.3)';
    img_1_ctx.beginPath();
    img_1_ctx.arc(250, 300, 50, 0, Math.PI * 2, true); //Rysuje łuk(x, y, r, kąt poczatkowy, kąt końcowy, czy odwrotnie do ruchu wskazówek zegara)
    img_1_ctx.stroke();
    img_1_ctx.fill();

    img_1_ctx.font='52px sans';
    img_1_ctx.fillStyle='rgba(200, 250, 150, 0.3)';
    img_1_ctx.fillText('Ala ma kota', 90, 500);
    img_1_ctx.fillStyle = 'rgb(0, 0, 0)';
    img_1_ctx.strokeText('Ala ma kota', 90, 500);
  }
});