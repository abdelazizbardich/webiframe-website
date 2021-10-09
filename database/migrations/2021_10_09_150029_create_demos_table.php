<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demos', function (Blueprint $table) {
            $table->id();
            $table->string('title', 70)->nullable()->default('text');
            $table->string('slug', 70)->nullable()->default('text');
            $table->text('thumbnail')->nullable()->default('https://');
            $table->text('full_thumbnail')->nullable()->default('https://');
            $table->text('short_description' ,300)->nullable()->default('...');
            $table->longText('full_description')->nullable()->default('text');
            $table->text('url')->nullable()->default('https://');
            $table->unsignedbiginteger('category_id');
            $table->json('screenshots')->nullable();
            $table->timestamps();

            $table->index('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demos');
    }
}
