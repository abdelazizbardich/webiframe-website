<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('first_last_name', 100)->nullable()->default('...');
            $table->string('who_you_are', 100)->nullable()->default('...');
            $table->string('email', 100)->nullable()->default('...');
            $table->string('phone', 100)->nullable()->default('...');
            $table->string('your_need', 100)->nullable()->default('...');
            $table->string('due_date', 100)->nullable()->default('...');
            $table->string('approximate_budget', 100)->nullable()->default('...');
            $table->text('message')->nullable()->default('...');
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
        Schema::dropIfExists('quotations');
    }
}
