<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZapatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        //
        DB::table('zapatos')->insert([
            'name'=>'650 high-top sneakers',
            'descripcion'=>'NEW BALANCE adds a high-top counterpart to the iconic  silhouettes to create the sneakers. The streamlined construction features suede panels and signature branding, echoing the labels branded style.',
            'price'=>103.00,
            'cantidad'=>40,
            'image'=>'https://cdna.lystit.com/1200/630/tr/photos/farfetch/ed586fc1/new-balance-White-650-High-top-Sneakers.jpeg'
        ]);
        DB::table('zapatos')->insert([
            'name'=>'Dunk Low "White/Black" sneakers',
            'descripcion'=>'The Swoosh says it all. Crafted from black and white panels, these Dunk Low sneakers from Nike are all you need to make sure your outfit is complete. Easy and stylish.',
            'price'=>145.00,
            'cantidad'=>20,
            'image'=>'https://cdn.shopify.com/s/files/1/0066/1890/6709/products/ScreenShot2022-03-29at2.32.33pm_1024x1024.png?v=1649301004'
        ]);
        DB::table('zapatos')->insert([
            'name'=>'Air Force 1 Mid "Pine Green"',
            'descripcion'=>'Nike x Off-White collabs in terms of sneakers have been proven successful over the years.',
            'price'=>213.00,
            'cantidad'=>50,
            'image'=>'https://sneakernews.com/wp-content/uploads/2023/02/off-white-nike-air-force-1-mid-pine-green-DR0500-300-store-list-0.jpg'
        ]);
        DB::table('zapatos')->insert([
            'name'=>'2002RX GTX "Navy/Arctic Grey" sneakers',
            'descripcion'=>'Updating a technical running style from the 2000s, New Balance presents these 2002RX GTX sneakers. The pair arrive in a navy blue colourway constructed from suede and mesh panelling with waterproof GORE-TEX. ',
            'price'=>186.00,
            'cantidad'=>50,
            'image'=>'https://s3.gsxtr.com/i/p/new-balance-2002rx-nb-navy-398244-1080s-1.jpg'
        ]);
        DB::table('zapatos')->insert([
            'name'=>'Air Flight 89 high-top sneakers',
            'descripcion'=>'Nikes Air Flight 89 sneakers now appear with an intergalactic design. .',
            'price'=>130.00,
            'cantidad'=>50,
            'image'=>'https://cdn-images.farfetch-contents.com/20/33/17/14/20331714_50302278_600.jpg'
        ]);
        DB::table('zapatos')->insert([
            'name'=>'Travis Scott x Fragment Air Jordan Low OG SP sneakers',
            'descripcion'=>'After appearing in numerous colour combinations and collaborations, the AJ1s now serve as a blank canvas for a three-band collaboration with renowned American rapper Travis Scott and fragment design by Hiroshi Fujiwara.',
            'price'=>416.00,
            'cantidad'=>50,
            'image'=>'https://images.stockx.com/images/Air-Jordan-1-Low-fragment-design-x-Travis-Scott-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1629307046'
        ]);
        DB::table('zapatos')->insert([
            'name'=>'Air Force 1 Low Color Of The Month sneakers',
            'descripcion'=>'Nikes Air Force 1 are back - this time, in a blue and white colourway. This pair is crafted from a white leather base and is enhaced with subtle touches of pink on the Swoosh, tongue, heel and even on the midsole.',
            'price'=>92.00,
            'cantidad'=>40,
            'image'=>'https://images.solecollector.com/complex/images/c_crop,h_1062,w_1889,x_52,y_652/rnvb5bh6sy90m6i2bscj/nike-air-force-1-low-university-blue-color-of-the-month-dm0576-400-pair.jpg'
        ]);
    }
}
