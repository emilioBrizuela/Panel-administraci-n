<script src="js/Player.js"></script>

<div class="content-intro">

    <div class="dashboard-content__intro">
        <h1><strong>Add</strong> new Team</h1>
    </div>


    <form role="form" action="" id="formNew" name="formNew" class="form-add">
        <input name="id_article" id="id_article" placeholder="id" type="hidden" value="">

        <div class="item field-container blue">
            <input class="field-input" type="text" name="name" id="title" placeholder=" " value="">
            <label class="field-placeholder" for="title">Name of Team</label>
        </div>
    </form>

    <button type="submit" class="btn-add-blue" onclick="saveTeam()">Save</button>
    <button type="submit" class="btn-cancel" onclick="window.location.href='index.php'">Cancel</button>

    <div>
        <p id="message" class="message"></p>
    </div>