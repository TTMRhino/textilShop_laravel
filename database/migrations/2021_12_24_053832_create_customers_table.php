<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->index('id');
           
            $table->timestamp('data');
            $table->string('name',50);
            $table->string('phone',15);
            $table->string('mailindex','20');
            $table->string('city','30');
            $table->string('adress','30');
            $table->string('comments');
            $table->string('status','50')->default('New');
            $table->mediumInteger('orders_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
