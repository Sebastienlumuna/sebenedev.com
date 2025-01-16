<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Commentaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * Seed the application's database.
     * @return void
     * @tools array<string>
     */
    public function run(): void
    {
        //

        $tools = ['Laravel', 'React', 'Vue', 'Tailwind', 'Bootstrap'];

        Project::factory(10)->hasCommentaires(3)
        ->create([
            'tools' => fn () => $tools[array_rand($tools)],
        ]);
    }
}
