<?php
$developer_mode = true; //Sets the test_lead parameter

$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);

$params = array(
    "test_lead" => $developer_mode,
    "aff_id" => 161,
    "aff_password" => "XfXaQWmUWjhhBZKWv0gwHTa",
    "sub_id" => "5212261",
    "referring_website" => "www.mallardsarecool.co.uk",
    "loan_amount" => 6000,
    "loan_purpose" => "car_purchase",
    "loan_term" => 24,
    "guarantor" => "no",
    "title" => "mr",
    "first_name" => "TestNathan",
    "middle_name" => "",
    "last_name" => "TestNathan",
    "gender" => "male",
    "date_of_birth" => "13-07-2000",
    "marital_status" => "single",
    "number_of_dependents" => "0",
    "house_number" => 21,
    "house_name" => "oak house",
    "flat_number" => "",
    "street_name" => "wood lane",
    "city" => "leek",
    "county" => "staffordshire",
    "post_code" => "st3 7ap",
    "residential_status" => "living_with_friends",
    "address_move_in_date" => "13-08-2014",
    "mobile_number" => "07000000001",
    "home_number" => "01620123445",
    "work_number" => "01620123456",
    "mobile_phone_type" => "contract",
    "email_address" => "roberts.nathan@hotmail.com",
    "employment_status" => "student",
    "payment_frequency" => "twice_monthly",
    "payment_method" => "cash",
    "monthly_income" => 987,
    "next_pay_date" => "30-02-2023",
    "following_pay_date" => "15-03-2023",
    "job_title" => "wood maker",
    "employer_name" => "wood and friends",
    "employer_industry" => "construction_manufacturing",
    "employment_start_date" => "13-08-2014",
    "expenditure_housing" => 150,
    "expenditure_credit" => 50.50,
    "expenditure_food" => 50.95,
    "expenditure_utilities" => 250,
    "expenditure_transport" => 5,
    "expenditure_other" => 10.98,
    "bank_name" => "other",
    "bank_account_number" => "04152689",
    "bank_sort_code" => "04-05-59",
    "bank_card_type" => "visa",
    "consent_email_sms" => true,
    "consent_email" => false,
    "consent_sms" => true,
    "consent_call" => true,
    "consent_credit_search" => true,
    "consent_financial" => true,
    "user_agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36",
    "ip_address" => "192.168.10.5",

);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));

$headers = array(
    "Content-Type: application/json"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$url = "https://leads.supadata.co.uk/submit-lead";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);

curl_close($curl);
echo $response;
