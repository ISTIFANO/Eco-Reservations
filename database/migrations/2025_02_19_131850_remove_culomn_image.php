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
    {
        Schema::table('salles', function (Blueprint $table) {
            $table->string('images')->default('https://cf.bstatic.com/xdata/images/city/600x600/579739.jpg?k=210a39c70f4d63a2cde9b2cf09cadbf5b9abfebf992fa2efa4f107ccf3cfd815&o=');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('salles', function (Blueprint $table) {
            $table->dropColumn('images');
        }); 
        
    }
};
