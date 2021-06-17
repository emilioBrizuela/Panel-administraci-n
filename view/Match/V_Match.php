<?php
 $last_match = $datos;
?>

<script src="js/Match.js"></script>
<div class="dashboard-content__intro">
        <h1><strong>Match</strong></h1>
        <p><strong> Add, edit and delete</strong> all matches of your club</p>
      </div>

      <a href="#" onclick="newMatch();" class="btn-add"> + Add new</a>
      <p class="intro-title">Latest Matchs</p>
            <div class="articles-list">

                <?php                  
                  foreach ($last_match as $match) {
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
      </div>
      <a href="#" onclick="viewMatches()" class="btn">See All</a>
    </div>