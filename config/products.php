
<?php
/*
* Normally would store products in the datbase, but hardcoding
* because other people will not have the same database populated.
*/
define('APP_CATEGORIES', 
   serialize(
       array(
           array(
               'name' => 'Shampoo',
               'id' => 0
           ),
           array(
               'name' => 'Conditioner',
               'id' => 1
           ),
           array(
               'name' => 'Gel',
               'id' => 2
           ),
           array(
               'name' => 'HairGrowth',
               'id' => 3
           )
       )
   )
);
define('APP_PRODUCTS',
   serialize(
       array (
           // Demo User
           array (
               'name'  => 'Dove Nutritive Solutions',
               'category'  => 'Shampoo',
               'description'  => 'Anti-Frizz Oil Therapy Shampoo',
               'size'     => '20.4 oZ',
               'qty' => 10,
               'retail'  => "$4.88",
               'imagePath' =>  APP_IMG . "/Dove.jpg",
               'id' => 0
           ),
       array (
               'name'  => 'Sebastian Drench Shampoo',
               'category'  => 'Shampoo',
               'description'  => 'High-Quality Moisturizing Shampoo',
               'size'     => '33.8 oZ',
               'qty' => 12,
               'retail'  => "$28.47",
               'imagePath' =>  APP_IMG . "/SebastianDrenchShampoo.jpg",
               'id' => 1
           ),
       array (
               'name'  => 'American Crew Daily Shampoo',
               'category'  => 'Shampoo',
               'description'  => 'Daily Shampoo for normal to oily hair and scalp',
               'size'     => '33.8 oZ',
               'qty' => 8,
               'retail'  => "$23.95",
               'imagePath' =>  APP_IMG . "/AmericanCrewDailyShampoo.jpg",
               'id' => 2
           ),
           
    array (
               'name'  => "It's a 10",
               'category'  => 'Conditioner',
               'description'  => 'Miracle daily conditioner',
               'size'     => '33.8 oZ',
               'qty' => 11,
               'retail'  => "$35.41",
               'imagePath' =>  APP_IMG . "/itsA10.jpg",
               'id' => 3,
           ),
    array (
               'name'  => 'Sebastian Drench Conditioner',
               'category'  => 'Conditioner',
               'description'  => 'High-Quality Moisturizing Conditioner',
               'size'     => '33.8 oZ',
               'qty' => 16,
               'retail'  => "$29.97",
               'imagePath' =>  APP_IMG . "/SebastianDrenchConditioner.jpg",
               'id' => 4
           ),
    array (
               'name'  => 'American Crew Daily Conditioner',
               'category'  => 'Conditioner',
               'description'  => 'Daily Conditioner for Soft, Manageable Hair',
               'size'     => '33.8 oZ',
               'qty' => 4,
               'retail'  => "$23.95",
               'imagePath' =>  APP_IMG . "/AmericanCrewDailyConditioner.jpg",
               'id' => 5
           ),
           array (
               'name'  => 'American Crew Pomade',
               'category'  => 'Gel',
               'description'  => 'Medium Hold with High Shine',
               'size'     => '3 oZ',
               'qty' => 7,
               'retail'  => "$17.96",
               'imagePath' =>  APP_IMG . "/AmericanCrewPomade.jpg",
               'id' => 6
           ),
    array (
               'name'  => 'American Crew Forming Cream',
               'category'  => 'Gel',
               'description'  => 'Medium Hold and Medium Shine',
               'size'     => '3 oZ',
               'qty' => 13,
               'retail'  => "$17.96",
               'imagePath' =>  APP_IMG . "/AmericanCrewFormingCream.jpg",
               'id' => 7
           ),
    array (
               'name'  => 'American Crew Fiber',
               'category'  => 'Gel',
               'description'  => 'High Hold and Low Shine',
               'size'     => '3 oZ',
               'qty' => 9,
               'retail'  => "$17.96",
               'imagePath' =>  APP_IMG . "/AmericanCrewFiber.jpg",
               'id' => 8
           ),
           array (
               'name'  => "Men's Rogaine Extra Strength",
               'category'  => 'HairGrowth',
               'description'  => 'Unscented, topical solution to help revitalize hair follicles',
               'size'     => '2 oZ (3 Month Supply)',
               'qty' => 9,
               'retail'  => "$24.74" ,
               'imagePath' =>  APP_IMG . "/rogaine.jpg",
               'id' => 9
           ),
    array (
               'name'  => 'Regaine for Men Extra Strength',
               'category'  => 'HairGrowth',
               'description'  => 'Scalp Solution 5% w/v Minoxidil',
               'size'     => '60 mL oZ',
               'qty' => 5,
               'retail'  => "$49.50",
               'imagePath' =>  APP_IMG . "/RegaineforMenExtraStrength.jpg",
               'id' => 10
           ),
    array (
               'name'  => 'Nioxin System 3 Kit Hair Loss Treatment',
               'category'  => 'HairGrowth',
               'description'  => 'Hair Kit for Normal to Thin Looking',
               'size'     => 'Bundle',
               'qty' => 20,
               'retail'  => "$33.75",
               'imagePath' =>  APP_IMG . "/nioxin.jpg",
               'id' => 11
           ),
       )
   )
);