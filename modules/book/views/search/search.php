<?php
	$number = 1;
?>

<div class="col-md-12">
    <table class="table table-bordered table-sm">
        <!-- thead -->
        <thead class="bg-light text-center">
            <tr>
                <th width="40">#</th>
                <th>Название</th>
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
                </tr>
                <? $number++; ?>
            <? endforeach; ?>
            </tbody>
        <? endif; ?>
    </table>
</div>
