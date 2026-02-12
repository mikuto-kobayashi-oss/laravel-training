<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement()->primary();
            $table->string('name',50);//施設名
            $table->string('address',255)->unique();//ビル名
            $table->char('post_code',7)->nullable();//郵便番号
            $table->integer('stair');//募集階
            $table->string('comment', 255)->default("お問い合わせください");//コメント
            $table->integer('del_flg')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
