<div id="favorite-quote">
	<? if ($quotes->favorite): ?>
		<?=$quotes->favorite->text?>
	<? else: ?>
		<span>Put your favorite quote here...<span>
	<? endif; ?>
</div>