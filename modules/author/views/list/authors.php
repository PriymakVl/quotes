<?php
	$number = 1;
?>

<div class="col-md-10 p-0">
    <table class="table table-bordered table-sm">
        <!-- thead -->
        <thead class="bg-light text-center">
            <tr>
                <th width="40">№</th>
                <th>Автор</th>
                <th>Книги</th>
            </tr>
        </thead>
        <!-- tbody -->
        <tbody class="table-striped">
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
        </tbody>
    </table>
</div>