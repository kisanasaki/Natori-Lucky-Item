<!DOCTYPE html>
<html lang="ja">
<head>
<?php include('header.php'); ?>
</head>
<body>
<?php include('nav.php'); ?>
  <div class="container mt-5x">
    <div class="row">
      <div class="col mt-3">
        <div class="card" style="width: 18rem;">
          <img src="../picture/LeonhardEuler_jpg.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">数学者タイプ診断</h5>
            <p class="card-text">あなたの数学者タイプを診断します！</p>
            <a href="mathtype.php" class="btn btn-primary">診断する</a>
          </div>
        </div>
      </div>
      <div class="col mt-3">
        <div class="card" style="width: 18rem;">
          <img src="../picture/Pierre_de_Fermat.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">数学者ラッキーアイテム</h5>
            <p class="card-text">あなたの今日のラッキーアイテムは？</p>
            <a href="luckyitem.php" class="btn btn-primary">診断する</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>
</body>
</html>
