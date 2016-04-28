@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Livestream</h1>

<div class="row">
	<div class="col-md-8">
		<p>See our worship services live right here! You can also view recent past services in case you missed them live.</p>

		<h2>Lutheran Worship 5-1-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1461704168" src="//livestream.com/accounts/8727672/events/5279014/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 4-24-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1460952563" src="//livestream.com/accounts/8727672/events/5224048/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 4-17-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1460397271" src="//livestream.com/accounts/8727672/events/5177035/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 4-10-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1459800005" src="//livestream.com/accounts/8727672/events/5125579/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 4-3-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1459212403" src="//livestream.com/accounts/8727672/events/5078199/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<!--<h2>Richard Nelson Memorial Service</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4739826/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
		</div>-->
	</div>
</div>

@stop
