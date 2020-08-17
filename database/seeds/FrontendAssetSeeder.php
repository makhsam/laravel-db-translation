<?php

use App\Models\FrontendAsset;
use Illuminate\Database\Seeder;

class FrontendAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'key' => 'home_banner_bg_image',
                'label' => 'Banner background image',
                'description' => null,
                'type' => FrontendAsset::TYPE_IMAGE,
                'url' => '/storage/home/banner-mvd-1920x1080.jpg',
            ],
            [
                'key' => 'home_banner_bg_video',
                'label' => 'Banner background video',
                'description' => null,
                'type' => FrontendAsset::TYPE_VIDEO,
                'url' => '/storage/home/banner-video-mvd.mp4',
            ],
            [
                'key' => 'home_achievements_bg_image',
                'label' => 'Achievements background image',
                'description' => null,
                'type' => FrontendAsset::TYPE_IMAGE,
                'url' => '/storage/home/flag-and-emblem.jpg',
            ],
            [
                'key' => 'home_about_us_video',
                'label' => 'About us video (YouTube link)',
                'description' => null,
                'type' => FrontendAsset::TYPE_LINK,
                'url' => 'https://youtu.be/DLX62G4lc44',
            ],
            [
                'key' => 'footer_contact_1',
                'label' => '+998 99 560-00-20',
                'description' => 'Footer contact phone number #1',
                'type' => FrontendAsset::TYPE_PHONE,
                'url' => 'tel:+998995600020',
            ],
            [
                'key' => 'footer_contact_2',
                'label' => '+998 99 580-00-20',
                'description' => 'Footer contact phone number #2',
                'type' => FrontendAsset::TYPE_PHONE,
                'url' => 'tel:+998995800020',
            ],
            [
                'key' => 'footer_contact_3',
                'label' => '+998 99 560-00-40',
                'description' => 'Footer contact phone number #3',
                'type' => FrontendAsset::TYPE_PHONE,
                'url' => 'tel:+998995600040',
            ],
            [
                'key' => 'footer_contact_4',
                'label' => '+998 99 580-00-40',
                'description' => 'Footer contact phone number #4',
                'type' => FrontendAsset::TYPE_PHONE,
                'url' => 'tel:+998995800040',
            ],
            [
                'key' => 'footer_mobile_appstore_link',
                'label' => 'Mobile App Store link',
                'description' => null,
                'type' => FrontendAsset::TYPE_LINK,
                'url' => 'https://www.apple.com/ios/app-store/',
            ],
            [
                'key' => 'footer_mobile_playmarket_link',
                'label' => 'Mobile Google Play link',
                'description' => null,
                'type' => FrontendAsset::TYPE_LINK,
                'url' => 'https://play.google.com/store/',
            ],
        ];

        FrontendAsset::insert($data);
    }
}
