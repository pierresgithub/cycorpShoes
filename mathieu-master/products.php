
<?php include "CORE/connexion.php";
?>
<?php include "APP/debug.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>CyCorp</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="PUBLIC/assets/css/styles.css" />
<link rel="stylesheet" type="text/css" href="PUBLIC/libary/reset.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>

  <!-- Main Start -->
  <div class="main">

    <!-- Main Header Start -->
    <?php include "APP/views/parts/header.php" ?>
    <!-- Main Header End -->


    <!-- Main Content Start -->
  <section class="flexbox">

    <aside class="category">
      <ul>
        <li class="title">Catégories</li>
        <li class="mark">Adidas</li>
        <li class="mark">Nike</li>
        <li class="mark">Asics</li>
        <li class="mark">Puma</li>
      </ul>
    </aside>

    <article class="onceupon">

    <?php include 'APP/models/getImage.php';?>
    <ul class="princess">
        <li class="piece1"><img src="<?php echo $donnees['img']; ?>" alt="">
        </li>
        <li class="piece1"><img src="<?php echo $donnees['img']; ?>" alt="">
        </li>
        <li class="piece1"><img src="<?php echo $donnees['img']; ?>" alt="">
        </li>
        <li class="piece2"><img src="<?php echo $donnees['img']; ?>" alt="">
        </li>
        <li class="piece2"><img src="<?php echo $donnees['img']; ?>" alt="">
        </li>
        <li class="piece2"><img src="<?php echo $donnees['img']; ?>" alt="">
      </ul>

    </article>

</section>






    <!-- Main Content End -->

    <!-- Content Footer Start -->
    <?php include "APP/views/parts/footer.php" ?>
    <!-- Content Footer End -->

  </div>
	<!-- Main End -->

</body>

</html>
