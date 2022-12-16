<p>Редактировать товар</p>
<form action="/public/admin/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$catalog->id}}">
    <p><input type="text" name="name" value="{{$catalog->name}}"> Название</p>
    <p><input type="text" name="imgsource" value="{{$catalog->imgsource}}"> путь к картинке</p>
    <p><input type="number" name="price" value="{{$catalog->price}}"> цена</p>
    <p>
        <select name="publisher" style="width: 175px;">
            @foreach ($publish as $pub)
            <option value="{{$pub->id}}">{{$pub->name}}</option>
            @endforeach
        </select> Издатель
    </p>
    <p><input type="number" name="stock" value="{{$catalog->stock}}"> сколько в наличии</p>
    <p><input type="date" name="datadrop" value="{{$catalog->datadrop}}" style="width: 175px;"> дата</p>
    <p><input type="text" name="antagonist" value="{{$catalog->antagonist}}"> Антагонист</p>
    <p>
        <select name="categories" style="width: 175px;">
            @foreach ($categ as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select> Категория
    </p>
    <p><input type="submit"></p>
</form>