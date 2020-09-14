<?php

use Illuminate\Database\Seeder;
use App\Conversation;

class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::create([
        	'user_id' => 1,
            'contact_id' => 2,
            
            //ultimo mensaje
            'last_message' => null,
            'last_time' => null
        ]);

         Conversation::create([
        	'user_id' => 2,
            'contact_id' => 1,
            
            //ultimo mensaje
            'last_message' => null,
            'last_time' => null
        ]);
    }
}
