<p class="clock"></p>
<!--script src="https://raw.github.com/timrwood/moment/develop/min/moment.min.js"></script-->
<script>
var ct = $('.clock');
(function(){var _interval=16,_lastsync=0;(function foo() {
var _bt = moment(),_t = _bt.format('HH:mm:ss'),_mt = moment().subtract('milliseconds', 16 );
if( _interval > 100 ){_lastsync=_lastsync+1000;}else{if(_bt.seconds() !== _mt.seconds()){_interval = 1000; _lastsync = 0; }}
if( _lastsync > 180000 ) {_interval = 16;}ct.text(_t);setTimeout(function() {foo();}, _interval);}());}());
</script>