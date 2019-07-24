<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocks2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locks2_', function (Blueprint $table) {
            $table->bigIncrements('lock_id');
            $table->string("code", 5);
            $table->string("status")->default("closed");
            $table->timestamps();
        });


                DB::table('locks2_')->insert(
                array(
                    'code' => '#31'
                ),
                    array(
                        'code' => '#123131'
                    ),
                    array(
                        'code' => '#12xax1'
                    ),
                    array(
                        'code' => '#123ava31'
                    ),
                    array(
                        'code' => '#12fs1'
                    ),
                    array(
                        'code' => '#1231'
                    )
                );

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locks2_');
    }
}
