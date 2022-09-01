<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    //up()  تنشا الجدول لمن اعمل مايغريت
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //$table->integer('id_num')->primary(); لو بدي اعمل حقل من عندي
            $table->string('title');
            $table->text('content')->nullable();
            //nullable() لو بدي اخلي الحقل فاضي
            $table->string('image')->default('no-image.png');
            //default('no-image.png') اعطي الحقل قيمة افتراضية
            $table->timestamps();

            //$table->primary('id_num') او بعملها تحت

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    //down() تتراجع عن انشاء الجدول لمن اعمل رول باك
    {
        Schema::dropIfExists('posts');
    }
};
