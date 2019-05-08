<?php namespace BsbVolmachten\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenTestimonialsMain extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_testimonials_main', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_testimonials_main', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
