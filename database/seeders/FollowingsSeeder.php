<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FollowingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Follower 1 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 2 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 3 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 4 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 5 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 6 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 7 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 8,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 8 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 9,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 9 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 10,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 10 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 11,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 11 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 12,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 12 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 13,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 13 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 14,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 14 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 15,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 15 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 16,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 16 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 17,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 17 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 18,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 18 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 19,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 19 follows User 1
        DB::table('followings')->insert([
            'follower_id' => 20,
            'following_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 1 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 3 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 4 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 5 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 6 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 7 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 8 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 8,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 9 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 9,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 10 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 10,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 11 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 11,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 12 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 12,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 13 follows User 2
        DB::table('followings')->insert([
            'follower_id' => 13,
            'following_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 1 follows User 3
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 2 follows User 3
        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 4 follows User 3
        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 6 follows User 3
        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Follower 8 follows User 3
        DB::table('followings')->insert([
            'follower_id' => 8,
            'following_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 4 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 8,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 9,
            'following_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 5 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 8,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 9,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 10,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 11,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 12,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 13,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 14,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 15,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 16,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 17,
            'following_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 6 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 7 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 8,
            'following_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 8 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 9,
            'following_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 9 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 8,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 10,
            'following_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 10 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 11 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 12 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 13 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 14 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 15 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 16 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 17 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 18 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 7,
            'following_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 19 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Seeder for user 20 followers
        DB::table('followings')->insert([
            'follower_id' => 1,
            'following_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 2,
            'following_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 3,
            'following_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 4,
            'following_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 5,
            'following_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('followings')->insert([
            'follower_id' => 6,
            'following_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
