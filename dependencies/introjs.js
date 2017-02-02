$('.tutorial').click(function(){
	introJs()
		.start()
		.onbeforechange ( function(targetElement) {
			var getStepNumber = targetElement.dataset.step;
			if (getStepNumber == 6) {
				$('#enableRefresh').addClass('active');
			}else{
				$('#enableRefresh').removeClass('active');
			}
		})
		.oncomplete(function() {
			$('#enableRefresh').removeClass('active');
		});
});
