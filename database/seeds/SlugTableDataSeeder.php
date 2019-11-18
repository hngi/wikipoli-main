<?php

use Illuminate\Database\Seeder;
use App\Politician;
class SlugTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $slug = Politician::all();
        foreach ($slug as $value) {
            $value->update([
               'slug' => str_slug($value->first_name.' '. $value->last_name,'-') 
            ]);
        }
    }
}
