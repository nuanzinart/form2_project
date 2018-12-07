<?
header('Content-Type: text/html; charset=utf-8');

// Параметры для подключения
$db_host = 'localhost'; 
$db_user = 'root'; // Логин БД
$db_password = ''; // Пароль БД
$db_base = 'form'; // Имя БД

// Cоздание подключения к базе данных
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));
mysqli_set_charset('utf8');

//Записываем в БД
$query_insert = 'INSERT INTO messages (name, message) VALUES ("' . $name . '", "' . $text . '")';
mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link));

//Вывод из БД
$query_select = 'SELECT * FROM messages';
$result = mysqli_query($query_select) or die('Ошибка' . mysqli_error($link));
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo $row["id"] . ' ' . $row["name"] . ' ' . $row["msg"] . ' <br />';
}
mysqli_free_result($result);

// Закрыть подключения к базе данных
mysqli_close($link);
?>