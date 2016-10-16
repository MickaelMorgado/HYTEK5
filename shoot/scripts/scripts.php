<script>

	var mouseover1 = new Audio();
	var mouseover2 = new Audio();
	var mouseover3 = new Audio();
	var mouseover4 = new Audio();
	
	var soundtrack = new Audio();

	mouseover1.src = 'audios/mouseover.mp3';
	mouseover2.src = 'audios/mouseover.mp3';
	mouseover3.src = 'audios/mouseover.mp3';
	mouseover4.src = 'audios/mouseover.mp3';
	

	random_soundtrack = function (list) {
		return list[Math.floor((Math.random()*list.length))];
	} 

	$(document).ready(function(){	
		rs = random_soundtrack(["Hitman - Kevin Macleod",
								"Day Of Recon - Max Surla"])				
		soundtrack.src = "audios/"+rs+".mp3";soundtrack.loop=true;soundtrack.volume=0.6;
		$(".tracklist-player__text").html(rs)
		soundtrack.play();	
	});

	$('.block.games').hover(function(){				mouseover1.play();			});
	$('.block.leaderboard').hover(function(){		mouseover2.play();			});
	$('.block.options').hover(function(){			mouseover3.play();			});
	$('.block.news').hover(function(){				mouseover4.play();			});
	$('#oom').click(function(){
		$("#status,#preloader").fadeIn();
		document.location.href = "games/game.php";
	});

    function ajaxSubmit($file,$ths,$thsphp){  
    	console.log($ths);
    	console.log($thsphp);
   		$.ajax({
			type : 'POST',
			url  : $file,
			data : $(this).serialize(),
			/*
			beforeSend: function(){ 
    			$("#error").fadeOut();
    			$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
   			},
   			*/
   			success: function(e){      
     			$.notify(":"+e);
     			$($ths).load($thsphp);
     		},
     		error: function(){
     			$.notify("no file/results");
     		}
   		});
    	return false;
  	}
  	$("#submit").click(function(){
	  	$.ajax({
		  	type: "POST",
		  	url: "apps/setup-weapons-cursor.php",
		  	data: $(this).parent().serialize(),
		  	cache: false,
		  	success: function(result){
		  		alert(result);
	  		}
	  	});
  	});
</script>