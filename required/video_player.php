<?php 
  
  if(isset($_GET['src_url']) && isset($_GET['preview_url'])) {
    $src_url = $_GET['src_url'];
    $preview_url = $_GET['preview_url'];
  }
  
?>

<object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="400" height="315">
	<param name="movie" value="swfs/player.swf" />
	<param name="allowfullscreen" value="true" />
	<param name="allowscriptaccess" value="always" />
	<param name="flashvars" value="file=<?php echo $src_url; ?>&image=<?php echo $preview_url; ?>" />
	<embed
		type="application/x-shockwave-flash"
		id="player2"
		name="player2"
		src="swfs/player.swf" 
		width="400" 
		height="315"
		allowscriptaccess="always" 
		allowfullscreen="true"
		flashvars="file=<?php echo $src_url; ?>&image=<?php echo $preview_url; ?>" 
	/>
</object>