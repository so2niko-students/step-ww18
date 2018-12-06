class Google{
    constructor(){
        this.inCity = document.querySelector('#in-city');
        this.fetchInit = {
            'method' : 'GET',
            'headers' : new Headers(),
            'mode' : 'cors',
            'cache' : 'default'
        };
        this.cityTable = document.querySelector('.table');

        //Вешаю обработчики
        //Клик по кнопке Отправить
        document.querySelector('#btn-add').addEventListener('click', this.sendCity.bind(this));
        //Набор на клавиатуре
        this.inCity.addEventListener('keydown', this.getCity.bind(this));


    }

    //Добавляет в БД новый город
    sendCity(){
        let url = 'city.php?city=' + this.getInput() + "&do=insert";

        fetch(url, this.fetchInit).then((respo) => console.log(respo.text()));

        this.inCity.value = "";
    }


    //Просит из БД город с похожим именем
    getCity(){
        let url = 'city.php?city=' + this.getInput() + "&do=get";
        //let url = "cities.json";

        fetch(url, this.fetchInit).then((r)=>{return r.json()}).then((data) => goo.showCities(data));
    }

    getInput(){
        return this.inCity.value;
    }

    showCities(arr){
        //Очищаю таблицу от прошлых значений(удаляю ее тупо)
        goo.delTable();

        arr.forEach((city) => goo.cityTable.appendChild(goo.createCityRow(city)));

    }

    delTable(){
        while (this.cityTable.firstChild) {
            this.cityTable.removeChild(this.cityTable.firstChild);
        }
    }

    createCityRow(cityName){
        let tr = document.createElement('tr'),
            td = document.createElement('td');

        td.innerHTML = cityName;

        tr.appendChild(td);

        return tr;
    }
}

let goo = new Google();