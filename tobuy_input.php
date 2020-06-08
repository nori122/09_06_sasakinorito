<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お買い物リスト（入力画面）</title>
</head>

<body>
  <form action="tobuy_create.php" method="POST">
    <fieldset>
      <legend>お買い物リスト（入力画面）</legend>
      <a href="tobuy_read.php">一覧画面</a>

      <div>
        買うもの: <input type="text" name="item">
      </div>

      <div>
        どこで買う: <select name="store">
          <option selected disabled></option>
          <option>スーパー</option>
          <option>ドラッグストア</option>
          <option>薬局</option>
        </select>
      </div>

      <div>
        優先度：<select name="priority">
          <option selected disabled></option>
          <option>ASAP</option>
          <option>安いのがあれば</option>
          <option>検討中</option>
        </select>
      </div>

      <div>
        <button>登録</button>
      </div>
    </fieldset>

  </form>

</body>

</html>