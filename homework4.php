<?php
/* Домашнее задание
Задача 1: Время жизни cookie
Пользователь приходит на сайт. Используя cookie сделать так, что б впервые пришедший
пользователь видел фразу:
"Добро пожаловать, новичек!"
Если пользователь уже посещал сайт в течении последних 10-ти часов, выводить фразу:
"С возвращением, дружище!"
Подсказка: Используйте инструменты для разработчиков Вашего браузера для просмотра и
очистки текущих значений cookie. */
if (!isset($_COOKIE['visit'])) {
    setcookie('visit', 'Cookie', time() + 36000);

else{
        echo 'Добро пожаловать, новичек!';
    }
}
echo '<br>=====================////============================<br>';
// task 2
/* Задача 2: Дата и время последнего посещения
Используя cookie реализовать вывод на страницу сообщения с датой и временем последнего визита. */
$date = date("Y-m-d H:i:s");
setcookie("lastVisit", $date, time() + 360000);
if (cookieIsset("lastVisit")) {
    echo ':' . $_COOKIE["lastVisit"];
} else {
    echo 'Еще не заходили';
}
echo '<br>=====================////============================<br>';
// task 3
/* Задача 3: Счетчик посещений
Используя cookie реализовать вывод на страницу сообщения с количеством посещений страницы. */
$count = 1;
if (cookieIsset("visitCounters")) {
    setcookie("visitCounters", (int)$_COOKIE["visitCounters"] + 1);
    $cookieCount = $_COOKIE["visitCounters"];
    $cookieArray = [2, 3, 4];
    $cookieCountText = in_array($cookieCount, $cookieArray) ? ' раза' : ' раз';
    echo 'Вы на сайте: ' . $cookieCount . $cookieCountText;
} else {
    setcookie("visitCounters", $count);
    echo 'Вы впервые на сайте';
}
echo '<br>=====================////============================<br>';