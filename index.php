<?php

$t="Home";$i="home";
include("functions.php");
include("head.php");
include("nav.php");

?>
<div class="container">
	<div class="page-header">
		<h2>Project Ares Rushes</h2>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<p>This site is made and maintained so that people of Project Ares can submit their best rushes.</p>
			<p>The site processes most of the information by itself, and the only thing the site moderator has to do with your rush is verify it.</p>
			<p>If you would like to help out, shoot an email to <a href="mailto:msalihov@gmail.com">msalihov</a>, and you might end up approving rushes.</p>
		</div>
		<div class="span3">
			<?php include("best_rush.php"); ?>
		</div>
		<div class="span3">
			<strong>Latest Rushes</strong>
			<?php include("latest.php"); ?>
		</div>
	</div>
</div>
<?php

include("foot.php");

?>