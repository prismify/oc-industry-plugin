<?php namespace Prismify\Industry\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateIndustriesTable extends Migration
{
    public function up()
    {
        Schema::create('prismify_industry_industries', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('is_enabled')->default(false);
            $table->string('name')->index();
            $table->string('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prismify_industry_industries');
    }
}
