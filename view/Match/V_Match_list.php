<?php
$matches=$datos;
?>
<script src="js/Article.js"></script>
<div class="dashboard-content__intro">
    <h1><strong>See</strong> all your matches</h1>
</div>
<div class="content-table">
    <table>
        <tr>
            <th class="table-date">Fecha</th>
            <th>Local</th>
            <th>Visitante</th>
            <!-- <th>Imágen</th> -->
            <th>Acciones</th>
        </tr>


        <?php
            foreach($matches as $match){
                $html= '
                <tr>
                <td>'.$match['date'].'</td>
                <td>'.$match['nameLocal'].': '.$match['pointLocal'].'</td>
                <td>'.$match['nameVisit'].': '.$match['pointVisit'].'</td>
                <td>              
                    <a href="#" onclick="deleteMatch('.$match['id_match'].')"><img class="icon" src="img/delete.png" alt="Delete"></a>
                    <a href="#" onclick="modifyMatch('.$match['id_match'].')"><img class="icon" src="img/edit.png" alt="Edit"></a>
                </td>
              </tr>';
              echo $html;

            }
          ?>

    </table>