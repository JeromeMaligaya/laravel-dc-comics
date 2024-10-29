<?php

namespace Database\Seeders;

use App\Models\Sneaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SneakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 1 High',
            'colorway' => 'Chicago Lost and Found',
            'year_release' => 2022,
            'retail_price' => 179.00,
            'actual_price' => 350.00,
            'img_url' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSn4JceqM432syFQIUhpoOzknvU5Ev6FvC9hS_fkmsI98SiWCgGR1QDMwob89HNSgz8eu6xdO-aNkX5DLVVc9tgE43SOKYVPMAimkim-GMyibYbb1aG4LQ-j9Lan2nqnRfvgz1hYmGmnf0&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 3 High',
            'colorway' => 'White Cement Remaigined',
            'year_release' => 2021,
            'retail_price' => 210.00,
            'actual_price' => 300.00,
            'img_url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQtcGwI9d3IBKsxoOKAFK2a1IV4iTqkSp9mrVrlKX0xtqU4SXFxQaDRi4AXOfaqFE_hw13B6wze_Ii5KbzmO7DTQYv5bLFs2v-R1mPQMBZ9A_UdPdZsaX7lajtikqDTpeshyiTQGdA29g&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Air Force 1 x Nocta',
            'colorway' => 'Certified Lover Boy',
            'year_release' => 2020,
            'retail_price' => 160.00,
            'actual_price' => 220.00,
            'img_url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRTQwymQGXDoMBgGhsnmqAewUWEtEAS5CgguEvU6SwZE-_-C8CQNi_A3JNEvtgdtEAemtnElxofkzEQmwvdT2MHAhUA8Vi6TdYZpFt5WV1Cseul5LBnWat8wGk5hNnFQaA41FGFGh4l9dA&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 1 low OG x Travis Scott',
            'colorway' => 'Reverse Olive',
            'year_release' => 2024,
            'retail_price' => 170.00,
            'actual_price' => 580.00,
            'img_url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ7DeAZtEVrH9Cx2P-pqjjb-Q0BSRdX6cvzgJ5YOTOWkeYLP3fv7gTaZBm8z8pTCLfvTKMeVZTTS70K2kb8pndR9fFXTropjwo5pbFmsgNl0lD32v0yXq__9FkSTfkD1-ohYzeX1-Kr1g&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Adidas',
            'model' => 'Yeezy Boost 350 v2',
            'colorway' => 'Static Black',
            'year_release' => 2018,
            'retail_price' => 220.00,
            'actual_price' => 300.00,
            'img_url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQbO0qZ2BSlMM3WThkP7xiC3iwM88p6jXRqwEUHxYv-eJVrjj5v1eJhYqlby1dlUCWNTfBP0N0Bcmuy4lsrGXrrNF-b8QhaJTtszwIGJJChdfQzNC3IXYrzACIr2dMXtZ-BpIscwGOA-w&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 4 High',
            'colorway' => 'Military Blue',
            'year_release' => 2023,
            'retail_price' => 210.00,
            'actual_price' => 235.00,
            'img_url' => 'data:image/webp;base64,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',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 3 High x A Ma Maniere',
            'colorway' => 'While You Were Sleeping',
            'year_release' => 2024,
            'retail_price' => 230.00,
            'actual_price' => 230.00,
            'img_url' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ4XRMncznNnJ3zZ93qT3R-3bxfSOYe86NVtGXbFmRd1W77xQ9Iv0onxWCSDJtBYTkk2OyTiwXk03BmeWyhwj5wYZpEzvRpl1TWzcdXiNWSsuiTla-jmQ147DRcsgMgvYerWOi6-dGGpg&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Dunk SB x L.A. Dodgers',
            'colorway' => 'Dodgers',
            'year_release' => 2021,
            'retail_price' => 130.00,
            'actual_price' => 295.00,
            'img_url' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTVFPi1ktIO9uvM5WSAfah8AFL-p9bbb_7lp_6KcNSqN4agBhpBrb5OFUrzd6Q5O2ZLFTkwL9YUlKkdwFbGS5oBvPVvwVpjnxv69tS1r1UjAccrC8mPykHDDaHnIQotyv7bDVZTxoG5oXQ&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Dunk SB x HUF',
            'colorway' => 'Black San Francisco',
            'year_release' => 2020,
            'retail_price' => 130.00,
            'actual_price' => 250.00,
            'img_url' => 'data:image/webp;base64,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',
        ]);

        Sneaker::create([
            'brand' => 'New Balance',
            'model' => '2002r Protection Pack',
            'colorway' => 'Lunar New Year',
            'year_release' => 2021,
            'retail_price' => 160.00,
            'actual_price' => 220.00,
            'img_url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcS-YUWXtmWhIDa6FLMmZAqEgSu3USGM9fu_qm34uNOV13nWUYHxNO3HLx9ZKLG2_oWA7S6Y33CbbD4s8YR5VsSVOi6CRCDNfL1OL_7Wb9bE_DipUdRe-8Uq1gFHObWVFXJw1QrB1aRzpWo&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 1 Low OG',
            'colorway' => 'Bred Toe',
            'year_release' => 2022,
            'retail_price' => 160.00,
            'actual_price' => 120.00,
            'img_url' => 'data:image/webp;base64,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',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 1 Low OG x Zion Wiliamsson',
            'colorway' => 'Voodoo',
            'year_release' => 2021,
            'retail_price' => 170.00,
            'actual_price' => 330.00,
            'img_url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTxws7a4In3XcqDVMAj-0_6UnfhjhaT3a3lY9aUInzeelQkZ7dHk96-8hoflwabeE1BRvSOI102TOzJfkzy1-kiXjDph45KRTODY9HTVARc3vRQYuzo7zP1zCK47QylaLgjfnLcfXiGMw&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 1 Low OG \'85',
            'colorway' => 'Neutral Grey',
            'year_release' => 2023,
            'retail_price' => 160.00,
            'actual_price' => 130.00,
            'img_url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTLzxNDB7zI5maYigCuLeImsLlfUY0S0_pTl_Ae2t0owXWLh2ZB0bjGywa-Yepa-6wlEYz9dnmSVASjJ59EVfqrL7we5zH-Wndhh9Zh4jRXnRpVbvnbYPMnXFapmrIlHPDj1y6nzv48qA&usqp=CAchttps://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTLzxNDB7zI5maYigCuLeImsLlfUY0S0_pTl_Ae2t0owXWLh2ZB0bjGywa-Yepa-6wlEYz9dnmSVASjJ59EVfqrL7we5zH-Wndhh9Zh4jRXnRpVbvnbYPMnXFapmrIlHPDj1y6nzv48qA&usqp=CAc',
        ]);

        Sneaker::create([
            'brand' => 'Nike',
            'model' => 'Jordan 1 Low OG',
            'colorway' => 'Dark Mocha',
            'year_release' => 2024,
            'retail_price' => 160.00,
            'actual_price' => 160.00,
            'img_url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSNqKdhUOpAQnOTa_ytcry3VlnlaPw1TO6a-IhqV3PaNRWQcVcNvZ9YuYEDjMT-lgmzoFO6WJ0O6qplye_URHhQ-hYeGBeEIbhHMJmLwkMc8x7qdmRL8ytmqM7LSf-7h3jRE0olDdfe_Q&usqp=CAc',
        ]);
    }
}
