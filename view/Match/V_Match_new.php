<?php
  $id_match='';
  $title='';
  $urlVideo='';
  $nameLocal='';
  $nameVisit='';
  $pointLocal='';
  $pointVisit='';
  $resumeMatch='';
  $date='';
  $id_img='';
  if ($datos!=null) {
      extract($datos[0]);
  }
// echo json_encode($datos);
?>

<script src="js/Match.js"></script>

<div class="dashboard-content__intro">
    <h1><strong>Add</strong> new match</h1>
</div>


<form role="form" action="" id="formNew" name="formNew" class="form-add" enctype="multipart/form-data">
    <input name="id_article" id="id_article" placeholder="id" type="hidden" value="<?= $id_match ?>">

    <div class="item field-container blue"> 
        <input class="field-input" type="text" name="title" id="title" placeholder=" " value="<?= $title ?>">
        <label class="field-placeholder" for="title">Title</label>
    </div>
    <input class="item date" type="date" name="date" id="" placeholder="" value="<?= $date ?>">

    <div class="item field-container blue">
        <input class="field-input" type="text" name="urlVideo" id="" placeholder=" " value="<?= $urlVideo?>">
        <label class="field-placeholder" for="urlVideo">URL Video</label>
    </div>
    <input class="item file" type="file" id="img" name="image" multiple placeholder="Select image"
        accept="image/png, image/jpeg, image/jpg">
    <div class="item field-container blue">
        <input class="field-input" type="text" name="nameLocal" id="" placeholder=" " value="<?= $nameLocal?>">
        <label class="field-placeholder" for="urlVideo">Local Team</label>
    </div>
    <div class="item field-container blue">
        <input class="field-input" type="number" name="pointLocal" id="" placeholder=" " value="<?= $pointLocal?>" min="0">
        <label class="field-placeholder" for="urlVideo">Local points</label>
    </div>
    <div class="item field-container blue">
        <input class="field-input" type="text" name="nameVisit" id="" placeholder=" " value="<?= $nameVisit?>">
        <label class="field-placeholder" for="urlVideo">Visiting Team</label>
    </div>
    <div class="item field-container blue">
        <input class="field-input" type="number" name="pointVisit" id="" placeholder=" " value="<?= $pointVisit?>"min="0">
        <label class="field-placeholder" for="urlVideo">Visiting points</label>
    </div>

    <textarea class="item" name="resumeMatch" placeholder="Write your message here" id="" cols="30"
        rows="10"><?= $resumeMatch ?></textarea>

</form>

<button type="submit" class="btn-add-blue" onclick="saveMatch()">Save</button>
<button type="submit" class="btn-cancel" onclick="window.location.href='index.php'">Cancel</button>

<div>
    <p id="message" class="message"></p>
</div>
