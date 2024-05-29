function makeFace(clockCtx, radius) {
  clockCtx.beginPath();
  clockCtx.fillStyle = 'rgb(255,0,0)';
  clockCtx.arc(0, 0, radius, 0, Math.PI * 2);
  clockCtx.fill();

  clockCtx.strokeStyle = "rgb(0,0,0)";
  clockCtx.lineWidth = radius * 0.05;
  clockCtx.stroke();

  clockCtx.beginPath();
  clockCtx.fillStyle = 'rgb(0,0,0)';
  clockCtx.arc(0, 0, radius * 0.05, 0, Math.PI * 2);
  clockCtx.fill();
}
function makeNumbers(clockCtx, radius) {
  clockCtx.font = radius * 0.15 + "px Consolas";
  clockCtx.textBaseline = "middle";
  clockCtx.textAlign = "center";
  for(let i=1;i<13;i++){
    let angle = i * Math.PI / 6;
    clockCtx.rotate(angle);
    clockCtx.translate(0, -radius * 0.85);
    clockCtx.rotate(-angle);
    clockCtx.fillText(i, 0, 0);
    clockCtx.rotate(angle);
    clockCtx.translate(0, radius * 0.85);
    clockCtx.rotate(-angle);
  }
  clockCtx.font = radius * 0.07 + "px Consolas";
    for(let i = 13; i < 25; i++) {
        let angle = i * Math.PI / 6;
        clockCtx.rotate(angle);
        clockCtx.translate(0, -radius * 0.65);
        clockCtx.rotate(-angle);
        clockCtx.fillText(i, 0, 0);
        clockCtx.rotate(angle);
        clockCtx.translate(0, radius * 0.65);
        clockCtx.rotate(-angle);
    }
}
function makeHand(clockCtx, position, length, width) {
  clockCtx.beginPath();
  clockCtx.lineWidth = width;
  clockCtx.lineCap = "round";
  clockCtx.moveTo(0, 0);
  clockCtx.rotate(position);
  clockCtx.lineTo(0, -length);
  clockCtx.stroke();
  clockCtx.rotate(-position);
}
function getTime(clockCtx,radius){
  const date = new Date();
  let hour = date.getHours();
  let minute = date.getMinutes();
  let second = date.getSeconds();
  let miliseconds = date.getMilliseconds();
  hour=hour%12;
  hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60));
  makeHand(clockCtx, hour, radius * 0.5, radius * 0.05);
  minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
  makeHand(clockCtx, minute, radius * 0.8, radius * 0.05);
  second = (second * Math.PI / 30) + (miliseconds * Math.PI / (30 * 1000));
  makeHand(clockCtx, second, radius * 0.9, radius * 0.02);
}
window.addEventListener('DOMContentLoaded',()=>{
  const clockCanvas = document.querySelector('#clock');
    const clockCtx = clockCanvas.getContext("2d");
    let radius = (clockCanvas.height >= clockCanvas.width) ? (clockCanvas.width / 2) : (clockCanvas.height / 2);
    clockCtx.translate(radius, radius);
    radius = radius * 0.9;
    setTimeout(makeClock, 500);
    function makeClock() {
        makeFace(clockCtx, radius);
        makeNumbers(clockCtx, radius);
        getTime(clockCtx, radius);
        setTimeout(makeClock, 1);
  }
});