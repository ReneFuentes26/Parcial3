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
            'model'=>'650 high-top sneakers',
            'descripcion'=>'NEW BALANCE adds a high-top counterpart to the iconic  silhouettes to create the sneakers. The streamlined construction features suede panels and signature branding, echoing the labels branded style.',
            'price'=>103.00,
            'cantidad'=>40
        ]);
        DB::table('zapatos')->insert([
            'model'=>'Dunk Low "White/Black" sneakers',
            'descripcion'=>'The Swoosh says it all. Crafted from black and white panels, these Dunk Low sneakers from Nike are all you need to make sure your outfit is complete. Easy and stylish.',
            'price'=>145.00,
            'cantidad'=>20
        ]);
        DB::table('zapatos')->insert([
            'model'=>'Air Force 1 Mid "Pine Green"',
            'descripcion'=>'Nike x Off-White collabs in terms of sneakers have been proven successful over the years.',
            'price'=>213.00,
            'cantidad'=>50
        ]);
        DB::table('zapatos')->insert([
            'model'=>'2002RX GTX "Navy/Arctic Grey" sneakers',
            'descripcion'=>'Updating a technical running style from the 2000s, New Balance presents these 2002RX GTX sneakers. The pair arrive in a navy blue colourway constructed from suede and mesh panelling with waterproof GORE-TEX. ',
            'price'=>186.00,
            'cantidad'=>50
        ]);
        DB::table('zapatos')->insert([
            'model'=>'Air Flight 89 high-top sneakers',
            'descripcion'=>'Nikes Air Flight 89 sneakers now appear with an intergalactic design. .',
            'price'=>130.00,
            'cantidad'=>50
        ]);
        DB::table('zapatos')->insert([
            'model'=>'Travis Scott x Fragment Air Jordan Low OG SP sneakers',
            'descripcion'=>'After appearing in numerous colour combinations and collaborations, the AJ1s now serve as a blank canvas for a three-band collaboration with renowned American rapper Travis Scott and fragment design by Hiroshi Fujiwara.',
            'price'=>416.00,
            'cantidad'=>50
        ]);
        DB::table('zapatos')->insert([
            'model'=>'Air Force 1 Low Color Of The Month sneakers',
            'descripcion'=>'Nikes Air Force 1 are back - this time, in a blue and white colourway. This pair is crafted from a white leather base and is enhaced with subtle touches of pink on the Swoosh, tongue, heel and even on the midsole.',
            'price'=>92.00,
            'cantidad'=>40
        ]);
    }
}
