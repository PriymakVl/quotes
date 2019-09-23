<?php
	$number = 1;
?>

<div class="col-md-10">
    <table class="table table-bordered table-sm">
        <!-- thead -->
        <thead class="bg-light text-center">
            <tr>
                <th width="40">#</th>
                <th>Текст</th>
                <th width="30">Рейтинг</th>
            </tr>
        </thead>
        <!-- tbody -->
        <? if ($quotes): ?>
            <tbody class="table-striped">
            <?foreach ($quotes as $quote): ?>
                <tr>
                    <td class="text-center"><?=$number?></td>
                    <td>
                        <a href="/quote?id_quote=<?=$quote->id?>"><?=$quote->text?></a>
                    </td>
                    <td class="text-center">
                        <a href="#rating-edit" data-toggle="modal" id_quote="<?=$quote->id?>"><?=$quote->rating ? $quote->rating : 0?></a>
                    </td>
                </tr>
                <? $number++; ?>
            <? endforeach; ?>
            </tbody>
        <? endif; ?>
    </table>
</div>
