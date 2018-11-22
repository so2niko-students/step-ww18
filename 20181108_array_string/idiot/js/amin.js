document.querySelector('.btn-send').addEventListener('click', function(ev){
    //Отмена отправки формы
    ev.preventDefault();
    //Считать логин и пароль
    let loginHTML = document.querySelector('.login'),
        passwordHTML = document.querySelector('.password'),
        login = loginHTML.value,
        password = passwordHTML.value,
        getQuery = "?log=" + login + "&pas=" + password;

    //Очистка логина и пароля
    loginHTML.value = "";
    passwordHTML.value = "";

    //Проверить, если успею

    //отправить логин и пароль по AJAX
    sendAjax(getQuery);
});

//Отправка по AJAX
function sendAjax(query){
    let aja = new XMLHttpRequest(),
        method = "GET",
        url = "auth.php";

    //Что делать, если сервер начнет отвечать
    aja.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            reaction(this.responseText);
        }
    };

    //Настройка отправки данных
    aja.open(method, url + query, true);
    //Отправка данных
    aja.send();
}

//Реакция на полученные от сервера данные
function reaction(info){
    document.querySelector('.info').innerHTML = info;
    console.log(info);
}