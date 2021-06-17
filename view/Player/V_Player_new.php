<?php
    $positions = $datos;
?>

<script src="js/Player.js"></script>

<div class="content-intro">

    <div class="dashboard-content__intro">
        <h1><strong>Add</strong> new player</h1>
        <a href="#" onclick="newTeam();" class="btn-add"> + Add new Team</a>
    </div>

    <form role="form" action="" id="formNew" name="formNew" class="form-add" enctype="multipart/form-data">
        <div class="item field-container blue">
            <input class="field-input" type="text" name="name" id="title">
            <label class="field-placeholder" for="title">Name</label>
        </div>
        <div class="item field-container blue">
            <input type="text" class="field-input" name="surname_1" id="surname_1">
            <label class="field-placeholder" for="title">First Surname</label>
        </div>
        <div class="item field-container blue">
            <input type="text" class="field-input" name="surname_2" id="surname_2">
            <label class="field-placeholder" for="title">Second Surname</label>
        </div>
        <div class="item field-container blue">
            <input type="number" class="field-input" name="weight" id="weight">
            <label class="field-placeholder" for="title">Weight</label>
        </div>
        <div class="item field-container blue">
            <input type="number" class="field-input" name="height" id="height">
            <label class="field-placeholder" for="title">Height</label>
        </div>
        <div class="item field-container blue">
            <select name="position" id="position">
                <option value="0">Select position</option>
                <?php
                foreach ($positions as $position) {
                    echo '<option class="field-input" value="'.$position['id_position'].'">'.$position['name_position'].'</option>';   
                }
                ?>
            </select>
        </div>
        <div class="item field-container blue">
            <select name="position" id="position">
                <option value="0">Select Team</option>
                <?php
                include_once 'controller/C_Player.php';
                $c_player = new C_Player();
                $listTeam = $c_player->listTeam();
                echo json_encode($listTeam);
                foreach ($listTeam as $team) {
                    echo '<option class="field-input" value="'.$team['id_team'].'">'.$team['name_team'].'</option>';   
                }
                ?>
            </select>
        </div>
        <input class="item file" type="file" id="img" name="image" multiple placeholder="Select image"
            accept="image/png, image/jpeg, image/jpg">
        <input class="item date" type="date" name="age" id="" placeholder="" value="<?=$date?>">
    </form>
    <button type="submit" class="btn-add-blue" onclick="savePlayer()">Save</button>
    <button type="submit" class="btn-cancel" onclick="window.location.href='index.php'">Cancel</button>

    <div>
        <p id="message" class="message"></p>
    </div>
</div>