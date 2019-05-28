<?php

use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case_studies')->insert([
            'title' => 'Ablestoke',
            'feature_image' => '774368134_640.jpg',
            'youtube_video_url' => 'https://vimeo.com/329533812',
            'case_study_category_id' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]); 

        DB::table('case_studies')->insert([
            'title' => 'Rotaflex Mill Spout Cleaning System',
            'feature_image' => '0.jpg',
            'youtube_video_url' => 'https://www.youtube.com/embed/JOQRaEHeyLk',
            'case_study_category_id' => 11,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('case_studies')->insert([
            'title' => 'Ablestoke - Meet The Investment Manager',
            'feature_image' => 'KnviaPKb5sQ.jpg',
            'youtube_video_url' => 'https://www.youtube.com/embed/KnviaPKb5sQ',
            'case_study_category_id' => 11,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('case_studies')->insert([
            'title' => 'Aspire Estate Agents Battersea',
            'feature_image' => 'HDmElyhRtGs.jpg',
            'youtube_video_url' => 'https://www.youtube.com/embed/HDmElyhRtGs',
            'case_study_category_id' => 11,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
