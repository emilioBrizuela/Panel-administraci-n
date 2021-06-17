<?php

$players = $datos;
// echo json_encode($datos);
?>

<script src="js/Player.js"></script>
<div class="dashboard-content__intro">
    <h1><strong>See</strong> all your articles</h1>
</div>


<div class="content-table">
    <table>
        <table>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th class="table-date">Age</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Position</th>
                <th>Image</th>
                <th></th>
            </tr>

            <?php
            foreach ($players as $player) {
                $html='   <tr>
                <td>'.$player['name'].'</td>
                <td>'.$player['surname_1'].' '.$player['surname_2'].'</td>
                <td>'.$player['age'].'</td>
                <td>'.$player['height'].'cm</td>
                <td>'.$player['weight'].'kg</td>';
                
                require_once 'controller/C_Player.php';
                $p = new C_Player();
                $position = $p->getPosition($player['position']);

                $html.='
                <td>'.$position[0]['name_position'].'</td>
                <td>'.$player['id_img'].'</td>
                <td>
                <a href="#" onclick="deleteArt('.$player['id_player'].')"><img class="icon" src="img/delete.png" alt="Delete"></a>
                </td>
              </tr>';
                echo $html;
            }
          ?>
        </table>
</div>