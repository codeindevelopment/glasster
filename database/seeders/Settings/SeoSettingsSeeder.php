<?php

namespace Database\Seeders\Settings;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_global_settings')->insert([
            "id" => 1,
            'site_default_title' => "",
            'default_index' => true,
            'default_follow' => true,
            'default_meta_description' => "",
            'default_twitter_cardtype' => "",
            'default_twitter_site' => "",
            'default_twitter_handle' => "",
            'default_og_url' => "",
            'default_og_sitename' => "",
            'default_og_title' => "",
            'default_og_type' => "",
            'default_og_locale' => "",
            'default_og_description' => "",
            'default_og_image' => "",
            'default_twitter_title' => "",
            'default_twitter_description' => "",
            'default_twitter_image' => "",
            'default_facebook_title' => "",
            'default_facebook_description' => "",
            'default_facebook_image' => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
