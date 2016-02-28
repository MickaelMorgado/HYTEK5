<script>

	var mouseover1 = new Audio();
	var mouseover2 = new Audio();
	var mouseover3 = new Audio();
	var mouseover4 = new Audio();

	mouseover1.src = 'audios/mouseover.mp3';
	mouseover2.src = 'audios/mouseover.mp3';
	mouseover3.src = 'audios/mouseover.mp3';
	mouseover4.src = 'audios/mouseover.mp3';

	$('.block.games').hover(function(){
		mouseover1.play();
	});
	$('.block.leaderboard').hover(function(){
		mouseover2.play();
	});
	$('.block.options').hover(function(){
		mouseover3.play();
	});
	$('.block.news').hover(function(){
		mouseover4.play();
	});
	$('#oom').click(function(){
		$("#status,#preloader").fadeIn();
		document.location.href = "games/game.php";
	});
</script>