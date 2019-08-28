<?php
	$number = 1;
?>

<div class="col-md-10">
    <table class="table table-hover table-bordered table-sm">
        <!-- thead -->
        <thead class="bg-light text-center">
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Автор</th>
                <th>Категория</th>
                <th>Рейтинг</th>
            </tr>
        </thead>
        <!-- tbody -->
        <? if ($books): ?>
            <tbody class="table-striped">
            <?foreach ($books as $book): ?>
                <tr>
                    <td><?=$number?></td>
                    <td>
                        <a href="/book?id_book=<?=$book->id?>"><?=$book->title?></a>
                    </td>
                    <td><?=$book->author ? $book->author->surname : ''?></td>
                    <td><?=$book->category ? $book->category->name : ''?></td>
                    <td> <!-- data-target="#checkout" -->
                        <a href="#rating-edit" data-toggle="modal"><?=$book->rating ? $book->rating : 0?></a>
                    </td>
                </tr>
                <? $number++; ?>
            <? endforeach; ?>
            </tbody>
        <? endif; ?>
    </table>
</div>
