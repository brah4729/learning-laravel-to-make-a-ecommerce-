<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\{Category,Product,ProductImage};
use Illuminate\Support\Str;


class CatalogSeeder extends Seeder
{
public function run(): void
{
$cats = collect(['Shoes','Bags','T-Shirts','Hoodies','Accessories'])->map(function ($name) {
return Category::create([
'name' => $name,
'slug' => Str::slug($name)
]);
});


for ($i=1; $i<=20; $i++) {
$cat = $cats->random();
$name = "Product $i";
$p = $cat->products()->create([
'name' => $name,
'slug' => Str::slug($name.'-'.$i),
'description' => 'Nice product '.$i,
'price' => rand(50, 500) * 1000,
'stock' => rand(5, 50),
'is_active' => true,
]);
$p->images()->createMany([
['url' => 'https://picsum.photos/seed/'.$p->id.'/600/400', 'position' => 0],
['url' => 'https://picsum.photos/seed/'.$p->id.'b/600/400', 'position' => 1],
]);
}
}
}