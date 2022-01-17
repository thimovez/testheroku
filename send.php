
<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5033185378:AAGKzQoFdrbclS19_5NwCw1un4iQyOr9XGU";

//Сюда вставляем chat_id
$chat_id = "-1001646007534";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $phone = ($_POST['phone']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Телефон:' => $phone
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."\n";
    };

    $txt = rawurlencode($txt); 
//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}

?>