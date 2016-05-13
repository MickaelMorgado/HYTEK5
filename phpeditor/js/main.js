var i = 2; 
$('#add').click(function(){ 
    $('input:text:last-of-type').after('<input type="text" placeholder="input' +i +'" name="input' + i + '">'); 
	i++;
});
$('.remove').click(function(){
	$(this).parent().remove();
});