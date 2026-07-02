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
            $table->string('full_domain', 100)->nullable();
            $table->string('seo', 100)->nullable();
            $table->string('f_lang', 100)->nullable()->comment('first language');
            $table->string('s_lang', 100)->nullable()->comment('second language');;
            $table->string('newsletter', 100)->nullable();
            $table->integer('code')->default(0);
            $table->string('first_last_name', 100)->nullable();
            $table->string('who_you_are', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('approximate_budget', 100)->nullable();
            $table->string('due_date', 100)->nullable();
            $table->string('message', 100)->nullable();
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
