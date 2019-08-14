<?php
	$number = 1;
?>
<table class="list-books" width="940">
    <tr>
        <th width="40">№</th>
        <th>Автор</th>
        <th>Книги</th>
    </tr>
    <? if ($authors): ?>
        <?foreach ($authors as $author): ?>
            <tr>
                <td>
					<?=$number?>
				</td>
                <td>
                    <a href="/author?id_author=<?=$author->id?>"><?=$author->surname?></a>
                </td>
                <td>нет</td>
			</tr>
			<? $number++; ?>
        <? endforeach; ?>
	<? else: ?>
		<tr><td colspan="3" class="red">Нет авторов</td></tr>
	<? endif; ?>
</table>