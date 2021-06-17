<?php
    session_start();
    $name='';
    // extract($datos);    
    if($name!=''){
      $_SESSION['user']=$name;
    }
    if (isset($_SESSION['user'])) {
        //esta logeado
        // echo 'Hola '.$_SESSION['user'].', si lo deseas puedes desconectar.<br>';
        // echo '<a href="logout.php">Desconectar</a>';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;0,900;1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/index.js"></script>
    <script src="library/jquery-3.5.1/jquery-3.5.1.js"></script>
</head>

<body>
    <div class="dashboard">
        <div class="dashboard-nav">
        <?php include_once 'dashboard-nav.php';?>
        </div>

        <div class="dashboard-content content">

            <div class="dashboard-content__intro">
                <h1><strong>Hi <?= $_SESSION['user']?>,</strong> Welcome back!</h1>
                <p>In <strong>MATCH</strong> we want to facilitate the job of managing all the information about your
                    club</p>
            </div>
            <p class="intro-title">Latest News</p>
            <div class="articles-list">

                <?php
      
        include_once 'controller/C_Article.php';
        $c_article = new C_Article();
        $last_articles = $c_article->viewLastArticle();
        
        foreach ($last_articles as $article) {
            ?>
                <div class="articles-item">
                    <div class="articles-item__date">
                        <label style="display: none;"><?= $article['id_article']?></label>
                        <img src="img/new.svg" alt="">
                        <p><?= $article['DATE']?></p>
                    </div>

                    <p class="articles-item__title"><?= $article['title']?></p>
                </div>
                <?php
        }
        ?>
            </div>
            <a href="" class="btn">See All</a>

            <p class="intro-title">Latest Matches</p>
            <div class="articles-list">

                <?php
                  include_once 'controller/C_Match.php';
                  $c_match = new C_Match();
                  $last_match = $c_match->viewLastMatch();
                  
                  foreach ($last_match as $match) {
                      // echo json_encode($match);
      
                    ?>
                <div class="articles-item">
                    <div class="articles-item__date">
                        <img src="img/new.svg" alt="">
                        <p><?= $match['DATE'] ?></p>
                    </div>

                    <div class="match-item">
                        <p>Local</p>
                        <div class="match-item__info">
                            <span><?= $match['nameLocal'] ?></span>
                            <span><?= $match['pointLocal'] ?></span>
                        </div>
                    </div>

                    <div class="match-item">
                        <p>Visitante</p>
                        <div class="match-item__info">
                            <span><?= $match['nameVisit'] ?></span>
                            <span><?= $match['pointVisit'] ?></span>
                        </div>
                    </div>
                </div>
 <?php
                  }
                    ?>
            </div>
            <a href="" class="btn">See All</a>
        </div>
    </div>
    <script>
    $(".link").click(function() {
        $(".link").removeClass("active");
        $('#' + $(this).attr('id')).addClass("active");
    });
    </script>
</body>

</html>
<?php
} else {
        header('Location: login.php', );
    }

?>