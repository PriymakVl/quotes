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
					<a href="/book?id_book=<?=$book->id?>"><?=$number?></a>
				</td>
                <td>
                    <?=$book->title?>
                </td>
                <td>
					<?=$book->author ? $book->author->surname : ''?>
				</td>
				<td><?=$book->category ? $book->category->name : ''?></td>
			</tr>
			<? $number++; ?>
        <? endforeach; ?>
	<? else: ?>
		<tr><td colspan="3" class="red">Нет подкатегорий</td></tr>
	<? endif; ?>
</table>