<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お買い物リスト（入力画面）</title>
</head>

<body>
  <form action="tobuy_create.php" method="POST">
    <fieldset>
      <legend>お買い物リスト（入力画面）</legend>

      <div>
        <!-- <label>買うもの</label> -->
        <input class="input" placeholder="買うもの" class="form" type="text" name="item">
      </div>

      <div class="container">
        <div>
          <!-- <label>どこで買う</label> -->
          <select class="form" name="store">
            <option class="input" selected disabled value="" style='display:none;'>どこで買う</option>
            <option>スーパー</option>
            <option>ドラッグストア</option>
            <option>薬局</option>
          </select>
        </div>

        <div>
          <!-- <label>どこで買う</label> -->
          <select class="form" name="priority">
            <option class="input" selected disabled value="" style='display:none;'>優先度</option>
            <option>ASAP</option>
            <option>安ければ</option>
            <option>検討中</option>
          </select>
        </div>
      </div>

      <div>
        <button class="register">登録</button>
      </div>

    </fieldset>
    <a href="tobuy_read.php">一覧画面へ</a>

  </form>

</body>

</html>