<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("currencies")->insert([
            "name" => "US Dollar", 
            "code" => "USD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Albanian Lek", 
            "code" => "ALL", 
            "symbol" => "Lek",
            "paypal_supported" => "0",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Algerian Dinar", 
            "code" => "DZD", 
            "symbol" => "دج",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Angolan Kwanza", 
            "code" => "AOA", 
            "symbol" => "Kz",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Argentine Peso", 
            "code" => "ARS", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Armenian Dram", 
            "code" => "AMD", 
            "symbol" => "֏",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Aruban Florin", 
            "code" => "AWG", 
            "symbol" => "ƒ",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Australian Dollar", 
            "code" => "AUD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Azerbaijani Manat", 
            "code" => "AZN", 
            "symbol" => "m",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bahamian Dollar", 
            "code" => "BSD", 
            "symbol" => "B$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bahraini Dinar", 
            "code" => "BHD", 
            "symbol" => ".د.ب",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bangladeshi Taka", 
            "code" => "BDT", 
            "symbol" => "৳",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Barbadian Dollar", 
            "code" => "BBD", 
            "symbol" => "Bds$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Belarusian Ruble", 
            "code" => "BYR", 
            "symbol" => "Br",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Belgian Franc", 
            "code" => "BEF", 
            "symbol" => "fr",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Belize Dollar", 
            "code" => "BZD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bermudan Dollar", 
            "code" => "BMD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bhutanese Ngultrum", 
            "code" => "BTN", 
            "symbol" => "Nu.",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bitcoin", 
            "code" => "BTC", 
            "symbol" => "฿",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bolivian Boliviano", 
            "code" => "BOB", 
            "symbol" => "Bs.",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bosnia", 
            "code" => "BAM", 
            "symbol" => "KM",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Botswanan Pula", 
            "code" => "BWP", 
            "symbol" => "P",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Brazilian Real", 
            "code" => "BRL", 
            "symbol" => "R$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "British Pound Sterling", 
            "code" => "GBP", 
            "symbol" => "£",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Brunei Dollar", 
            "code" => "BND", 
            "symbol" => "B$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Bulgarian Lev", 
            "code" => "BGN", 
            "symbol" => "Лв.",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Burundian Franc", 
            "code" => "BIF", 
            "symbol" => "FBu",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Cambodian Riel", 
            "code" => "KHR", 
            "symbol" => "KHR",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Canadian Dollar", 
            "code" => "CAD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Cape Verdean Escudo", 
            "code" => "CVE", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Cayman Islands Dollar", 
            "code" => "KYD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "CFA Franc BCEAO", 
            "code" => "XOF", 
            "symbol" => "CFA",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "CFA Franc BEAC", 
            "code" => "XAF", 
            "symbol" => "FCFA",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "CFP Franc", 
            "code" => "XPF", 
            "symbol" => "₣",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Chilean Peso", 
            "code" => "CLP", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Chinese Yuan", 
            "code" => "CNY", 
            "symbol" => "¥",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Colombian Peso", 
            "code" => "COP", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Comorian Franc", 
            "code" => "KMF", 
            "symbol" => "CF",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Congolese Franc", 
            "code" => "CDF", 
            "symbol" => "FC",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Costa Rican ColÃ³n", 
            "code" => "CRC", 
            "symbol" => "₡",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Croatian Kuna", 
            "code" => "HRK", 
            "symbol" => "kn",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Cuban Convertible Peso", 
            "code" => "CUC", 
            "symbol" => "$, CUC",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Czech Republic Koruna", 
            "code" => "CZK", 
            "symbol" => "Kč",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Danish Krone", 
            "code" => "DKK", 
            "symbol" => "Kr.",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Djiboutian Franc", 
            "code" => "DJF", 
            "symbol" => "Fdj",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Dominican Peso", 
            "code" => "DOP", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "East Caribbean Dollar", 
            "code" => "XCD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Egyptian Pound", 
            "code" => "EGP", 
            "symbol" => "ج.م",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Eritrean Nakfa", 
            "code" => "ERN", 
            "symbol" => "Nfk",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Estonian Kroon", 
            "code" => "EEK", 
            "symbol" => "kr",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Ethiopian Birr", 
            "code" => "ETB", 
            "symbol" => "Nkf",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Euro", 
            "code" => "EUR", 
            "symbol" => "€",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Falkland Islands Pound", 
            "code" => "FKP", 
            "symbol" => "£",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Fijian Dollar", 
            "code" => "FJD", 
            "symbol" => "FJ$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Gambian Dalasi", 
            "code" => "GMD", 
            "symbol" => "D",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Georgian Lari", 
            "code" => "GEL", 
            "symbol" => "ლ",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "German Mark", 
            "code" => "DEM", 
            "symbol" => "DM",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Ghanaian Cedi", 
            "code" => "GHS", 
            "symbol" => "GH₵",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Gibraltar Pound", 
            "code" => "GIP", 
            "symbol" => "£",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Greek Drachma", 
            "code" => "GRD", 
            "symbol" => "₯, Δρχ, Δρ",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Guatemalan Quetzal", 
            "code" => "GTQ", 
            "symbol" => "Q",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Guinean Franc", 
            "code" => "GNF", 
            "symbol" => "FG",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Guyanaese Dollar", 
            "code" => "GYD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Haitian Gourde", 
            "code" => "HTG", 
            "symbol" => "G",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Honduran Lempira", 
            "code" => "HNL", 
            "symbol" => "L",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Hong Kong Dollar", 
            "code" => "HKD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Hungarian Forint", 
            "code" => "HUF", 
            "symbol" => "Ft",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Icelandic KrÃ³na", 
            "code" => "ISK", 
            "symbol" => "kr",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Indian Rupee", 
            "code" => "INR", 
            "symbol" => "₹",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "1",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Indonesian Rupiah", 
            "code" => "IDR", 
            "symbol" => "Rp",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Iranian Rial", 
            "code" => "IRR", 
            "symbol" => "﷼",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Iraqi Dinar", 
            "code" => "IQD", 
            "symbol" => "د.ع",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Israeli New Sheqel", 
            "code" => "ILS", 
            "symbol" => "₪",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Italian Lira", 
            "code" => "ITL", 
            "symbol" => "L,£",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Jamaican Dollar", 
            "code" => "JMD", 
            "symbol" => "J$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Japanese Yen", 
            "code" => "JPY", 
            "symbol" => "¥",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Jordanian Dinar", 
            "code" => "JOD", 
            "symbol" => "ا.د",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Kazakhstani Tenge", 
            "code" => "KZT", 
            "symbol" => "лв",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Kenyan Shilling", 
            "code" => "KES", 
            "symbol" => "KSh",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Kuwaiti Dinar", 
            "code" => "KWD", 
            "symbol" => "ك.د",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Kyrgystani Som", 
            "code" => "KGS", 
            "symbol" => "лв",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Laotian Kip", 
            "code" => "LAK", 
            "symbol" => "₭",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Latvian Lats", 
            "code" => "LVL", 
            "symbol" => "Ls",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Lebanese Pound", 
            "code" => "LBP", 
            "symbol" => "£",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Lesotho Loti", 
            "code" => "LSL", 
            "symbol" => "L",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Liberian Dollar", 
            "code" => "LRD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Libyan Dinar", 
            "code" => "LYD", 
            "symbol" => "د.ل",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Lithuanian Litas", 
            "code" => "LTL", 
            "symbol" => "Lt",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Macanese Pataca", 
            "code" => "MOP", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Macedonian Denar", 
            "code" => "MKD", 
            "symbol" => "ден",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Malagasy Ariary", 
            "code" => "MGA", 
            "symbol" => "Ar",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Malawian Kwacha", 
            "code" => "MWK", 
            "symbol" => "MK",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Malaysian Ringgit", 
            "code" => "MYR", 
            "symbol" => "RM",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Maldivian Rufiyaa", 
            "code" => "MVR", 
            "symbol" => "Rf",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Mauritanian Ouguiya", 
            "code" => "MRO", 
            "symbol" => "MRU",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Mauritian Rupee", 
            "code" => "MUR", 
            "symbol" => "₨",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Mexican Peso", 
            "code" => "MXN", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Moldovan Leu", 
            "code" => "MDL", 
            "symbol" => "L",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Mongolian Tugrik", 
            "code" => "MNT", 
            "symbol" => "₮",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Moroccan Dirham", 
            "code" => "MAD", 
            "symbol" => "MAD",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Mozambican Metical", 
            "code" => "MZM", 
            "symbol" => "MT",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Myanmar Kyat", 
            "code" => "MMK", 
            "symbol" => "K",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Namibian Dollar", 
            "code" => "NAD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Nepalese Rupee", 
            "code" => "NPR", 
            "symbol" => "₨",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Netherlands Antillean Guilder", 
            "code" => "ANG", 
            "symbol" => "ƒ",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "New Taiwan Dollar", 
            "code" => "TWD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "New Zealand Dollar", 
            "code" => "NZD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Nicaraguan CÃ³rdoba", 
            "code" => "NIO", 
            "symbol" => "C$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Nigerian Naira", 
            "code" => "NGN", 
            "symbol" => "₦",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "1"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "North Korean Won", 
            "code" => "KPW", 
            "symbol" => "₩",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Norwegian Krone", 
            "code" => "NOK", 
            "symbol" => "kr",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Omani Rial", 
            "code" => "OMR", 
            "symbol" => ".ع.ر",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Pakistani Rupee", 
            "code" => "PKR", 
            "symbol" => "₨",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Panamanian Balboa", 
            "code" => "PAB", 
            "symbol" => "B/.",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Papua New Guinean Kina", 
            "code" => "PGK", 
            "symbol" => "K",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Paraguayan Guarani", 
            "code" => "PYG", 
            "symbol" => "₲",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Peruvian Nuevo Sol", 
            "code" => "PEN", 
            "symbol" => "S/.",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Philippine Peso", 
            "code" => "PHP", 
            "symbol" => "₱",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Polish Zloty", 
            "code" => "PLN", 
            "symbol" => "zł",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Qatari Rial", 
            "code" => "QAR", 
            "symbol" => "ق.ر",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Romanian Leu", 
            "code" => "RON", 
            "symbol" => "lei",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Russian Ruble", 
            "code" => "RUB", 
            "symbol" => "₽",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Rwandan Franc", 
            "code" => "RWF", 
            "symbol" => "FRw",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Salvadoran ColÃ³n", 
            "code" => "SVC", 
            "symbol" => "₡",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Samoan Tala", 
            "code" => "WST", 
            "symbol" => "SAT",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Saudi Riyal", 
            "code" => "SAR", 
            "symbol" => "﷼",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Serbian Dinar", 
            "code" => "RSD", 
            "symbol" => "din",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Seychellois Rupee", 
            "code" => "SCR", 
            "symbol" => "SRe",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Sierra Leonean Leone", 
            "code" => "SLL", 
            "symbol" => "Le",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Singapore Dollar", 
            "code" => "SGD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Slovak Koruna", 
            "code" => "SKK", 
            "symbol" => "Sk",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Solomon Islands Dollar", 
            "code" => "SBD", 
            "symbol" => "Si$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Somali Shilling", 
            "code" => "SOS", 
            "symbol" => "Sh.so.",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "South African Rand", 
            "code" => "ZAR", 
            "symbol" => "R",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "South Korean Won", 
            "code" => "KRW", 
            "symbol" => "₩",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Special Drawing Rights", 
            "code" => "XDR", 
            "symbol" => "SDR",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Sri Lankan Rupee", 
            "code" => "LKR", 
            "symbol" => "Rs",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "St. Helena Pound", 
            "code" => "SHP", 
            "symbol" => "£",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Sudanese Pound", 
            "code" => "SDG", 
            "symbol" => ".س.ج",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Surinamese Dollar", 
            "code" => "SRD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Swazi Lilangeni", 
            "code" => "SZL", 
            "symbol" => "E",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Swedish Krona", 
            "code" => "SEK", 
            "symbol" => "kr",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Swiss Franc", 
            "code" => "CHF", 
            "symbol" => "CHf",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Syrian Pound", 
            "code" => "SYP", 
            "symbol" => "LS",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "São Tomé and Príncipe Dobra", 
            "code" => "STD", 
            "symbol" => "Db",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Tajikistani Somoni", 
            "code" => "TJS", 
            "symbol" => "SM",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Tanzanian Shilling", 
            "code" => "TZS", 
            "symbol" => "TSh",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Thai Baht", 
            "code" => "THB", 
            "symbol" => "฿",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Tongan pa'anga", 
            "code" => "TOP", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Trinidad & Tobago Dollar", 
            "code" => "TTD", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Tunisian Dinar", 
            "code" => "TND", 
            "symbol" => "ت.د",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Turkish Lira", 
            "code" => "TRY", 
            "symbol" => "₺",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "1",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Turkmenistani Manat", 
            "code" => "TMT", 
            "symbol" => "T",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Ugandan Shilling", 
            "code" => "UGX", 
            "symbol" => "USh",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Ukrainian Hryvnia", 
            "code" => "UAH", 
            "symbol" => "₴",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "United Arab Emirates Dirham", 
            "code" => "AED", 
            "symbol" => "إ.د",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Uruguayan Peso", 
            "code" => "UYU", 
            "symbol" => "$",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Afghan Afghani", 
            "code" => "AFA", 
            "symbol" => "؋",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Uzbekistan Som", 
            "code" => "UZS", 
            "symbol" => "лв",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Vanuatu Vatu", 
            "code" => "VUV", 
            "symbol" => "VT",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Venezuelan BolÃvar", 
            "code" => "VEF", 
            "symbol" => "Bs",
            "paypal_supported" => "0",
            "stripe_supported" => "0",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Vietnamese Dong", 
            "code" => "VND", 
            "symbol" => "₫",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Yemeni Rial", 
            "code" => "YER", 
            "symbol" => "﷼",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
        
        DB::table("currencies")->insert([
            "name" => "Zambian Kwacha", 
            "code" => "ZMK", 
            "symbol" => "ZK",
            "paypal_supported" => "1",
            "stripe_supported" => "1",
            "ccavenue_supported" => "0",
            "iyzico_supported" => "0",
            "paystack_supported" => "0"
        ]);
    }
}
