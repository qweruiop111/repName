<!DOCTYPE html>

<head>
    <title>admin</title>
</head>

<body>

    <p>Добавить товар</p>
    <form action="/public/admin/add">
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

    <br><br><br><br><br>

    <p>Редактировать товар</p>

    <table border="1">
        <th>Название</th>
        <th>Источник</th>
        <th>Цена</th>
        <th>Издатель</th>
        <th>В наличии</th>
        <th>Дата выхода</th>
        <th>Антагонист</th>
        <th>Категория</th>

        @foreach ($catalogs as $catalog)
        <tr>
            <td>{{$catalog->name}}</td>
            <td>{{$catalog->imgsource}}</td>
            <td>{{$catalog->price}}</td>
            <td>{{$catalog->publish->name}}</td>
            <td>{{$catalog->stock}}</td>
            <td>{{$catalog->datadrop}}</td>
            <td>{{$catalog->antagonist}}</td>
            <td>{{$catalog->categ->name}}</td>
            <td>
                <a href="/public/admin/update/{{$catalog->id}}">Изменить</a>
            </td>
            <td>
                <a href="/public/admin/delete/{{$catalog->id}}">Удалить</a>
            </td>
        </tr>
        @endforeach
    </table>





</body>

</html>