<?php
	$number = 1;
?>
<table class="list-subcategories" width="940">
    <tr>
        <th width="40">№</th>
        <th width="250">Название</th>
        <th>Кол-во цитат</th>
        <th>Примечание</th>
    </tr>
    <? if ($category->sub): ?>
        <?foreach ($category->sub as $sub): ?>
            <tr>
                <td><?=$number?></td>
                <td>
                    <a href="/quote/category?id_cat=<?=$sub->id?>"><?=$sub->name?></a>
                </td>
                <td>
					Пусто 
				</td>
				<td>Примечание</td>
			</tr>
			<? $number++; ?>
        <? endforeach; ?>
	<? else; ?>
		<tr><td colspan="3" class="red">Нет подкатегорий</td></tr>
	<? elseif: ?>
</table>