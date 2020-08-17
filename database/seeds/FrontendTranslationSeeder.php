<?php

use App\Models\FrontendTranslation;
use App\Models\FrontendTranslationGroup;
use Illuminate\Database\Seeder;

class FrontendTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = FrontendTranslationGroup::get()
            ->mapWithKeys(function ($group) {
                return [$group['name'] => $group['id']];
            })->all();

        /*
            $groups = [
                'validation' => 1,
                'footer' => '2',
            ]
        */

        $data = [
            [
                'key' => 'validation_required',
                'group_id' => $groups['validation']
            ],
            [
                'key' => 'validation_too_short',
                'group_id' => $groups['validation']
            ],
            [
                'key' => 'validation_too_long',
                'group_id' => $groups['validation']
            ],
            [
                'key' => 'validation_password_not_match',
                'group_id' => $groups['validation']
            ],
            [
                'key' => 'validation_phone_exist',
                'group_id' => $groups['validation']
            ],

            [
                'key' => 'footer_address_title',
                'group_id' => $groups['footer']
            ],
            [
                'key' => 'footer_address_value',
                'group_id' => $groups['footer']
            ],
            [
                'key' => 'footer_contact_title',
                'group_id' => $groups['footer']
            ],
            [
                'key' => 'footer_mobile_title',
                'group_id' => $groups['footer']
            ],
            [
                'key' => 'footer_mobile_available_on',
                'group_id' => $groups['footer']
            ],
            [
                'key' => 'footer_mobile_get_it_on',
                'group_id' => $groups['footer']
            ],

            [
                'key' => '404_title',
                'group_id' => $groups['404']
            ],
            [
                'key' => '404_description',
                'group_id' => $groups['404']
            ],
            [
                'key' => '404_back_to_home',
                'group_id' => $groups['404']
            ],

            [
                'key' => 'home_banner_title',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_banner_subtitle',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_achievements_title',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_achievements_subtitle',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_achievements_students',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_achievements_graduates',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_achievements_free_courses',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_achievements_active_courses',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_categories_title',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_categories_subtitle',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_about_title',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_about_subtitle',
                'group_id' => $groups['home']
            ],
            [
                'key' => 'home_about_desc',
                'group_id' => $groups['home']
            ],

            [
                'key' => 'subscription_FUNDED',
                'group_id' => $groups['subscription']
            ],
            [
                'key' => 'subscription_ONE_TIME',
                'group_id' => $groups['subscription']
            ],
            [
                'key' => 'subscription_plan',
                'group_id' => $groups['subscription']
            ],
            [
                'key' => 'subscription_expire_date',
                'group_id' => $groups['subscription']
            ],
            [
                'key' => 'subscription_amount',
                'group_id' => $groups['subscription']
            ],

            [
                'key' => 'search_title',
                'group_id' => $groups['search']
            ],
            [
                'key' => 'search_short_title',
                'group_id' => $groups['search']
            ],

            [
                'key' => 'auth_login',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_register',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_login_to_your_account',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_no_account',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_remember_me',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_forgot_password',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_new_account',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_have_account',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_be_instructor',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_we_send_code',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_confirm_phone',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_we_sent_code',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_resend_code',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_have_code',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_confirm_code',
                'group_id' => $groups['auth']
            ],
            [
                'key' => 'auth_reset_password',
                'group_id' => $groups['auth']
            ],

            [
                'key' => 'input_first_name',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_last_name',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_password',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_confirm_password',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_reset_password',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_new_password',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_amount',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_phone_number',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_enter_first_name',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_enter_last_name',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_enter_current_password',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_enter_new_current_password',
                'group_id' => $groups['input']
            ],
            [
                'key' => 'input_confirm_new_password',
                'group_id' => $groups['input']
            ],

            [
                'key' => 'alert_password_changed',
                'group_id' => $groups['alert']
            ],
            [
                'key' => 'alert_something_went_wrong',
                'group_id' => $groups['alert']
            ],
            [
                'key' => 'alert_verified',
                'group_id' => $groups['alert']
            ],
            [
                'key' => 'alert_code_has_been_sent',
                'group_id' => $groups['alert']
            ],
            [
                'key' => 'alert_we_sent_code',
                'group_id' => $groups['alert']
            ],

            [
                'key' => 'button_send',
                'group_id' => $groups['button']
            ],
            [
                'key' => 'button_submit',
                'group_id' => $groups['button']
            ],
            [
                'key' => 'button_cancel',
                'group_id' => $groups['button']
            ],
            [
                'key' => 'button_start',
                'group_id' => $groups['button']
            ],
            [
                'key' => 'button_save_changes',
                'group_id' => $groups['button']
            ],
            [
                'key' => 'button_verify',
                'group_id' => $groups['button']
            ],
            [
                'key' => 'button_view_all',
                'group_id' => $groups['button']
            ],
            [
                'key' => 'button_view_more',
                'group_id' => $groups['button']
            ],

            [
                'key' => 'payment_choose_plan',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_details',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_plan',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_method',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_period',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_subtotal',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_total',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_choose_method',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_unlimited',
                'group_id' => $groups['payment']
            ],
            [
                'key' => 'payment_discount',
                'group_id' => $groups['payment']
            ],

            [
                'key' => 'profile_balance',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_courses',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_subscriptions',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_transactions',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_sessions',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_balance_statistics',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_logout',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_general_info',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_change_password',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_settings',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_not_verified',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_top_up_balance',
                'group_id' => $groups['profile']
            ],
            [
                'key' => 'profile_top_up_for',
                'group_id' => $groups['profile']
            ],

            [
                'key' => 'course_purchased',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_completed',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_best_seller',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_browse_top',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_ratings',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_review',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_overview',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_instructor',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_price',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_buy_now',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_feedbacks',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_stars',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_preview',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_enrolled',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_add_review',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_rate',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_purchased_at',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_completed_at',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_trial',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_references',
                'group_id' => $groups['course']
            ],
            [
                'key' => 'course_attached_files',
                'group_id' => $groups['course']
            ],

            [
                'key' => 'comment_no_comment',
                'group_id' => $groups['comment']
            ],
            [
                'key' => 'comment_reply',
                'group_id' => $groups['comment']
            ],
            [
                'key' => 'comment_leave_comment',
                'group_id' => $groups['comment']
            ],
            [
                'key' => 'comment_write_reply',
                'group_id' => $groups['comment']
            ],

            [
                'key' => 'session_signed_in',
                'group_id' => $groups['session']
            ],
            [
                'key' => 'session_logged_out',
                'group_id' => $groups['session']
            ],

            [
                'key' => 'global_course',
                'group_id' => $groups['global']
            ],
            [
                'key' => 'global_courses',
                'group_id' => $groups['global']
            ],
            [
                'key' => 'global_no_data',
                'group_id' => $groups['global']
            ],
            [
                'key' => 'global_month',
                'group_id' => $groups['global']
            ],
            [
                'key' => 'profile_account_settings',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_account',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_my_personal_data',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_account_title',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_phone_number',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_viewing_history',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_subscriptions',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_payment_history',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_courses',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_comments',
                'group_id' => $groups['account']
            ],
            [
                'key' => 'profile_delete_agreement',
                'group_id' => $groups['account']
            ],
        ];

        // Insert data
        FrontendTranslation::insert($data);

        // Update value attribute
        FrontendTranslation::get()
            ->each(function ($translation) {
                $updatedKey = ucwords(str_replace('_', ' ', $translation->key));

                $translation->value = [
                    'ru' => $updatedKey,
                    'oz' => $updatedKey,
                ];

                $translation->save();
            });

        FrontendTranslation::create([
            'key' => 'home_banner_title',
            'value' => [
                'en' => 'Main Department of Crime Prevention of the Ministry of Internal Affairs of the Republic of Uzbekistan',
                'ru' => 'Главное управление профилактики правонарушений Министерства внутренних дел Республики Узбекистан',
                'uz' => 'O‘zbekiston Respublikasi ichki ishlar vazirligi huquqbuzarliklar profilaktikasi bosh boshqarmasi',
                'oz' => 'Ўзбекистон Республикаси ички ишлар вазирлиги ҳуқуқбузарликлар профилактикаси бош бошқармаси',
            ],
            'group_id' => 1
        ]);
    }
}
