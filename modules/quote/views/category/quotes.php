<?php
	$number = 1;
?>
<table id="category-quote-list" width="940">
    <tr>
        <th width="40">№</th>
        <th>Цитата</th>
		<th width="80">Рейтинг</th>
    </tr>
    <? if ($quotes): ?>
        <?foreach ($quotes as $quote): ?>
            <tr>
                <td>
					<a href="/quote?id_quote=<?$quote->id?>"><?=$number?></a>
                </td>
                <td><?=$quote->text?></td>
				<td>
					<a href="#" class="quote-rating"><?=$quote->rating ? $quote->rating : 0?></a>
				</td>
            </tr>
			<? $number++; ?>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="4" style="color: red;">Цитат нет</td>
        </tr>
    <? endif; ?>
</table>