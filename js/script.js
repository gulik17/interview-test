document.addEventListener('DOMContentLoaded', function() {
    var selects = document.querySelectorAll('select');
    var datepicker = document.querySelectorAll('.datepicker');

    M.FormSelect.init(selects, {});
    M.Datepicker.init(datepicker, {'format': 'dd-mm-yyyy'});

});

(document.querySelectorAll('button'))[0].addEventListener('click', function(event) {
    event.preventDefault();
    var ls_count = +localStorage.getItem('count');
    var hair_color = document.getElementById('select__hair_color');
    var age = document.getElementById('input__age');
    var programming_lang = document.getElementById('select__programming_lang');
    var birthday = document.getElementById('input__birthday');
    var years_experience = document.getElementById('input__years_experience');
    programming_lang = programming_lang.parentNode.children[0];

    if (ls_count > 5) {
        alert("Лимит исчерпан");
        return false;
    }

    if (!hair_color.value || !age.value || !programming_lang.value || !birthday.value || !years_experience.value) {
        alert("Все поля обязательны к заполеннию");
        return false;
    }

    if (age.value < 0 || age.value > 150) {
        alert("Поле «Сколько вам лет» должно быть в интервале от 0 до 150");
        return false;
    }

    var xhr = new XMLHttpRequest();

    var body = 'hair_color=' + encodeURIComponent(hair_color.value) +
        '&age=' + encodeURIComponent(age.value) +
        '&programming_lang=' + encodeURIComponent(programming_lang.value) +
        '&birthday=' + encodeURIComponent(birthday.value) +
        '&years_experience=' + encodeURIComponent(years_experience.value);

    xhr.open("POST", '/ajax', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (this.readyState != 4)
            return false;
        alert( this.responseText );
        document.getElementById('form').reset();
        localStorage.setItem('count', ls_count+1);
    };

    xhr.send(body);
});
