<?php
    $id_article ='';
    $title ='';
    $id_img='';
    $date='';
    $url_video='';
    $content='';
    if ($datos!=null) {
        extract($datos[0]);
    }
?>

<script src="js/Article.js"></script>
<div class="content-intro">

    <div class="dashboard-content__intro">
        <h1><strong>Add</strong> new article</h1>
    </div>


    <form role="form" action="" id="formNew" name="formNew" class="form-add" enctype="multipart/form-data">
        <input name="id_article" id="id_article" placeholder="id" type="hidden" value="<?=$id_article?>">

        <div class="item field-container blue">
            <input class="field-input" type="text" name="title" id="title" placeholder=" " value="<?=$title?>">
            <label class="field-placeholder" for="title">Title</label>
        </div>

        <div class="item field-container blue">
            <input class="field-input" type="text" name="urlVideo" id="" placeholder=" " value="<?=$url_video?>">
            <label class="field-placeholder" for="urlVideo">URL Video</label>
        </div>

        <input class="item file" type="file" id="img" name="image" multiple placeholder="Select image" accept="image/png, image/jpeg, image/jpg">

        <input class="item date" type="date" name="" id="" placeholder="" value="<?=$date?>">
        
        <textarea class="item" name="content" placeholder="Escriba su mensaje aqui" id="" cols="30"
            rows="10"><?=$content?></textarea>

    </form>

    <button type="submit" class="btn-add-blue" onclick="saveArticle()">Save</button>
    <button type="submit" class="btn-cancel" onclick="window.location.href='index.php'">Cancel</button>

    <div>
        <p id="message" class="message"></p>
    </div>
</div>