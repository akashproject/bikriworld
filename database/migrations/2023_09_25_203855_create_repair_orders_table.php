<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('product_unique_no')->nullable();
            $table->string('service_no',50);
            $table->integer('amount');
            $table->string('payment_mode',20);
            $table->string('schedule',20);
            $table->integer('address_id');
            $table->string('address',50);
            $table->string('city',50);
            $table->string('state',50);
            $table->integer('pincode');
            $table->string('status',50);
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_orders');
    }
}
