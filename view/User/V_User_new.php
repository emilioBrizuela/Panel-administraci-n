<script src="js/User.js"></script>

<div class="content-intro">

    <div class="dashboard-content__intro">
        <h1><strong>Create</strong> Administrator</h1>
        <p><strong> Add</strong> a new administrator account </p>
    </div>

    <form role="form" action="" id="formNew" name="formNew" class="form-add" enctype="multipart/form-data">
        <div class="item field-container blue">
            <input class="field-input" type="text" name="email" id="user">
            <label class="field-placeholder" for="user">Email</label>
        </div>
        <div class="item field-container blue">
            <input class="field-input" type="text" name="name" id="name">
            <label class="field-placeholder" for="name">Name</label>
        </div>
        <div class="item field-container blue">
            <input class="field-input" type="password" name="password" id="password">
            <label class="field-placeholder" for="title">Password</label></label>
        </div>
    </form>
    <button type="submit" class="btn-add-blue" onclick="saveUser()">Save</button>
    <button type="submit" class="btn-cancel" onclick="window.location.href='index.php'">Cancel</button>

    <div>
        <p id="message" class="message"></p>
    </div>
</div>