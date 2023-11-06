<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("settings")->insert([
            "key" => "language", 
            "value" => "english"
        ]);
        
        DB::table("settings")->insert([
            "key" => "system_name", 
            "value" => "Academy"
        ]);
        
        DB::table("settings")->insert([
            "key" => "system_title", 
            "value" => "Academy Learning Club"
        ]);
        
        DB::table("settings")->insert([
            "key" => "system_email", 
            "value" => "academy@example.com"
        ]);
        
        DB::table("settings")->insert([
            "key" => "address", 
            "value" => "Sydney, Australia"
        ]);
        
        DB::table("settings")->insert([
            "key" => "phone", 
            "value" => "+143-52-9933631"
        ]);
        
        DB::table("settings")->insert([
            "key" => "purchase_code", 
            "value" => "your-purchase-code"
        ]);
        
        DB::table("settings")->insert([
            "key" => "paypal", 
            "value" => '[{"active":"1","mode":"sandbox","sandbox_client_id":"AfGaziKslex-scLAyYdDYXNFaz2aL5qGau-SbDgE_D2E80D3AFauLagP8e0kCq9au7W4IasmFbirUUYc","sandbox_secret_key":"EMa5pCTuOpmHkhHaCGibGhVUcKg0yt5-C3CzJw-OWJCzaXXzTlyD17SICob_BkfM_0Nlk7TWnN42cbGz","production_client_id":"1234","production_secret_key":"12345"}]'
        ]);
        
        DB::table("settings")->insert([
            "key" => "stripe_keys", 
            "value" => '[{"active":"1","testmode":"on","public_key":"pk_test_CAC3cB1mhgkJqXtypYBTGb4f","secret_key":"sk_test_iatnshcHhQVRXdygXw3L2Pp2","public_live_key":"pk_live_xxxxxxxxxxxxxxxxxxxxxxxx","secret_live_key":"sk_live_xxxxxxxxxxxxxxxxxxxxxxxx"}]'
        ]);
        
        DB::table("settings")->insert([
            "key" => "youtube_api_key", 
            "value" => "youtube-api-key"
        ]);
        
        DB::table("settings")->insert([
            "key" => "vimeo_api_key", 
            "value" => "39258384b69994dba483c10286825b5c"
        ]);
        
        DB::table("settings")->insert([
            "key" => "slogan", 
            "value" => "A course based video CMS"
        ]);
        
        DB::table("settings")->insert([
            "key" => "text_align", 
            "value" => ""
        ]);
        
        DB::table("settings")->insert([
            "key" => "allow_instructor", 
            "value" => "1"
        ]);
        
        DB::table("settings")->insert([
            "key" => "instructor_revenue", 
            "value" => "70"
        ]);
        
        DB::table("settings")->insert([
            "key" => "system_currency", 
            "value" => "USD"
        ]);
        
        DB::table("settings")->insert([
            "key" => "paypal_currency", 
            "value" => "USD"
        ]);
        
        DB::table("settings")->insert([
            "key" => "stripe_currency", 
            "value" => "USD"
        ]);
        
        DB::table("settings")->insert([
            "key" => "author", 
            "value" => "Creativeitem"
        ]);
        
        DB::table("settings")->insert([
            "key" => "currency_position", 
            "value" => "left"
        ]);
        
        DB::table("settings")->insert([
            "key" => "website_description", 
            "value" => "Study any topic, anytime. explore thousands of courses for the lowest price ever!"
        ]);
        
        DB::table("settings")->insert([
            "key" => "website_keywords", 
            "value" => "LMS,Learning Management System,Creativeitem,Academy LMS"
        ]);
        
        DB::table("settings")->insert([
            "key" => "footer_text", 
            "value" => ""
        ]);
        
        DB::table("settings")->insert([
            "key" => "footer_link", 
            "value" => "http://creativeitem.com/"
        ]);
        
        DB::table("settings")->insert([
            "key" => "protocol", 
            "value" => "smtp"
        ]);
        
        DB::table("settings")->insert([
            "key" => "smtp_host", 
            "value" => "smtp.gmail.com"
        ]);
        
        DB::table("settings")->insert([
            "key" => "smtp_port", 
            "value" => "587"
        ]);
        
        DB::table("settings")->insert([
            "key" => "smtp_user", 
            "value" => "your-email-address"
        ]);
        
        DB::table("settings")->insert([
            "key" => "smtp_pass", 
            "value" => "your-email-password"
        ]);
        
        DB::table("settings")->insert([
            "key" => "version", 
            "value" => "5.14"
        ]);
        
        DB::table("settings")->insert([
            "key" => "student_email_verification", 
            "value" => "disable"
        ]);
        
        DB::table("settings")->insert([
            "key" => "instructor_application_note", 
            "value" => "Fill all the fields carefully and share if you want to share any document with us it will help us to evaluate you as an instructor."
        ]);
        
        DB::table("settings")->insert([
            "key" => "razorpay_keys", 
            "value" => '[{"active":"1","key":"rzp_test_J60bqBOi1z1aF5","secret_key":"uk935K7p4j96UCJgHK8kAU4q","theme_color":"#c7a600"}]'
        ]);
        
        DB::table("settings")->insert([
            "key" => "razorpay_currency", 
            "value" => "USD"
        ]);
        
        DB::table("settings")->insert([
            "key" => "fb_app_id", 
            "value" => "facebook-app-id"
        ]);
        
        DB::table("settings")->insert([
            "key" => "fb_app_secret", 
            "value" => "facebook-app-secret-key"
        ]);
        
        DB::table("settings")->insert([
            "key" => "fb_social_login", 
            "value" => "0"
        ]);
        
        DB::table("settings")->insert([
            "key" => "drip_content_settings", 
            "value" => '{"lesson_completion_role":"percentage","minimum_duration":10,"minimum_percentage":"50","locked_lesson_message":"&lt;h3 xss=&quot;removed&quot; style=&quot;text-align: center; &quot;&gt;&lt;span xss=&quot;removed&quot;&gt;&lt;strong&gt;Permission denied!&lt;\/strong&gt;&lt;\/span&gt;&lt;\/h3&gt;&lt;p xss=&quot;removed&quot; style=&quot;text-align: center; &quot;&gt;&lt;span xss=&quot;removed&quot;&gt;This course supports drip content, so you must complete the previous lessons.&lt;\/span&gt;&lt;\/p&gt;"}'
        ]);
        
        DB::table("settings")->insert([
            "key" => "course_accessibility", 
            "value" => "publicly"
        ]);
        
        DB::table("settings")->insert([
            "key" => "smtp_crypto", 
            "value" => "tls"
        ]);
        
        DB::table("settings")->insert([
            "key" => "allowed_device_number_of_loging", 
            "value" => "10"
        ]);
        
        DB::table("settings")->insert([
            "key" => "academy_cloud_access_token", 
            "value" => "jdfghasdfasdfasdfasdfasdf"
        ]);
        
        DB::table("settings")->insert([
            "key" => "course_selling_tax", 
            "value" => "10"
        ]);
        
        DB::table("settings")->insert([
            "key" => "ccavenue_keys", 
            "value" => '[{"active":"1","ccavenue_merchant_id":"cmi_xxxxxx","ccavenue_working_key":"cwk_xxxxxxxxxxxx","ccavenue_access_code":"ccc_xxxxxxxxxxxxx"}]'
        ]);
        
        DB::table("settings")->insert([
            "key" => "ccavenue_currency", 
            "value" => 'INR'
        ]);
        
        DB::table("settings")->insert([
            "key" => "iyzico_keys", 
            "value" => '[{"active":"1","testmode":"on","iyzico_currency":"TRY","api_test_key":"atk_xxxxxxxx","secret_test_key":"stk_xxxxxxxx","api_live_key":"alk_xxxxxxxx","secret_live_key":"slk_xxxxxxxx"}]'
        ]);
        
        DB::table("settings")->insert([
            "key" => "iyzico_currency", 
            "value" => "TRY"
        ]);
        
        DB::table("settings")->insert([
            "key" => "paystack_keys", 
            "value" => '[{"active":"1","testmode":"on","secret_test_key":"sk_test_c746060e693dd50c6f397dffc6c3b2f655217c94","public_test_key":"pk_test_0816abbed3c339b8473ff22f970c7da1c78cbe1b","secret_live_key":"sk_live_xxxxxxxxxxxxxxxxxxxxx","public_live_key":"pk_live_xxxxxxxxxxxxxxxxxxxxx"}]'
        ]);
        
        DB::table("settings")->insert([
            "key" => "paystack_currency", 
            "value" => "NGN"
        ]);
        
        DB::table("settings")->insert([
            "key" => "paytm_keys", 
            "value" => '[{"PAYTM_MERCHANT_KEY":"PAYTM_MERCHANT_KEY","PAYTM_MERCHANT_MID":"PAYTM_MERCHANT_MID","PAYTM_MERCHANT_WEBSITE":"DEFAULT","INDUSTRY_TYPE_ID":"Retail","CHANNEL_ID":"WEB"}]'
        ]);
        
        DB::table("settings")->insert([
            "key" => "google_analytics_id", 
            "value" => ""
        ]);
        
        DB::table("settings")->insert([
            "key" => "meta_pixel_id", 
            "value" => ""
        ]);
    }
}
