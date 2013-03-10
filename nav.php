<?php

$active=' class="active"';

?>
<body>
	<div class="navbar navbar-static-top">
		<div class="navbar-inner">
			<div class="container">
				<a href="/" class="brand">Project Ares Rushes</a>
				<ul class="nav">
					<li<?php if($i=="home"){echo$active;} ?>><a href="/"><i class="icon-home" style="vertical-align:-1px"></i>&nbsp;Home</a></li>
					<li<?php if($i=="stats"){echo$active;} ?>><a href="/stats"><i class="icon-certificate" style="vertical-align:-1px;"></i>&nbsp;Top Players</a></li>
					<li<?php if($i=="maps"){echo$active;} ?>><a href="/maps"><i class="icon-table" style="vertical-align:-1px;"></i>&nbsp;Maps</a></li>
					<li><a href="//oc.tc"><i class="icon-desktop" style="vertical-align:-1px;"></i>&nbsp;Project Ares</a></li>
				</ul>
			</div>
		</div>
	</div>