<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'iPhone 15', 'description' => 'iPhone mới nhất', 'price' => 29999, 'stock' => 50, 'image' => 'iphone15.jpg', 'category_id' => 1],
            ['name' => 'iPhone 14', 'description' => 'Mẫu iPhone cũ hơn', 'price' => 25999, 'stock' => 40, 'image' => 'iphone14.jpg', 'category_id' => 1],
            ['name' => 'MacBook Pro 16"', 'description' => 'MacBook mạnh mẽ nhất', 'price' => 59999, 'stock' => 30, 'image' => 'macbookpro16.jpg', 'category_id' => 2],
            ['name' => 'MacBook Air M2', 'description' => 'Mỏng nhẹ, hiệu năng cao', 'price' => 34999, 'stock' => 20, 'image' => 'macbookairm2.jpg', 'category_id' => 2],
            ['name' => 'iPad Pro M2', 'description' => 'Máy tính bảng mạnh mẽ', 'price' => 24999, 'stock' => 15, 'image' => 'ipadpro.jpg', 'category_id' => 3],
            ['name' => 'iPad Air M1', 'description' => 'Máy tính bảng giá rẻ hơn', 'price' => 19999, 'stock' => 25, 'image' => 'ipadair.jpg', 'category_id' => 3],
            ['name' => 'Apple Watch Ultra', 'description' => 'Đồng hồ thông minh cao cấp', 'price' => 19999, 'stock' => 25, 'image' => 'watchultra.jpg', 'category_id' => 4],
            ['name' => 'Apple Watch Series 8', 'description' => 'Đồng hồ thế hệ mới', 'price' => 15999, 'stock' => 30, 'image' => 'watchs8.jpg', 'category_id' => 4],
            ['name' => 'AirPods Pro 2', 'description' => 'Tai nghe chống ồn tốt nhất', 'price' => 5999, 'stock' => 50, 'image' => 'airpodspro2.jpg', 'category_id' => 5],
            ['name' => 'AirPods 3', 'description' => 'Tai nghe không dây mới nhất', 'price' => 3999, 'stock' => 60, 'image' => 'airpods3.jpg', 'category_id' => 5],
            ['name' => 'iMac 24"', 'description' => 'Máy tính để bàn đẹp và mạnh', 'price' => 39999, 'stock' => 10, 'image' => 'imac24.jpg', 'category_id' => 2],
            ['name' => 'Mac Studio M2 Ultra', 'description' => 'Máy Mac dành cho sáng tạo', 'price' => 79999, 'stock' => 5, 'image' => 'macstudio.jpg', 'category_id' => 2],
            ['name' => 'Apple TV 4K', 'description' => 'Truyền phát nội dung 4K', 'price' => 4999, 'stock' => 20, 'image' => 'appletv.jpg', 'category_id' => 6],
            ['name' => 'HomePod Mini', 'description' => 'Loa thông minh của Apple', 'price' => 2999, 'stock' => 30, 'image' => 'homepodmini.jpg', 'category_id' => 6],
            ['name' => 'Magic Keyboard', 'description' => 'Bàn phím không dây của Apple', 'price' => 3999, 'stock' => 50, 'image' => 'magickeyboard.jpg', 'category_id' => 7],
            ['name' => 'Magic Mouse', 'description' => 'Chuột cảm ứng không dây', 'price' => 2999, 'stock' => 60, 'image' => 'magicmouse.jpg', 'category_id' => 7],
            ['name' => 'Apple Pencil 2', 'description' => 'Bút cảm ứng cho iPad', 'price' => 3499, 'stock' => 40, 'image' => 'applepencil.jpg', 'category_id' => 7],
            ['name' => 'iPhone SE 3', 'description' => 'iPhone giá rẻ mạnh mẽ', 'price' => 15999, 'stock' => 35, 'image' => 'iphonese3.jpg', 'category_id' => 1],
            ['name' => 'iPad Mini 6', 'description' => 'iPad nhỏ gọn, mạnh mẽ', 'price' => 17999, 'stock' => 20, 'image' => 'ipadmini6.jpg', 'category_id' => 3],
        ];

        // Thêm dữ liệu vào database
        DB::table('products')->insert($products);
    }
}
