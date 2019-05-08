<?php
	$number = 1;
?>
<table class="list-books" width="940">
    <tr>
        <th width="40">№</th>
        <th width="250">Название</th>
        <th>Автор</th>
        <th>Категория</th>
    </tr>
    <? if ($books): ?>
        <?foreach ($books as $book): ?>
            <tr>
                <td>
					<a href="/books?id_=<?=$book->id?>"><?=$number?></a>
				</td>
                <td>
                    <?=$book->title?>
                </td>
                <td>
					<?=$book->author?>
				</td>
				<td><?=$book->category?></td>
			</tr>
			<? $number++; ?>
        <? endforeach; ?>
	<? else: ?>
		<tr><td colspan="3" class="red">Нет подкатегорий</td></tr>
	<? endif; ?>
</table>