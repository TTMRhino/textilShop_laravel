<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('vendor',20);
            $table->string('maingroup_id');
            $table->string('maingroup_1c');
            $table->string('subgroup_1c');
            $table->string('subgroup_id');
            $table->string('item');
            $table->float('price',12.0);
            $table->float('pur_price',12.0);
            $table->text('description');
            $table->float('old_price',12.0);
            $table->smallInteger('top_product')->default('0');
            $table->mediumInteger('remains')->default('0');
            $table->string('code1c',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
