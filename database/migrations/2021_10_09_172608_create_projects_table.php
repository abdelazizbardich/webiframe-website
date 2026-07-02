<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable();
            $table->string('slug', 70)->nullable();
            $table->text('short_description' ,300)->nullable();
            $table->longText('full_description')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('full_thumbnail')->nullable();
            $table->text('url')->nullable();
            $table->unsignedbiginteger('category_id');
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
        Schema::dropIfExists('projects');
    }
}
