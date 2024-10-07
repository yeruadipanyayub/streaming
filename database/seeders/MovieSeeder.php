<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'TRANSPORTER 5',
                'slug' => 'transporter-5',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=fazfVKpaw_I',
                'thumbnail' => 'https://img.youtube.com/vi/fazfVKpaw_I/maxresdefault.jpg',
                'rating' => 8.3,
                'is_featured' => 0,
            ],
            [
                'name' => 'PIRATES OF CARIBBEAN : LAST ADVENTURE',
                'slug' => 'pirates-of-caribbean-last-adventure',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=3w9wNx0_Cyo',
                'thumbnail' => 'https://img.youtube.com/vi/3w9wNx0_Cyo/maxresdefault.jpg',
                'rating' => '9.2',
                'is_featured' => 1,
            ],
            [
                'name' => 'Doraemon: Stand By Me',
                'slug' => 'doraemon-stand-by-me',
                'category' => 'Fantasy',
                'video_url' => 'https://www.youtube.com/watch?v=nQxbHtvHg3g',
                'thumbnail' => 'https://img.youtube.com/vi/nQxbHtvHg3g/maxresdefault.jpg',
                'rating' => '9.2',
                'is_featured' => 1,
            ],
            [
                'name' => 'Hercules 2: A Cruel Warlord',
                'slug' => 'hercules-2-a-cruel-warlord',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=ukYdhcfuH1E',
                'thumbnail' => 'https://img.youtube.com/vi/ukYdhcfuH1E/maxresdefault.jpg',
                'rating' => '9.2',
                'is_featured' => 0,
            ],
            [
                'name' => 'Inception',
                'slug' => 'inception',
                'category' => 'Sci-Fi',
                'video_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
                'thumbnail' => 'https://img.youtube.com/vi/YoHD9XEInc0/maxresdefault.jpg',
                'rating' => '8.8',
                'is_featured' => 0,
            ],
            [
                'name' => 'The Dark Knight',
                'slug' => 'the-dark-knight',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'thumbnail' => 'https://img.youtube.com/vi/EXeTwQWrcwY/maxresdefault.jpg',
                'rating' => '9.0',
                'is_featured' => 0,
            ],
            [
                'name' => 'Interstellar',
                'slug' => 'interstellar',
                'category' => 'Sci-Fi',
                'video_url' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E',
                'thumbnail' => 'https://img.youtube.com/vi/zSWdZVtXT7E/maxresdefault.jpg',
                'rating' => '8.6',
                'is_featured' => 0,
            ],
            [
                'name' => 'Gladiator',
                'slug' => 'gladiator',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=owK1qxDselE',
                'thumbnail' => 'https://img.youtube.com/vi/owK1qxDselE/maxresdefault.jpg',
                'rating' => '8.5',
                'is_featured' => 0,
            ],
            [
                'name' => 'The Matrix',
                'slug' => 'the-matrix',
                'category' => 'Sci-Fi',
                'video_url' => 'https://www.youtube.com/watch?v=m8e-FF8MsqU',
                'thumbnail' => 'https://img.youtube.com/vi/m8e-FF8MsqU/maxresdefault.jpg',
                'rating' => '8.7',
                'is_featured' => 0,
            ],
            [
                'name' => 'Pulp Fiction',
                'slug' => 'pulp-fiction',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
                'thumbnail' => 'https://img.youtube.com/vi/s7EdQ4FqbhY/maxresdefault.jpg',
                'rating' => '8.9',
                'is_featured' => 0,
            ],
            [
                'name' => 'The Lord of the Rings: The Fellowship of the Ring',
                'slug' => 'the-lord-of-the-rings-the-fellowship-of-the-ring',
                'category' => 'Fantasy',
                'video_url' => 'https://www.youtube.com/watch?v=V75dMMIW2B4',
                'thumbnail' => 'https://img.youtube.com/vi/V75dMMIW2B4/maxresdefault.jpg',
                'rating' => '8.8',
                'is_featured' => 0,
            ],
            [
                'name' => 'Fight Club',
                'slug' => 'fight-club',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=SUXWAEX2jlg',
                'thumbnail' => 'https://img.youtube.com/vi/SUXWAEX2jlg/maxresdefault.jpg',
                'rating' => '8.8',
                'is_featured' => 0,
            ],
            [
                'name' => 'Forrest Gump',
                'slug' => 'forrest-gump',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=bLvqoHBptjg',
                'thumbnail' => 'https://img.youtube.com/vi/bLvqoHBptjg/maxresdefault.jpg',
                'rating' => '8.8',
                'is_featured' => 0,
            ],
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
                'thumbnail' => 'https://img.youtube.com/vi/6hB3S9bIaco/maxresdefault.jpg',
                'rating' => '9.3',
                'is_featured' => 1,
            ],
        ];

        Movie::insert($movies);
    }
}
