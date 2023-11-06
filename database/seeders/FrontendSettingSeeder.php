<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrontendSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("frontend_settings")->insert([
            "key" => "banner_title", 
            "value" => "Start learning from best Platform"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "banner_sub_title", 
            "value" => "Study any topic, anytime. Explore thousands of courses for the lowest price ever!"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "about_us", 
            "value" => '<p></p><h2><span xss=removed>This is about us</span></h2><p><span xss="removed">Welcome to Academy. It will help you to learn in a new ways</span></p>'
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "terms_and_condition", 
            "value" => "<h2>Terms and Condition</h2>This is the Terms and condition page for your companys"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "privacy_policy", 
            "value" => '<p></p><p></p><h2><span xss="removed">Privacy Policy</span><br></h2>This is the Privacy Policy page for your companys<p></p><p><b>This is another</b> <u><a href="https://youtube.com/watch?v=PHgc8Q6qTjc" target="_blank">thing you will</a></u> <span xss="removed">not understand</span>.</p>'
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "theme", 
            "value" => "default"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "cookie_note", 
            "value" => "This website uses cookies to personalize content and analyse traffic in order to offer you a better experience."
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "cookie_status", 
            "value" => "active"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "cookie_policy", 
            "value" => "<h1>Cookie policy</h1><ol><li>Cookies are small text files that can be used by websites to make a user's experience more efficient.</li><li>The law states that we can store cookies on your device if they are strictly necessary for the operation of this site. For all other types of cookies we need your permission.</li><li>This site uses different types of cookies. Some cookies are placed by third party services that appear on our pages.</li></ol>"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "banner_image", 
            "value" => "home-banner.jpg"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "light_logo", 
            "value" => "logo-light.png"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "dark_logo", 
            "value" => "logo-dark.png"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "small_logo", 
            "value" => "logo-light-sm.png"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "favicon", 
            "value" => "favicon.png"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "recaptcha_status", 
            "value" => "0"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "recaptcha_secretkey", 
            "value" => "Valid-secret-key"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "recaptcha_sitekey", 
            "value" => "Valid-site-key"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "refund_policy", 
            "value" => '<h2><span xss="removed">Refund Policy</span></h2>'
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "facebook", 
            "value" => "https://facebook.com"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "twitter", 
            "value" => "https://twitter.com"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "linkedin", 
            "value" => ""
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "blog_page_title", 
            "value" => "Where possibilities begin"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "blog_page_subtitle", 
            "value" => "We’re a leading marketplace platform for learning and teaching online. Explore some of our most popular content and learn something new."
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "blog_page_banner", 
            "value" => "blog-page.png"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "instructors_blog_permission", 
            "value" => "0"
        ]);
        
        DB::table("frontend_settings")->insert([
            "key" => "blog_visibility_on_the_home_page", 
            "value" => "1"
        ]);
    }
}
