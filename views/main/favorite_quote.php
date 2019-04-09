<div id="favorite-quote">
	<? if ($quote->favorite): ?>
		<?=$quote->favorite->text?>
	<? else: ?>
		<span>Put your favorite quote here...<span>
	<? endif; ?>
</div>