



$('#btn_view_list').click(function() {
	$('#lstadds').show();
	$('#registernewadd').hide();
});

$('#btn_add_add').click(function() {
	$('#lstadds').hide();
	$('#registernewadd').show();
});

$('#clearform').click(function() {
	$("#frmnwpublicidad")[0].reset();
});