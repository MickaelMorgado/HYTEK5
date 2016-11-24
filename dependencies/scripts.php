<?php 
	$backfolder_string = "";
	if ($backfolder>0) {
		$backfolder_string = "../";
		for ($i=1; $i < $backfolder; $i++) { 
			$backfolder_string = $backfolder_string."../";
		}
	}
?>
<!--script src="<?php echo $backfolder_string; ?>dependencies/js/jquery-2.1.3.min.js"></script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>               <!-- jquery -->
<script src="<?php echo $backfolder_string; ?>dependencies/js/bootstrap.min.js"></script>               <!-- bootstrap -->
<script src="<?php echo $backfolder_string; ?>dependencies/js/list.min.js"></script>                    <!-- list filter -->
<!--script src="<?php echo $backfolder_string; ?>dependencies/js/moment.min.js"></script>                  <!-- clock -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>                  <!-- clock -->
<script src="<?php echo $backfolder_string; ?>dependencies/js/intro.js"></script>                       <!-- intro js -->
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.3.0/intro.min.js"></script>                       <!-- intro js -->
<script src="<?php echo $backfolder_string; ?>dependencies/js/lazyload.min.js"></script>                <!-- lazy load -->
<script src="<?php echo $backfolder_string; ?>dependencies/js/keypress-2.1.4.min.js"></script>          <!-- keypress plugin -->
<!--script src="https://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>                      <!-- notify -->
<!--script src="https://unpkg.com/masonry-layout@4.0.0/dist/masonry.pkgd.min.js"></script-->                 <!-- like masonary -->
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script-->
<!-- meteo -->
  <!--script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script--> 
<script>
$(window).load(function(){ /* load after all */ 
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-80348175-1', 'auto');
  ga('send', 'pageview');
  (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:251262,hjsv:5};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
  })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
});
</script>