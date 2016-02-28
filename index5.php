<style>
	body {
		background-color: #111;
		color: #fff;
	}
</style>
<div id="users">
  <input class="search" placeholder="Search" />
  <button class="sort" data-sort="name">
    Sort by name
  </button>

  <ul class="list">

    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">google.com</span><a href="google.com" class="url">google</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>

  </ul>

</div>
<script src="http://listjs.com/no-cdn/list.js"></script>
<script>
	var options = { valueNames: [ 'name', 'addedDate', 'url' ] };
	var userList = new List('users', options);
</script>