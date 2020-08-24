<h5>Всего опросов заполнено: <?=$allCount['count']?></h5>
<br>

<h5>Какого цвета ваши волосы</h5>

<table>
    <thead>
        <tr>
            <th style="width:50%">Ответ</th><th>Количество</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($hairColorCount as $key => $val) {
        echo "<tr><td>{$val['hair_color']}</td><td>{$val['count']}</td></tr>";
    } ?>
    </tbody>
</table>

<h5>Сколько вам лет</h5>

<table>
    <thead>
        <tr>
            <th style="width:50%">Ответ</th><th>Количество</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($ageCount as $key => $val) {
        echo "<tr><td>{$val['age']}</td><td>{$val['count']}</td></tr>";
    } ?>
    </tbody>
</table>

<h5>Языки программирования</h5>

<table>
    <thead>
        <tr>
            <th style="width:50%">Ответ</th><th>Количество</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($programmingLangCount as $key => $val) {
        echo "<tr><td>{$val['programming_lang']}</td><td>{$val['count']}</td></tr>";
    } ?>
    </tbody>
</table>

<h5>Дата рождения</h5>

<table>
    <thead>
        <tr>
            <th style="width:50%">Ответ</th><th>Количество</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($birthdayCount as $key => $val) {
        echo "<tr><td>{$val['birthday']}</td><td>{$val['count']}</td></tr>";
    } ?>
    </tbody>
</table>

<h5>Сколько лет трудового стажа</h5>

<table>
    <thead>
        <tr>
            <th style="width:50%">Ответ</th><th>Количество</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($yearsExperienceCount as $key => $val) {
        echo "<tr><td>{$val['years_experience']}</td><td>{$val['count']}</td></tr>";
    } ?>
    </tbody>
</table>
