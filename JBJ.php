<?php
/**
Plugin Name: Jon Bon Jovi: Living on a Prayer
Description: Awesome lyrics from JBJ's Living on a prayer
Author: Bjornen Nilsson
Version: 1.0
*/

function jbj_get_lyric() {
$lyrics = "Once upon a time not so long ago.
Tommy used to work on the docks.
Union's been on strike.
He's down on his luck.
It's tough, so tough.
Gina works the diner all day.
Working for her man.
She brings home her pay.
For love, for love.
She says, We've gotta hold on to what we've got.
It doesn't make a difference if we make it or not.
We've got each other and that's a lot.
For love we'll give it a shot.
Whoa, we're half-way there.
Whoa, livin' on a prayer.
Take my hand, we'll make it. I swear.
Whoa, livin' on a prayer.
Tommy's got his six string in hock.
Now he's holding in
What he used to make it talk.
So tough, it's tough.
Gina dreams of running away.
When she cries in the night
Tommy whispers,
Baby, it's okay, someday.
We've gotta hold on to what we've got.
It doesn't make a difference if we make it or not.
We've got each other and that's a lot.
For love we'll give it a shot.
Whoa, livin' on a prayer.
Livin' on a prayer.
We've gotta hold on ready or not.
You live for the fight when it's all that you've got.";

	$lyrics = explode( "\n", $lyrics );

	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

function jbj_loap() {
	$chosen = jbj_get_lyric();
	echo "<p id='jbj'>$chosen</p>";
}

add_action( 'admin_notices', 'jbj_loap' );

function jbj_css() {
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#jbj {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 15px;
	}
	</style>
	";
}

add_action( 'admin_head', 'jbj_css' );

?>