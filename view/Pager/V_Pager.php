<?php
	$page = 1;
	$cantRows = 5;
	$totalRows= 0;
	extract($datos);
	$totalPages = ceil($totalRows/$cantRows);
	echo json_encode($datos['filter']);
	echo json_encode($totalPages);
	?>

<script src="js/Pager.js"></script>
<div class="pager">
    <ul class="pages">
        <li><img src="img/left-chevron.png" alt="<" class="img-arrow"></li>
        <li><a href="#" id="one" class="page">1</a></li>
        <li><a href="#" id="two" class="page">2</a></li>
        <li><a href="#" id="three" class="page">3</a></li>
        <li><a href="#" id="four" class="page">4</a></li>
        <li><img src="img/right-chevron.png" alt=">" class="img-arrow"></li>
    </ul>
</div>

<script>
$(".page").click(function() {
    $(".page").removeClass("slected");
    $('#' + $(this).attr('id')).addClass("slected");
});
</script>