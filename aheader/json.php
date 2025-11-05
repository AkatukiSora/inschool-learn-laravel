<?php

//json
function send_json($data)
{
  //ヘッダーを指定
  header("Content-Type: application/json; charset=utf-8");

  //JSON形式のデータを出力する(スマホが受信する）
  echo $data;
}

//配列を作成
$array = ['name'=>'Takaichi',
          'age'=>'64',
          'gender'=>'female',
        ];

//配列をJSON形式に変換
$jsonstr =  json_encode($array);

send_json($jsonstr);

?>
