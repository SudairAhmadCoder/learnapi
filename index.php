<?php
$api_key = "c14634cef6524311bb2d09042bbac471";

$url = "https://newsapi.org/v2/everything?q=apple&from=2026-03-28&to=2026-03-28&sortBy=popularity&$api_key";


$response = file_get_contents($url);


$data = json_decode($response, true);

if (!empty($data['articles'])) {
    foreach ($data['articles'] as $article) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>News Cards</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h2>Latest News</h2>

  <div class="container">
<!-- Card 1 -->
<div class="card">
  <img src="<?php echo $article['urlToImage']?>" alt="<?php echo $article['name']?>">
  <div class="card-content">
    <h3><?php echo $article['title']?></h3>
    <p><?php $article['description']?></p>
    <p><?php echo $article['author']?></p>
    <a href="<?php echo $article['url']?>">Read More</a>
  </div>
</div>
<?php
    }
    }else {
      echo "No data Found!";
    }

?>

  </div>

</body>
</html>
