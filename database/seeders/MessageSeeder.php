<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Message::insert([
            0 => [
                'sender_id' => 1,
                'receiver_id' => 2,
                'group' => 1,
                'message' => 'Naber tospikkk',
                'created_at' => Carbon::now()
            ] ,
            1 => [
                'sender_id' => 2,
                'receiver_id' => 1,
                'group' => 1,
                'message' => 'İyidir abiii',
                'created_at' => Carbon::now()
            ]
        ]);

    }

}
