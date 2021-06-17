<script src="js/Media.js"></script>

<div class="content-form">

<div class="content-intro">
    <h1> Select image to upload:</h1>
</div>
<div class="message"></div>
    <form action="" id="formNew" name="formNew" class="formNew" enctype="multipart/form-data">
        <input type="file" id="img" name="image" accept="image/png, image/jpeg" />
        <input type="text" name="descImg" id="description" placeholder="Insert image description">
        <!-- <input type="submit" id="save" name="save" value="UPLOAD" class="btn" onclick="saveImage()" /> -->
    </form>
    <button type="submit" class="btn" onclick="saveImage()">Upload</button>
</div>


<div class="preview">
    <img src="" alt="" id="imgPreview">
</div>

<script>

const $form1 = document.querySelector('#formNew');
const $desc = document.querySelector('#descPreview')
const $img = document.querySelector('#imgPreview')
const $file = document.querySelector('#img')

function renderImage(formImage){
    const file = formImage.get('image')
    const image = URL.createObjectURL(file)
    $img.setAttribute('src',image)

};
function renderDescription(formImage){
    const desc = formImage.get('descImg')
    $desc.textContent= desc
};
$file.addEventListener('change',() =>{
    $img.style.display="block"
    const formImage = new FormData($form1);
    renderImage(formImage)
})
// $form.addEventListener('submit',(event =>{
//     event.preventDefault()
//     const formImage = new FormData(event.currentTarget);
//     debugger
//     renderDescription(formImage)
// }))

</script>