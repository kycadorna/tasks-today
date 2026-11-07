<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::create([
            'title' => 'Review Laravel lessons',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Complete database migration',
            'status' => 'completed',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Study Eloquent models',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Read technical assessment instructions',
            'status' => 'pending',
            'task_date' => now()->subDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Organize project files',
            'status' => 'completed',
            'task_date' => now()->subDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Prepare project documentation',
            'status' => 'pending',
            'task_date' => now()->addDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Test application routes',
            'status' => 'pending',
            'task_date' => now()->addDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Submit GitHub repository',
            'status' => 'pending',
            'task_date' => now()->addDays(2)->toDateString(),
        ]);
    }
}