<?php 

$info = $datos;
// echo json_encode($datos);
?>
<script src="js/Information.js"></script>
<div class="dashboard-content__intro">
    <h1><strong>Information</strong> club </h1>
    <p><strong>View and Edit</strong> all information of your club </p>
</div>
<form role="form" action="" id="formNew" class="form-add" name="formNew">
<input name="id_info" id="id_info" placeholder="id" type="hidden" value="<?= $info[0]['id_info'] ?>">

    <div class="item field-container blue">
        <input class="inputDisabled field-input" type="text" name="name" id="name" placeholder="Name"
            value="<?=$info[0]['name']?>" disabled>
        <label class="field-placeholder" for="title">Name of club</label>
    </div>
    <div class="item field-container blue">
        <input class="inputDisabled field-input" type="text" name="direction" id="direction" placeholder="Direction"
            value="<?=$info[0]['direction']?>" disabled>
        <label class="field-placeholder" for="title">Address</label>
    </div>
    <div class="item field-container blue">
        <input class="inputDisabled field-input" type="text" name="schedule" id="schedule" placeholder="Schedule"
            value="<?=$info[0]['shoulder']?>" disabled>
        <label class="field-placeholder" for="title">Schedule</label>
    </div>
    <div class="item field-container blue">
        <input class="inputDisabled field-input" type="tel" name="phone" id="phone" placeholder="Phone"
            value="<?=$info[0]['phone']?>" disabled>
        <label class="field-placeholder" for="title">Phone</label>
    </div>
    <div class="item field-container blue">
        <input class="inputDisabled field-input" type="text" name="facebook" id="facebook" placeholder="Facebook"
            value="<?=$info[0]['facebook']?>" disabled>
        <label class="field-placeholder" for="title">URL Facebook</label>
    </div>
    <div class="item field-container blue">
        <input class="inputDisabled field-input" type="text" name="instagram" id=instagram"instagram"
            placeholder="Instagram" value="<?=$info[0]['instagram']?>" disabled>
        <label class="field-placeholder" for="title">URL Instagram</label>
    </div>
</form>
<button type="submit" class="btn-add-blue" id="edit" class="inputEnabled">Edit information</button>
<button type="submit" class="btn-add-blue" id="save" onclick="saveInfo()" style="display: none;">Save
    information</button>
<div>
    <p id="message" class="message"></p>
</div>
<script>
$(document).ready(function() {
    $("#edit").click(function() {
        event.preventDefault();
        $('.inputDisabled').prop("disabled", false); // Element(s) are now enabled.
        $('#edit').css("display", "none");
        $('#save').css("display", "block");
    });
});
</script>