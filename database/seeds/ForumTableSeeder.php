<?php

use App\Forum;
use Illuminate\Database\Seeder;
use DB ;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Forum::class ,20)->create()->make();
    }
}
