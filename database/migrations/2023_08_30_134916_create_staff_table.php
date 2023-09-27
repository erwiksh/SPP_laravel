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
            $table->enum('class',[
                'X RPL',
                'XI RPL',
                'XII RPL',
                'X TKJ 1',
                'XI TKJ 1',
                'XII TKJ 1',
                'X TKJ 2',
                'XI TKJ 2',
                'XII TKJ 2',
                'X MPLB 1',
                'XI MPLB 1',
                'XII MPLB 1',
                'X MPLB 2',
                'XI MPLB 2',
                'XII MPLB 2',
                'X PM 1',
                'XI PM 1',
                'XII PM 1',
                'X PM 2',
                'XI PM 2',
                'XII PM 2',
                'X AKL 1',
                'XI AKL 1',
                'XII AKL 1',
                'X AKL 2',
                'XI AKL 2',
                'XII AKL 2',
                'X AKL 3',
                'XI AKL 3',
                'XII AKL 3'
            ]);
            $table->char('sum');
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
