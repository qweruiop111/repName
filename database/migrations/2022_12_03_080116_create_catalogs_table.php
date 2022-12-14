<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('imgsource');
            $table->double('price', 15, 4);
            $table->string('publisher'); //marvel dc. . .
            $table->integer('stock'); // количество товаров
            $table->date('datadrop'); // год выпуска
            $table->string('antagonist');
            $table->string('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogs');
    }
}


/*

1. наименование
2. фото
3. дата добавления на сайт
4. цена
5. Категории (marvel, dc, other)
6. В наличии?

7.характеристики.
 1) Издатель (marvel, dc..)
 2) год выпуска
 3) антагонист

*/