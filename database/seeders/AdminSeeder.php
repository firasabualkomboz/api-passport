<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([

            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            // token : eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiM2I4NGY1YWY1YTY2Yzk5NTM5MmU3MzljYzNkZDViZjU2NDhjMDdlNGNiYjNiZDlmNTVlZThiYWYyNGU2ZDVlMDczZGY4OTMxY2NhZTgyYzUiLCJpYXQiOjE2MzAwNTUyMTIuMzQzOTQsIm5iZiI6MTYzMDA1NTIxMi4zNDM5NDYsImV4cCI6MTY2MTU5MTIxMi4zMzI1Miwic3ViIjoiOCIsInNjb3BlcyI6W119.Q5CobtMUBWnooO88ivrrUNNa47auEz8kGdon0ZMy26KHFHOyizuKmGFta46j38FhHaLbw8NjTTqtIUwOTyPIf2_MjD-IZGQHv-CXM3l4OqbDNCIi0yCjDewSpvxe-BcvC7LyhEzViZVaKUQhbdDe83fps9cbGGii0CC_NmSHCtHZMqV5FCXGou6IMky8MNb7PgC4tehwJwpwZG_BxutIyL0LjKKBQa-NMCwitn7Fb8UC8z11AIbw1tbpInBEw_8uBgkp1GtcOydUdgSEUF36Y5NK6hCfJaAqtMKmeAPycLXA4N9OgYD4hkd-cwvvUqh35Su3AQLgWziL-USq6aRjsMW8q_Vl1DcgHOp9I-QJXdINVvLLP4WomsIx3sRgeYE2pTNQSYnDlNrk2f8aIuypdBqiwcNyPHipNk0R47teUY3i0GYa9079A6M-z8OUNOyc-1vfYCCYOe257MEo311YZE4Bxf8IIaZCUtJurRGJMuw82GLtPrkrBTxlTCzIDR_-0qJ0qPXEooHVPMkbTKNSaGWG_i8H3ym5dn81ijxm04qC0BGYKE2szd_g2EGrwoCztijKB1gpBHZKkoQjOoKvAxp8rfR8vt7rIeOeqWYz0h8Y2cGdHewvOiavS5F_KqGc_7mtX_J89nmiPSkTlPow7QHIZwCymT-pWt9F6EzrpJI
        ]);

    }
}
