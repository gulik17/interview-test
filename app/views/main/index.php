
<div class="col s12">
    <h3 class="title">Заполните опрос</h3>
</div>

<form id="form">
    <div class="input-field col s12 l6">
        <select id="select__hair_color">
        <option value="" disabled selected>Выберите цвет волос</option>
        <option value="Блондин">Блондин</option>
        <option value="Брюнет">Брюнет</option>
        <option value="Шатен">Шатен</option>
        <option value="Лысый">Лысый</option>
        </select>
        <label>Какого цвета ваши волосы?</label>
    </div>

    <div class="input-field col s12 l6">
        <input placeholder="Укажите возраст" id="input__age" min="0" max="150" type="number" class="validate">
        <label for="first_name">Сколько вам лет</label>
    </div>

    <div class="input-field col s12 l6">
        <select multiple id="select__programming_lang">
        <option value="" disabled selected>Выберите языки программирования</option>
        <option value="ALGOL">ALGOL</option>
        <option value="FORTRAN">FORTRAN</option>
        <option value="PASCAL">PASCAL</option>
        <option value="BASIC">BASIC</option>
        <option value="ADA">ADA</option>
        <option value="ASM">ASM</option>
        <option value="PYTHON">PYTHON</option>
        </select>
        <label>Языки программирования, которые вы знаете?</label>
    </div>

    <div class="input-field col s12 l6">
        <input type="text" id="input__birthday" class="datepicker" readonly placeholder="Укажите дату рождения">
        <label>Дата рождения</label>
    </div>

    <div class="input-field col s12 l6">
        <div><label>Сколько лет трудового стажа?</label></div>
        <p class="range-field">
        <input type="range" id="input__years_experience" min="0" max="50" />
        </p>
    </div>

    <div class="input-field col s12 l6 wrapper__send-btn">
        <button class="btn waves-effect waves-light btn-large">Отправить</button>
    </div>
</form>
