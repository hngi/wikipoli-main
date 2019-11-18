<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddSlugPoliticiansTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('politicians', function($table) {
            $table->string('slug')->after('dob')->unique;
        });
        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
       Schema::table('politicians', function($table) {
        $table->dropColumn('slug');
    });
 

}


}
