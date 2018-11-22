
function getFile(){
    console.count('эээ?');

    let fileName = "data/log.json",
        ajaja = new XMLHttpRequest();


    ajaja.open('GET', fileName, true);

    //Настройка при получении ответа
    ajaja.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //Функция показа сообщений
            showTable(this.responseText);
        }
    };

    //Отправка запроса в файл
    ajaja.send();

}

//Показ сообщений. Принимает json-строку с массивом объектов сообщений
function showTable(text){
    let textMsgArr = JSON.parse(text),
        tbodyHTML = document.querySelector('.tbo'),
        msgsLen = textMsgArr.length,
        oldListLen = localStorage.getItem('msgsLength');
    // console.log(textMsgArr);

    //Если изменений в файле не было - закончить выполнение функции
    if(oldListLen == msgsLen){
        return true;
    }

    //Переписал количество сообщений
    localStorage.setItem('msgsLength', msgsLen);

    //Удалить предыдущую таблицу
    // deleteAllChildren();

    //Строить таблицу
    for(let i = oldListLen; i < msgsLen; i++){
        tbodyHTML.insertBefore(trConstructor(textMsgArr[i]), tbodyHTML.firstChild);
    }
    
}

function trConstructor(obj) {
    let tr = document.createElement('tr'),
        tdArr = [
                document.createElement('td'),
                document.createElement('td'),
                document.createElement('td')
        ];

    tdArr[0].innerHTML = obj.time;
    tdArr[1].innerHTML = obj.name;
    tdArr[2].innerHTML = obj.text;

    tr.style.color = obj.color;

    tdArr.forEach(function(value){
        tr.appendChild(value);
    });

    return tr;
}

function deleteAllChildren(){
    var tbodyHTML = document.querySelector('.tbo');

    while(tbodyHTML.hasChildNodes()){
        tbodyHTML.removeChild(tbodyHTML.firstChild);
    }
}

function postMsg(ev){
    let inpElements = g('.sends');

    if(ev.keyCode == 13 && ev.ctrlKey == true){
        sendAjax([
            inpElements[0].value,
            inpElements[1].value,
            inpElements[2].value
        ]);

        inpElements[2].value = "";
    }
}

function g(sel){
    let htmlArr = document.querySelectorAll(sel);

    if(htmlArr.length == 1){
        return htmlArr[0];
    }

    return htmlArr;
}

function sendAjax(arr){
    let fileName = "wriCo.php",
        ajaja = new XMLHttpRequest();

    ajaja.open('POST', fileName, true);
    ajaja.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaja.send("data=" + JSON.stringify(arr));

}

//Начальная инициализация
function init(){
    //Сообщений при первом заходе
    localStorage.setItem('msgsLength', 0);

    //АвтоОбновление списка сообщений
    setInterval(getFile, 1000);

    //Вешаю слушатель нажатия клавиш на поле textarea
    document.querySelector('.sendBtn').addEventListener('keyup', postMsg);
}