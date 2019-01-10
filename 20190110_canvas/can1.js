//Объект рисования привязанный к canvas с id moyCan
let cancan = {
        obj : document.querySelector('#moyCan'),
        isDown : false
    },
    uzguzlak = cancan.obj.getContext('2d');

function line1(color, x, y){

    color = color || 'black';
    x = x || 400;
    y = y || 300;

    //Начать рисовать текущую фигуру
    uzguzlak.beginPath();

    //Перенести кисть в точку с координатами х,у
    uzguzlak.moveTo(800, 0);
    //Провести линию в точку х,у
    uzguzlak.lineTo(x,y);
    //Покрасить линию в цвет
    uzguzlak.strokeStyle = color;

    //Закончить рисовать текущую фигуру
    uzguzlak.closePath();

    //Закрасить проведенную фигуру
    uzguzlak.stroke();
}

function sayColor(){
    let color = prompt('choose color');

    line1(color);
}


function random(){
    let colors = ['red', 'green', 'blue', 'orange', 'yellow'],
        colorsLen = colors.length;
    for(let i = 0; i < 100; i++){
        line1(colors[randec(colorsLen)], randec(800), randec(600));
        myRect({
            x1 : randec(800),
            x2 : randec(800),
            y1 : randec(600),
            y2 : randec(600)
        }, colors[randec(colorsLen)], randec(2));
    }
}

function randec(len){
    return Math.floor(Math.random()*len);
}

function myRect(coors, color, isFill){
    uzguzlak.beginPath();

    if(isFill){
        uzguzlak.strokeStyle = color;
        uzguzlak.strokeRect(coors.x1, coors.y1, coors.x2, coors.y2);
    }else{
        uzguzlak.fillStyle = color;
        uzguzlak.fillRect(coors.x1, coors.y1, coors.x2, coors.y2);
    }
}

function circle(){
    let color = "";
    for(let y = 0; y < 10; y++){
        uzguzlak.beginPath();
        uzguzlak.arc(   randec(800),
                        randec(600),
                        randec(50) + 50,
                        0, 2 * Math.PI);

        color = 'rgb(' + randec(256) + ',' + randec(256) + ',' +randec(256) + ')';
        if(randec(2)){
            uzguzlak.strokeStyle = color;
            uzguzlak.stroke();
        }else{
            uzguzlak.fillStyle = color;
            uzguzlak.fill();
        }

        uzguzlak.closePath();
    }
}

function draw(ev){
    // console.log(ev);
    let coors = {
        x: ev.clientX,
        y: ev.clientY
    }

    if(cancan.isDown){

        // uzguzlak.arc(ev.clientX, ev.clientY, 2, 0, 2 * Math.PI);
        // uzguzlak.fillStyle = 'black';
        // uzguzlak.fill();
        // uzguzlak.closePath();
        uzguzlak.lineTo(coors.x, coors.y);
        uzguzlak.closePath();
        uzguzlak.stroke();
    }
    uzguzlak.beginPath();
    uzguzlak.moveTo(coors.x, coors.y);


}

document.body.addEventListener('keyup',function(ev){
    // console.log(ev);
    if(ev.keyCode == 87){
        uzguzlak.beginPath();
        uzguzlak.clearRect(0, 0, 800, 600);
    }
});

cancan.obj.addEventListener('mousemove', draw);
cancan.obj.addEventListener('mousedown',function(){
    cancan.isDown = true;
});
document.body.addEventListener('mouseup',function(ev) {
    cancan.isDown = false;
});
random();
circle();



