<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('demo_id');
            $table->string('full_domain', 100)->nullable()->default('...');
            $table->string('seo', 100)->nullable()->default('...');
            $table->string('f_lang', 100)->nullable()->default('...')->comment('first language');
            $table->string('s_lang', 100)->nullable()->default('...')->comment('second language');;
            $table->string('newsletter', 100)->nullable()->default('...');
            $table->integer('code')->default(0);
            $table->string('first_last_name', 100)->nullable()->default('...');
            $table->string('who_you_are', 100)->nullable()->default('...');
            $table->string('email', 100)->nullable()->default('...');
            $table->string('phone', 100)->nullable()->default('...');
            $table->string('approximate_budget', 100)->nullable()->default('...');
            $table->string('due_date', 100)->nullable()->default('...');
            $table->string('message', 100)->nullable()->default('...');
            $table->timestamps();
            $table->index('demo_id');
            $table->foreign('demo_id')->references('id')->on('demos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
