<?php namespace Bsbvolmachten\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenTestimonialsMain2 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_testimonials_main', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_testimonials_main', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}