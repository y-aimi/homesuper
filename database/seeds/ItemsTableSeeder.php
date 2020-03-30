<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
        $item_seeds = [
          [
            'name' => '【冷凍食品】チキンナゲット 500g',
            'amount' => '268',
            'imagepath' => 'チキンナゲット.png'
          ],
          [
            'name' => '【冷凍食品】和風鶏もも唐揚げ　500g',
            'amount' => '398',
            'imagepath' => '和風鶏もも唐揚げ.jpg'
          ],
          [
            'name' => '【冷凍食品】はし巻き 500g(5本入り)',
            'amount' => '398',
            'imagepath' => 'はし巻き.jpg'
          ],
          [
            'name' => '【冷凍食品】チーズフィンガー 200g',
            'amount' => '218',
            'imagepath' => 'チーズフィンガー.jpg'
          ],
          [
            'name' => '【冷凍食品】明石焼き 400g (2人前/全16個)',
            'amount' => '298',
            'imagepath' => '明石焼き.jpg'
          ],
          [
            'name' => '【冷凍食品】肉まん 5個入り (1個100g)',
            'amount' => '365',
            'imagepath' => '肉まん.jpg'
          ],
          [
            'name' => '【冷凍食品】野菜かき揚げ 5枚入り',
            'amount' => '235',
            'imagepath' => '野菜かき揚げ.jpg'
          ],
          [
            'name' => '【冷凍食品】梅しそカツ 1kg',
            'amount' => '415',
            'imagepath' => '梅しそカツ.jpg'
          ],
          [
            'name' => '【冷凍食品】牛すじコロッケ 10個入り',
            'amount' => '275',
            'imagepath' => '牛すじコロッケ.jpg'
          ],
          [
            'name' => '【冷凍食品】ハムカツ 10個入り',
            'amount' => '297',
            'imagepath' => 'ハムカツ.jpg'
          ],
          [
            'name' => '【冷凍食品】メンチカツ 10個入り',
            'amount' => '235',
            'imagepath' => 'メンチカツ.jpg'
          ],
          [
            'name' => '【冷凍食品】チュロス 500g',
            'amount' => '97',
            'imagepath' => 'チュロス.jpg'
          ],
          [
            'name' => '【冷凍食品】チキンカツ 1kg',
            'amount' => '370',
            'imagepath' => 'チキンカツ.jpg'
          ],
          [
            'name' => '【冷凍食品】こだわり生フランク 1kg',
            'amount' => '698',
            'imagepath' => 'こだわり生フランク.jpg'
          ],
          [
            'name' => '【冷凍食品】冷凍うどん 5食入り',
            'amount' => '147',
            'imagepath' => '冷凍うどん.jpeg'
          ],
          [
            'name' => '【冷凍食品】プルコギ 4人前(500g)',
            'amount' => '370',
            'imagepath' => 'プルコギ.jpg'
          ],
          [
            'name' => '【冷凍食品】トルティーヤ 12枚入り',
            'amount' => '198',
            'imagepath' => 'トルティーヤ.jpg'
          ],
          [
            'name' => '【冷凍食品】ピザ・マルゲリータ 1枚',
            'amount' => '298',
            'imagepath' => 'ピザ・マルゲリータ.jpg'
          ],
          [
            'name' => '【冷凍食品】ナン 4枚入り(400g)',
            'amount' => '398',
            'imagepath' => 'ナン.jpg'
          ],
          [
            'name' => '【冷凍食品】生食用サラダえび 300g',
            'amount' => '560',
            'imagepath' => '生食用サラダエビ.jpg'
          ],
          [
            'name' => '【冷凍食品】アメリカンドッグ 5本入り',
            'amount' => '183',
            'imagepath' => 'アメリカンドッグ.jpg'
          ],
          [
            'name' => '【缶詰】チキンランチョンミート 370g',
            'amount' => '198',
            'imagepath' => 'チキンランチョンミート.jpg'
          ],
          [
            'name' => '【缶詰】タラのレバー燻製 120g',
            'amount' => '286',
            'imagepath' => 'タラのレバー燻製.jpg'
          ],
          [
            'name' => '【缶詰】ニシンのトマトソース漬け 170g',
            'amount' => '189',
            'imagepath' => 'ニシンのトマトソース漬け.jpg'
          ],
          [
            'name' => '【缶詰】アトランティックサーモンのオイル漬け 125g',
            'amount' => '199',
            'imagepath' => 'アトランティックサーモンのオイル漬け.jpg'
          ],
          [
            'name' => '【缶詰】オイルサーディン 125g',
            'amount' => '104',
            'imagepath' => 'オイルサーディン.jpg'
          ],
          [
            'name' => '【缶詰】グリーンオリーブ　85g',
            'amount' => '97',
            'imagepath' => 'グリーンオリーブ.png'
          ],
          [
            'name' => '【缶詰】ブラックオリーブ 90g',
            'amount' => '185',
            'imagepath' => 'ブラックオリーブ.jpg'
          ],
          [
            'name' => '【缶詰】牡蠣のスモーク 85g',
            'amount' => '128',
            'imagepath' => '牡蠣のスモーク.jpg'
          ],
          [
            'name' => '【ソフトドリンク】綾鷹 2L',
            'amount' => '158',
            'imagepath' => '綾鷹.jpg'
          ],
          [
            'name' => '【ソフトドリンク】ミネラルウォーター 500ml',
            'amount' => '35',
            'imagepath' => 'ミネラルウォーター.jpeg'
          ],
          [
            'name' => '【ソフトドリンク】キリンレモン 1.5L',
            'amount' => '128',
            'imagepath' => 'キリンレモン.jpg'
          ],
          [
            'name' => '【ソフトドリンク】CCレモン 1.5L',
            'amount' => '147',
            'imagepath' => 'CCレモン.jpg'
          ],
          [
            'name' => '【ソフトドリンク】ファンタグレープ 1.5',
            'amount' => '158',
            'imagepath' => 'ファンタグレープ.jpeg'
          ],
          [
            'name' => '【ソフトドリンク】コカ・コーラ 1.5L',
            'amount' => '158',
            'imagepath' => 'コカ・コーラ.jpg'
          ],
          [
            'name' => '【ソフトドリンク】ジンジャーエール 1.5L',
            'amount' => '158',
            'imagepath' => 'ジンジャーエール.jpg'
          ],
          [
            'name' => '【ソフトドリンク】三ツ矢サイダー 1.5L',
            'amount' => '158',
            'imagepath' => '三ツ矢サイダー.jpg'
          ],
          [
            'name' => '【お酒】キリン一番搾り生ビール　350ml',
            'amount' => '198',
            'imagepath' => 'キリン一番搾り.jpg'
          ],
          [
            'name' => '【お酒】アサヒスーパードライ 350ml',
            'amount' => '199',
            'imagepath' => 'アサヒスーパードライ.jpg'
          ],
          [
            'name' => '【お酒】ヱビスビール 350ml',
            'amount' => '219',
            'imagepath' => 'ヱビスビール.jpeg'
          ],
          [
            'name' => '【お酒】ザ・プレミアム・モルツ　香るエール 350ml',
            'amount' => '216',
            'imagepath' => '香るエール.jpg'
          ],
        ];
        foreach($item_seeds as $item){
          DB::table('items')->insert($item);
        }
    }
}
