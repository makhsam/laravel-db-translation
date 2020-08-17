<?php

use App\Models\FrontendTranslationGroup;
use Illuminate\Database\Seeder;

class FrontendTranslationGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FrontendTranslationGroup::insert([
            ['name' => 'validation', 'label' => 'Validation'],
            ['name' => 'footer', 'label' => 'Footer'],
            ['name' => '404', 'label' => '404 Not Found'],
            ['name' => 'home', 'label' => 'Home'],
            ['name' => 'subscription', 'label' => 'Subscription'],
            ['name' => 'search', 'label' => 'Search'],
            ['name' => 'auth', 'label' => 'Authentication'],
            ['name' => 'input', 'label' => 'Input'],
            ['name' => 'alert', 'label' => 'Alert'],
            ['name' => 'button', 'label' => 'Button'],
            ['name' => 'payment', 'label' => 'Payment'],
            ['name' => 'profile', 'label' => 'Profile'],
            ['name' => 'course', 'label' => 'Course'],
            ['name' => 'comment', 'label' => 'Comment'],
            ['name' => 'session', 'label' => 'Session'],
            ['name' => 'global', 'label' => 'Global'],
            ['name' => 'account', 'label' => 'Account Settings'],
        ]);
    }
}
