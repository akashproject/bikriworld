<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('service_no',20);
            $table->integer('amount');
            $table->string('payment_mode',20)->nullable();
            $table->string('pickup_schedule',20)->nullable();
            $table->string('pickup_address',20)->nullable();
            $table->string('pickup_city',50)->nullable();
            $table->string('pickup_state',50)->nullable();
            $table->string('pincode',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
