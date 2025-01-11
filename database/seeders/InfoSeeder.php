<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        Information::insert([
            [
                "key" => "name",
                "value" => "Mohammed Saad",
                "created_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "key" => "position",
                "value" => "full-stack developer",
                "created_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "key" => "email",
                "value" => "stm.official@outlook.com",
                "created_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "key" => "phone",
                "value" => "01128236661",
                "created_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "key" => "bio",
                "value" => "Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt.
                
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                                        
                        Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.",
                "created_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "key" => "get in touch",
                "value" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem expedita aperiam aliquid at. Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis mollitia inventore?",
                "created_at" => now()->format("Y-m-d H:i:s"),
            ],
            [
                "key" => "skills",
                "value" => json_encode([
                    ["HTML"=> "85%"],
                    ["CSS3"=> "75%"],
                    ["PHP"=> "75%"],
                    ["JAVASCRIPT"=> "90%"],
                ]),
                "created_at" => now()->format("Y-m-d H:i:s"),
            ],
        ]);
    }
}
