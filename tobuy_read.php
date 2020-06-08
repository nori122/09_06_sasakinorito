<?php
include('functions.php');

// DB接続の設定
// DB名は`gsacf_x00_00`にする
$pdo = connect_to_db();

// データ取得SQL作成
$sql = 'SELECT * FROM tobuy_table';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
  // fetchAll()関数でSQLで取得したレコードを配列で取得できる
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
  $output = "";
  // var_dump($result);
  // exit();
  // <tr><td>deadline</td><td>tobuy</td><tr>の形になるようにforeachで順番に$outputへデータを追加
  // `.=`は後ろに文字列を追加する，の意味
  foreach ($result as $record) {
    $output .= "<tr>";
    $output .= "<td style='padding:0 20px'>{$record["store"]}</td>";
    $output .= "<td style='padding:0 20px'>{$record["item"]}</td>";
    $output .= "<td style='padding:0 20px'>{$record["priority"]}</td>";
    // edit deleteリンクを追加
    $output .= "<td><a href='tobuy_edit.php?id={$record["id"]}'>edit</a></td>";
    $output .= "<td><a href='tobuy_delete.php?id={$record["id"]}'>delete</a></td>";


    $output .= "</tr>";
  }
  // $valueの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
  // 今回は以降foreachしないので影響なし
  unset($record);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お買い物リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>お買い物リスト（一覧画面）</legend>
    <a href="tobuy_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>どこで買う</th>
          <th>アイテム</th>
          <th>優先度</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>tobuy</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>





  <!-- タブ -->



  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'supermarket')" id="defaultOpen">スーパー</button>
    <button class="tablinks" onclick="openCity(event, 'drugstore')">ドラッグストア</button>
    <button class="tablinks" onclick="openCity(event, 'ecommerce')">ネット</button>
  </div>

  <div id="supermarket" class="tabcontent">
    <ul>
      <li>頑張るイクメン</li>
      <li>未経験からのプログラミング</li>
      <li>水槽の掃除の仕方</li>
    </ul>
  </div>

  <div id="drugstore" class="tabcontent">
    <ul>
      <li>冬休み早割まとめ</li>
      <li>お中元早割まとめ</li>
      <li>年賀状・・・</li>
    </ul>
  </div>

  <div id="ecommerce" class="tabcontent">
    <ul>
      <li>黄砂情報</li>
      <li>乾燥注意報</li>
      <li>今年のセキセツは・・・</li>
    </ul>
  </div>


  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
  </script>


  <style>
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    .tab button:hover {
      background-color: #ddd;
    }

    .tab button.active {
      background-color: #ccc;
    }

    .tabcontent {
      display: none;
      padding: 6px 24px;
      border: 1px solid #ccc;
      border-top: none;
    }
  </style>
</body>

</html>