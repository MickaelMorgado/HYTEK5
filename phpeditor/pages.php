<!--form action="adminactions/addpage.php"-->

<form id="contactForm1" action="#" method="post">
	<input type="text" placeholder="title" name="titlepage" >
	<input type="submit" value="+" />
</form>


<script type="text/javascript">
var formData = new FormData(document.getElementsByName('yourForm')[0]);// yourForm: form selector        
$.ajax({
    type: "POST",
    url: "addpage.php",// where you wanna post
    data: formData,
    processData: false,
    contentType: false,
    error: function(jqXHR, textStatus, errorMessage) {
       console.log(errorMessage); // Optional
    },
    success: function(data) {console.log(data)} 
});
</script>