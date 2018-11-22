function connect(){
    //Этап 0: Создание объекта AJAX
    let myAjax = new XMLHttpRequest();

    
    //Этап 1: Настроить то, как он будет работать, когда получит ответ от сервера
    //Событие: изменение состояния готовности
    myAjax.onreadystatechange = function(){
        //Будет выполняться, когда он будет что-то от сервера получать
        // console.log('Что-то случилось');
        // console.log(this.readyState, this.status, this.statusText, this.responseText);
        if(this.readyState == 4 && this.status == 200){
            console.log("Выполняю действия");
            makeBeauty(this.responseText);
            // document.querySelector('.info').innerHTML += this.responseText;
        }
    }
    //Этап 2: Настроить отправку на сервер
    myAjax.open('GET', 'map.json', true);

    //Этап 3: Отправка запрос
    myAjax.send();
}

document.querySelector('#connect_btn').addEventListener('click', connect);

function makeBeauty(text){
    let arr = JSON.parse(text),
        br = "<br>",
        infoDOM = document.querySelector('.info');

    arr.forEach(element => {
        infoDOM.innerHTML += element + br;
    });

    // arr.forEach(function(element){

    // });
}

