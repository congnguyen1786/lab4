<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class chenthanhvien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ho = ['Nguyễn', 'Lê', 'Phan', 'Đỗ', 'Hồ', 'Võ', 'Bùi'];
        $lot = ['Thị', 'Văn', 'Đức', 'Ngọc', 'Hoàng', 'Minh', 'Kim', ''];
        $ten = ['Tâm', 'Thảo', 'Hải', 'Hòa', 'Hào', 'Thanh', 'Tú', 'Hậu', 'Phương'];

        for ($i = 0; $i < 100; $i++) {
            $hoTen = Arr::random($ho) . ' ' . Arr::random($lot) . ' ' . Arr::random($ten);
            $email = Str::lower(Str::slug($hoTen, '')) . rand(100, 999) . '@gmail.com';

            DB::table('thanhviens')->insert([
                'hoTen' => $hoTen,
                'email' => $email,
                'password' => Hash::make('hehe'),
            ]);
        }
    }
}
