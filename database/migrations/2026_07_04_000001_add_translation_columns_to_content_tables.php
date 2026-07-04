<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddTranslationColumnsToContentTables extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->text('name_translations')->nullable()->after('name');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->text('title_translations')->nullable()->after('title');
            $table->text('short_description_translations')->nullable()->after('short_description');
            $table->longText('full_description_translations')->nullable()->after('full_description');
        });

        Schema::table('demos', function (Blueprint $table) {
            $table->text('title_translations')->nullable()->after('title');
            $table->text('short_description_translations')->nullable()->after('short_description');
            $table->longText('full_description_translations')->nullable()->after('full_description');
        });

        DB::table('categories')->orderBy('id')->chunkById(100, function ($categories) {
            foreach ($categories as $category) {
                DB::table('categories')
                    ->where('id', $category->id)
                    ->update([
                        'name_translations' => $this->duplicateAcrossLocales($category->name),
                    ]);
            }
        });

        DB::table('projects')->orderBy('id')->chunkById(100, function ($projects) {
            foreach ($projects as $project) {
                DB::table('projects')
                    ->where('id', $project->id)
                    ->update([
                        'title_translations' => $this->duplicateAcrossLocales($project->title),
                        'short_description_translations' => $this->duplicateAcrossLocales($project->short_description),
                        'full_description_translations' => $this->duplicateAcrossLocales($project->full_description),
                    ]);
            }
        });

        DB::table('demos')->orderBy('id')->chunkById(100, function ($demos) {
            foreach ($demos as $demo) {
                DB::table('demos')
                    ->where('id', $demo->id)
                    ->update([
                        'title_translations' => $this->duplicateAcrossLocales($demo->title),
                        'short_description_translations' => $this->duplicateAcrossLocales($demo->short_description),
                        'full_description_translations' => $this->duplicateAcrossLocales($demo->full_description),
                    ]);
            }
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('name_translations');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'title_translations',
                'short_description_translations',
                'full_description_translations',
            ]);
        });

        Schema::table('demos', function (Blueprint $table) {
            $table->dropColumn([
                'title_translations',
                'short_description_translations',
                'full_description_translations',
            ]);
        });
    }

    protected function duplicateAcrossLocales($value): string
    {
        $translations = [];

        foreach (['en', 'fr', 'ar'] as $locale) {
            $translations[$locale] = $value;
        }

        return json_encode($translations, JSON_UNESCAPED_UNICODE);
    }
}