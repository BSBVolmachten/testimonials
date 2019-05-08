<?php namespace BsbVolmachten\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenTestimonialsMain extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_testimonials_main', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('description', 255);
            $table->string('review', 400);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_testimonials_main');
    }
}
