<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsribers', function (Blueprint $table) {
            $table->id();
            $table->text('companyName');
            $table->text('firstName');
            $table->text('lastName');
            $table->text('phone');
            $table->text('email')->unique();
            $table->text('address');
            $table->text('category');
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
        Schema::dropIfExists('subsribers');
    }
}
