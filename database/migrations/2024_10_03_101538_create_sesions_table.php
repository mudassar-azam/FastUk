<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesionsTable extends Migration
{
    public function up()
    {
        Schema::create('sesions', function (Blueprint $table) {
            $table->id();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('b_date')->nullable();
            $table->string('p_time_at')->nullable();
            $table->string('pickup_time_type')->nullable();
            $table->string('p_time_after')->nullable();
            $table->string('p_time_from')->nullable();
            $table->string('p_time_to')->nullable();
            $table->string('package_type')->nullable();
            $table->string('quantity')->nullable();
            $table->string('weight')->nullable();
            $table->string('unit')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('size_unit')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('company_name1')->nullable();
            $table->string('company_name2')->nullable();
            $table->string('postal_code1')->nullable();
            $table->string('postal_code2')->nullable();
            $table->string('ph1')->nullable();
            $table->string('ph2')->nullable();
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('distance')->nullable();
            $table->string('ffinal')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sesions');
    }
}
