<?php
	$number = 1;
?>

<div class="col-md-10">
    <table class="table table-bordered table-sm">
        <!-- thead -->
        <thead class="bg-light text-center">
            <tr>
                <th width="40">#</th>
                <th>Название</th>
                <th>Автор</th>
                <th width="120">Состояние</th>
                <th width="30">Рейтинг</th>
            </tr>
        </thead>
        <!-- tbody -->
        <? if ($books): ?>
            <tbody class="table-striped">
            <?foreach ($books as $book): ?>
                <tr>
                    <td class="text-center"><?=$number?></td>
                    <td>
                        <a href="/book?id_book=<?=$book->id?>"><?=$book->title?></a>
                    </td>
                    <td><?=$book->author ? $book->author->surname : ''?></td>
                    <td class="text-center" style="background: <?=$book->getBgState()?>">
                        <a href="#state-edit" data-toggle="modal" id_book="<?=$book->id?>" class="text-dark"><?=$book->convertState()?></a>
                    </td>
                    <td class="text-center">
                        <a href="#rating-edit" data-toggle="modal" id_book="<?=$book->id?>"><?=$book->rating ? $book->rating : 0?></a>
                    </td>
                </tr>
                <? $number++; ?>
            <? endforeach; ?>
            </tbody>
        <? endif; ?>
    </table>
</div>
