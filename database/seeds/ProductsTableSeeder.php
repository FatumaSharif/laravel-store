<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
          "name" => "Coconut Body Butter",
          "slug" => "coconut-body-butter",
          "brand" => "The Body Shop",
          "details" => "Enriched with Community Trade cold-pressed virgin coconut oil from Samoa",
          "price" => 750,
          "description" => "Give your skin a dose of ultra-rich hydration when you apply this nourishing coconut body butter. With 48hr moisturizing properties, your skin will stay softer for longer",
        ]);

        Product::create([
          "name" => "British Rose Body Butter",
          "slug" => "british-rose-body-butter",
          "brand" => "The Body Shop",
          'details' => 'Enriched with the essence of hand-picked British roses',
          'price' => 850,
          'description' => 'Indulge in dewy hydration with our first Body Butter with glow enhancing rose essence. Beautifully pearlescent, this velvety-soft moisturizer is light to the touch but rich on moisture. Non-sticky and perfect for normal to dry skin, it transforms instantly on skin to give you an instant all-over healthy looking',
        ]);

        Product::create([
          'name' => 'Hemp Heavy-Duty Body Moisture Protector',
          'slug' => 'hemp-heavy-duty-body-moisture-protector',
          'brand' => 'The Body Shop',
          'details' => 'Enriched with community trade Hemp from France',
          'price' => 2200,
          'description' => 'Our solid cream instantly melts onto the skin, for intense hydration and increased protection. Infused with rich hemp seed oil, packed with essential fatty acids, this nourishing formula will leave your skin beautifully soft and supple.',
        ]);

        Product::create([
          'name' => 'Carrot Wash Energizing Face Cleanser',
          'slug' => 'Carrot Wash Energizing Face Cleanser',
          'brand' => 'The Body Shop',
          'details' => 'Enriched with organic carrots and Community Trade organic aloe vera from Mexico',
          'price' => 2100,
          'description' => 'Our Carrot skincare collection is back and better than ever! Discover the range by lathering up with this refreshing Carrot Face Wash. Our Energizing Face Cleanser is enriched with organic carrots that are too beautifully crooked to sell to the food industry, this vegan treat leaves skin feeling cleansed, smoother, energized and purified from daily urban grime.',
        ]);

        Product::create([
          'name' => 'Vitamin C Daily Glow Cleansing Polish',
          'slug' => 'Vitamin C Daily Glow Cleansing Polish',
          'brand' => 'The Body Shop',
          'details' => 'Enriched with community trade Camu Camu from Peru',
          'price' => 2350,
          'description' => 'This daily radiance-revealing facial wash cleanses and exfoliates skin in one step. Best for dull skin and those in need of a daily facial cleansing wash. Contains camu camu berry with 20x more Vitamin C than an orange',
        ]);

        Product::create([
          'name' => 'Brow & Lash Gel',
          'slug' => 'Brow & Lash Gel',
          'brand' => 'The Body Shop',
          'details' => 'Enriched with community trade Aloe Vera from Mexico',
          'price' => 1700,
          'description' => 'Complete with a handy applicator brush, this clear gel will tame unruly brows and fix them in place. Use on your lashes for a natural, yet defined no-makeup look easy.',
        ]);

        Product::create([
          'name' => 'Mineral UV Filters SPF 30 with Antioxidants',
          'slug' => 'Mineral UV Filters SPF 30 with Antioxidants',
          'brand' => 'The Ordinary',
          'details' => 'Micronized Zinc Oxide and Titanium Dioxide',
          'price' => 1200,
          'description' => 'A mineral sunscreen that contains ultra-refined dispersion of micronized zinc oxide and titanium dioxide (no nanoparticles) with SPF 30.',
        ]);

        Product::create([
          'name' => '100% Organic Virgin Chia Seed Oil',
          'slug' => '100% Organic Virgin Chia Seed Oil',
          'brand' => 'The Ordinary',
          'details' => 'Dullness and Uneven Texture',
          'price' => 800,
          'description' => 'A daily support formula for all skin types, with 100 percent pure chia seed oil, that is sustainably-sourced, organic, virgin, and cold-pressed.',
        ]);

        Product::create([
          'name' => 'The Ordinary "Buffet"',
          'slug' => 'The Ordinary "Buffet"',
          'brand' => 'The Ordinary',
          'details' => 'Dryness, Fine lines and wrinkles',
          'price' => 1450,
          'description' => 'A multi-peptide serum with syn-ake, matrixyl synthe-6, matrixyl 3000, argirelox, hyaluronic acid, amino acids and bio-derivatives to target multiple signs of aging.',
        ]);

        Product::create([
          'name' => 'Hyaluronic Acid 2% + B5',
          'slug' => 'Hyaluronic Acid 2% + B5',
          'brand' => 'The Ordinary',
          'details' => 'Dryness',
          'price' => 750,
          'description' => 'This formulation combines low, medium, and high molecular weight hyaluronic acid, as well as a next-generation H.A. crosspolymer at a combined concentration of two percent for multi-depth hydration. This system is supported with the addition of B5 for enhanced hydration.',
        ]);

        Product::create([
          'name' => 'Skinny Felt Eyeliner',
          'slug' => 'Skinny Felt Eyeliner',
          'brand' => 'The Body Shop',
          'details' => 'Black felt eyeliner pen',
          'price' => 1800,
          'description' => 'Our precise, streamlined eyeliner pen is ideal for creating fluid lines, defining the eyes and adding intensity to your look. Use to enhance your lash line with jet-black color.',
        ]);

        Product::create([
          'name' => 'Vitamin C Suspension 23% + HA Spheres 2%',
          'slug' => 'Vitamin C Suspension 23% + HA Spheres 2%',
          'brand' => 'The Body Shop',
          'details' => 'Fine lines and wrinkles',
          'price' => 600,
          'description' => 'Vitamin C is an effective antioxidant and its pure form of l-ascorbic acid has been shown to improve multiple signs of skin aging while brightening the skin.',
        ]);
    }
}
