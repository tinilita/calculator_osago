<?php
declare(strict_types=1);

use App\SQLiteConnection as SQLiteConnection;
use App\SQLiteCreateTable;


?>
<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compotible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
    <meta name = "kaywords" content = "калькулятор осаго">
    <title>Калькулятор ОСАГО</title>
    <link rel = "stylesheet" href = "css/style.css">
    <link rel = "stylesheet" href = "css/bootstrap.min.css">
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
<div class="container">
    <div class="sample">
        <form class="form" action="pdf.php" method="post" enctype="application/x-www-fors-urlencoded">


    <tr>
        <td><label for="currency">Владелец</label></td>
        <td>
            <select v-model="convertfrom" id="currency" name="currency">
                <option v-for="(a, index) in currencyfrom" v-bind:value="a.name">{{a.desc}}</option>
            </select>
        </td>
    </tr>


    <h5>Тип ТС</h5>
    <select name="transport_type" id="transport_type" v-model="transport_type">
        <option value="1579" >Мотоциклы и мопеды (A, M)</option>
        <option value="4118" >Легковые автомобили (B, BE) физ. лиц</option>
        <option value="4118" >Легковые автомобили (B, BE) юр. лиц</option>
        <option value="6166" >Легковые автомобили (B, BE) для такси</option>
        <option value="4211" >Грузовые автомобили (C, CE) до 16 тонн</option>
        <option value="6341" >Грузовые автомобили (C, CE) свыше 16 тонн</option>
        <option value="3370" >Автобусы (D, DE) до 16 мест</option>
        <option value="4211" >Автобусы (D, DE) более 16 мест</option>
        <option value="3370" >Автобусы на регулярных перевозках</option>
        <option value="3370">Троллейбусы</option>
        <option value="2101" >Трамваи</option>
        <option value="1579">Тракторы, дорожно-строительные машины</option>
        <optgroup label=""></optgroup>
    </select>

    <h5>Регион</h5>
    <select class="form-select">
        <?php
        $db = new PDO('sqlite:sqlite/bd.sql');
        $result = $db->query('SELECT * FROM region');
        {
            ?>
            <option><?php
                echo $result['row']; ?></option>

            <?php
        } ?>
    </select>



    <h5>Мощность двигателя</h5>
    <select name="osago_power" id="osago_power" v-model="osago_power">
        <option value="0.6">до 50 включительно (Км = 0.6)</option>
        <option value="1">свыше 50 до 70 включительно (Км = 1) </option>
        <option value="1.1">свыше 70 до 100 включительно (Км = 1.1) </option>
        <option value="1.2">свыше 100 до 120 включительно (Км = 1.2) </option>
        <option value="1.4">свыше 120 до 150 включительно (Км = 1.4) </option>
        <option value="1.6">свыше 150 (1.6) </option>
    </select>


    <h5>Период использования ТС </h5>
    <select name="osago_srok" id="osago_srok" v-model="osago_srok">
        <option value="1">1 год</option>
        <option value="0.95" >9 месяцев (Кс = 0.95)</option>
        <option value="0.9" >8 месяцев (Кс = 0.9)</option>
        <option value="0.8" >7 месяцев (Кс = 0.8)</option>
        <option value="0.7" >6 месяцев (Кс = 0.7)</option>
        <option value="0.65" >5 месяцев (Кс = 0.65)</option>
        <option value="0.6" >4 месяца (Кс = 0.6)</option>
        <option value="0.5" >3 месяца (Кс = 0.5)</option>
        <option value="0.4" >2 месяца (Кс = 0.4)</option>
        <option value="0.3" >от 16 дней до 1 месяца (Кс = 0.3)</option>
        <option value="0.2" >от 5 до 15 дней (Кс = 0.2)</option>
    </select>


    <h5>Лица, допущенные к управлению(поле для физических лиц)</h5>
    <select name="lica_dop" id="lica_dop" v-model="lica_dop">
        <option value="1.97" >для юрлица</option>
        <option value="1" >будут указаны</option>
        <option value="2.32" >неограниченное количество</option>
    </select>

    <h5>Стаж(поле для физических лиц)</h5>
    <select name="staj_voditela" id="staj_voditela" v-model="staj_voditela">
        <option value="1" >для юрлица</option>
        <option value="1" >старше 22 лет, стаж свыше 3 лет (Квс = 1) </option>
        <option value="1.7" >старше 22 лет, стаж до 3 лет включительно (Квс = 1.7) </option>
        <option value="1.6" >до 22 лет включительно, стаж свыше 3 лет (Квс = 1.6) </option>
        <option value="1.8" >до 22 лет включительно, стаж до 3 лет включительно (Квс = 1.8) </option>
    </select>


    <h5>КБМ </h5>
        <select v-model="kbm">
            <option value="3.92" >Класс М (Kбм=3.92)</option>
            <option value="2.94" >Класс 0 (Kбм=2.94)</option>
            <option value="2.25" >Класс 1 (Kбм=2.25)</option>
            <option value="1.76" >Класс 2 (Kбм=1.76)</option>
            <option value="1.17" >Класс 3 (Kбм=1.17)</option>
            <option value="1" >Класс 4 (Kбм=1)</option>
            <option value="0.91" >Класс 5 (Kбм=0.91)</option>
            <option value="0.83" >Класс 6 (Kбм=0.83)</option>
            <option value="0.78" >Класс 7 (Kбм=0.78)</option>
            <option value="0.74" >Класс 8 (Kбм=0.74)</option>
            <option value="0.68" >Класс 9 (Kбм=0.68)</option>
            <option value="0.63" >Класс 10 (Kбм=0.63)</option>
            <option value="0.57" >Класс 11 (Kбм=0.57)</option>
            <option value="0.52" >Класс 12 (Kбм=0.52)</option>
            <option value="0.46" >Класс 13 (Kбм=0.46)</option>
        </select>


      <p>Минимальная стоимость полиса по<br>предварительному расчету составляет: <span>{{ finalosago }}</span> рублей</p>
     </form>
    </div>
</div>


<script src = "js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
