<?php
// 条件の比較に誤りがあります
// カリキュラムを復習しながら、文字列の比較方法を正しく使いましょう
// 1. $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//    もし違ったら「あなたの名前ではありません」と表示するように実装してください
$name = "sho";

// もし $name が "sho" に等しければ！！
if ($name === "sho") {
 echo '私は sho です';

// 違っていたら！！
// // もし $name が "sho" 未満なら？
// }else if($name < "sho") {
//   echo '私は sho ではありません';
} else{ 
  echo $name . 'は、それ以外です';

}
echo "\n";

// 計算結果に誤りがあります
// 正しい結果は 150005000 になるはずです
// 2. for文を使って、1から10000までの合計の値を表示してください
$total = 0;
echo $total;
echo "\n";
//=> 5 と表示される。

// $iが5から始まり、$iが 10000 以下の間繰り返し処理をおこなう。
for ($i = 1; $i <= 10000; $i++) {
$total += $i;
}
echo $total;
echo "\n";


// 3. $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください
$fruits = array("apple", "orange", "pear","kiwi","strawberry");
// $fruits から一つずつ要素を取り出して、$fruitsに代入される
// foreach 文で {} をつけ忘れないようにしましょう
foreach($fruits as $fruit) {
  echo "要素は" . $fruit;
  echo "\n";
}

//=> 要素はapple
//=> 要素はorange
//=> 要素はpear
//=> 要素はkiwi
//=> 要素はstrawberry
//=> と表示される
echo "\n";


// 4. 【応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください
///* for文の始めの値を定義する /
 $start = 5;
//* for文の終わりの値を定義する */
 $end = 100;

 for($i = $start; $i < $end; $i++){

 // 5で割り切れたら{}内を実行する
    if($i % 5 == 0){
    echo $i;
    }
 }
 echo "\n";
