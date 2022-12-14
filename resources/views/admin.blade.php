<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>

    <p>Добавить комиксы</p>
    <form action="/public/add">
        <p><input type="text" name="name"> Название</p>
        <p><input type="text" name="imgsource"> путь к картинке</p>
        <p><input type="number" name="price"> цена</p>
        <p>
            <select name="publisher" style="width: 175px;">
                @foreach ($publish as $pub)
                <option value="{{$pub->id}}">{{$pub->name}}</option>
                @endforeach
            </select> Издатель
        </p>
        <p><input type="number" name="stock"> сколько в наличии</p>
        <p><input type="date" name="datadrop" style="width: 175px;"> дата</p>
        <p><input type="text" name="antagonist"> Антагонист</p>
        <p>
            <select name="categories" style="width: 175px;">
                @foreach ($categ as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select> Категория
        </p>
        <p><input type="submit"></p>
    </form>

</body>

</html>