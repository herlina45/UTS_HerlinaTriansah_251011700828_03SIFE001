<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artwork;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artworks = [
            [
                'title' => 'The Ten Largest, No. 1, Childhood',
                'artist' => 'Hilma af Klint',
                'year' => 1907,
                'price' => 35000000.00,
                'image' => 'hilma-ten-largest-1.jpg',
                'medium' => 'Tempera dan minyak di atas kertas',
            ],
            [
                'title' => 'Group IV, The Swan, No. 1',
                'artist' => 'Hilma af Klint',
                'year' => 1915,
                'price' => 45000000.00,
                'image' => 'hilma-swan-1.jpg',
                'medium' => 'Minyak di atas kanvas',
            ],
            [
                'title' => 'Wildflowers',
                'artist' => 'Odilon Redon',
                'year' => 1912,
                'price' => 28000000.00,
                'image' => 'redon-wildflowers.jpg',
                'medium' => 'Minyak di atas kanvas',
            ],
            [
                'title' => 'Silence',
                'artist' => 'Odilon Redon',
                'year' => 1911,
                'price' => 32000000.00,
                'image' => 'redon-silence.jpg',
                'medium' => 'Minyak di atas kanvas',
            ],
            [
                'title' => 'Ophelia',
                'artist' => 'Odilon Redon',
                'year' => 1905,
                'price' => 24000000.00,
                'image' => 'redon-ophelia.jpg',
                'medium' => 'Pastel di atas kertas',
            ],
            [
                'title' => 'Sunlight in the Blue Room',
                'artist' => 'Anna Ancher',
                'year' => 1891,
                'price' => 19500000.00,
                'image' => 'ancher-blue-room.jpg',
                'medium' => 'Minyak di atas kanvas',
            ],
            [
                'title' => 'A Young Girl Sewing',
                'artist' => 'Anna Ancher',
                'year' => 1890,
                'price' => 17500000.00,
                'image' => 'ancher-girl-sewing.jpg',
                'medium' => 'Minyak di atas kanvas',
            ],
            [
                'title' => 'Painterly Architectonic',
                'artist' => 'Liubov Popova',
                'year' => 1916,
                'price' => 21000000.00,
                'image' => 'popova-architectonic.jpg',
                'medium' => 'Minyak di atas kanvas',
            ],
            [
                'title' => 'Spatial Force Construction',
                'artist' => 'Liubov Popova',
                'year' => 1921,
                'price' => 23000000.00,
                'image' => 'popova-spatial-force.jpg',
                'medium' => 'Minyak dan serbuk perunggu pada kayu',
            ],
            [
                'title' => 'Dust Motes Dancing in Sunbeams',
                'artist' => 'Vilhelm Hammershøi',
                'year' => 1900,
                'price' => 29000000.00,
                'image' => 'hammershoi-sunbeams.jpg',
                'medium' => 'Minyak di atas kanvas',
            ],
        ];

        foreach ($artworks as $item) {
            Artwork::updateOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }
}