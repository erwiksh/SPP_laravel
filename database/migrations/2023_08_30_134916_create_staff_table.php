<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('major',[
                'RPL',
                'TKJ',
                'MPLB',
                'PM',
                'AKL'
            ]);
            $table->enum('class',[
                'X ',
                'XI ',
                'XII '
            ]);
            $table->timestamp('paymentDate');
            $table->bigInteger('sum');
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
        Schema::dropIfExists('staff');
    }
}
