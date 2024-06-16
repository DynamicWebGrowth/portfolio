<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'about_title' => 'Software Developer',
            'about_description' => 'Hi, I\'m Vishvas Upadhyay, a Full-Stack Developer specializing in web development and UX/UI design.',
            'fb_url' => 'https://www.linkedin.com/in/vishvas-upadhyay-02b6b5212/',
            'github_url' => 'https://www.linkedin.com/in/vishvas-upadhyay-02b6b5212/',
            'linkedin_url' => 'https://www.linkedin.com/in/vishvas-upadhyay-02b6b5212/',
            'freelance_url' => 'https://www.linkedin.com/in/vishvas-upadhyay-02b6b5212/',
            'cv_url' => 'assets/admin/resumes/Vishvas_upadhyay__-_SDE.pdf',
            'video_url' => 'https://www.linkedin.com/in/vishvas-upadhyay-02b6b5212/'
        ]);

        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Vishvas Upadhyay',
            'email' => 'vishvasupdhyay52525@gmail.com',
            'password' => bcrypt('Vishvas@52'), // Update with your desired password
        ]);
    }
}
