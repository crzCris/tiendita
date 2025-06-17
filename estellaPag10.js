const canvas= document.getElementById("miCanvas");
const ctx= canvas.getContext("2d");

function dibujarEstrella(x, y, tamaño, puntas){
    ctx.beginPath();
    for (let i=0; i<puntas*2; i++){
        const angulo=(i*Math.PI)/puntas;
        const radio=(i%2===0)? tamaño:tamaño/2;
        const px=x + Math.cos(angulo)*radio;
        const py=y + Math.sin(angulo)*radio;
        ctx.lineTo(px, py);
    }
    ctx.closePath();
    ctx.fillStyle="blue";
    ctx.fill();
}
dibujarEstrella(200,200,100,5);