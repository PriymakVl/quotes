<?php
	$number = 1;
?>
<table class="list-orders" width="940">
    <tr>
        <th width="40">#</th>
        <th width="550">Цитата</th>
		<th width="80">Рейтинг</th>
		<th>Управление</th>
    </tr>
    <? if ($quotes): ?>
        <?foreach ($qutotes as $quote): ?>
            <tr>
                <td>
					<a href="/quote?id_quote=<?$quote->id?>"><?=$number?></a>
                </td>
                <td>
                    <a href="/order?id_order=<?=$order->id?>"><?=$order->symbol?></a>
                </td>
				<? if ($order->positions): ?>
					<td class="order-positions-td"><?=$order->positionsTable?></td>
				<? else: ?>
					<td class="red">Нет позиций</td>
				<? endif; ?>
				<td><?=$order->date_exec ? date('d.m.y', $order->date_exec) : 'Нет';?></td>
				<td><?=$order->note?></td>
            </tr>
        <? endforeach; ?>
    <? else: ?>
        <tr>
            <td colspan="5" style="color: red;">Заказов нет</td>
        </tr>
    <? endif; ?>
</table>