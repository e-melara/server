<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('stocks', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('sucursal_id');
      $table->unsignedBigInteger('producto_id');
      $table->timestamps();

      $table->foreign('sucursal_id')->references('id')->on('sucursals');
      $table->foreign('producto_id')->references('id')->on('productos');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('stocks');
  }
}