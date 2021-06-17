
<script src="js/Article.js"></script>
<div class="dashboard-content__intro">
        <h1><strong>Articles</strong></h1>
        <p><strong> Add, edit and delete</strong> all the news for your club</p>
      </div>

      <a href="#" onclick="newArticle();" class="btn-add"> + Add new</a>
      <p class="intro-title">Latest News</p>
      <div class="articles-list">
      <?php
      
      include_once 'controller/C_Article.php';
      $c_article = new C_Article();
      $last_articles = $c_article->viewLastArticle();
      
      foreach ($last_articles as $article) {
          // echo json_encode($article);
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
      <a href="#" onclick="viewArticles()" class="btn">See All</a>
    </div>