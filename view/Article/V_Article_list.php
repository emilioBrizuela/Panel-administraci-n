<?php
$articles=$datos;
?>
<script src="js/Article.js"></script>
<div class="dashboard-content__intro">
        <h1><strong>See</strong> all your articles</h1>
      </div>


<div class="content-table">
<table>
        <tr>
            <th class="table-date">Fecha</th>
            <th>Título</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    


    <?php
            foreach($articles as $article){

                if($article['public'] == 'Y'){
                    $public = '<img class="icon" src="img/remove.svg" alt="Private">';
                    // $state = 'success';
                }else{
                    $public = '
                    <img class="icon"src="img/verified.svg" alt="Public">';
                    // $state = 'error';
                }

                $html= '
                <tr>
                <td>'.$article['date'].'</td>
                <td>'.$article['title'].'</td>
                <td>'.$public.' <a href="#" onclick="changeState('.$article['id_article'].')"><img class="icon" src="img/exchange.svg" alt="change state"></a></td>
                <td>              
                    <a href="#" onclick="deleteArt('.$article['id_article'].')"><img class="icon" src="img/delete.png" alt="Delete"></a>
                    <a href="#" onclick="modifyArt('.$article['id_article'].')"><img class="icon" src="img/edit.png" alt="Edit"></a>
                </td>
              </tr>';
              echo $html;

            }
          ?>

</table>