<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form class="form" method="post" action="./send.php">
        <div class="form__item">
            <input class="form__input" type="text" name="name" required>
            <label class="form__label">Ваше имя</label>
        </div>
        <div class="form__item">
            <input class="form__input" type="text" name="phone" required>
            <label class="form__label">Номер телефона</label>
        </div>
        <input class="form__input btn" type="submit" value="Отправить">
        <input type="hidden" name="act" value="order">
    </form>

</body>

</html>