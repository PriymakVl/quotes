<div id="random-quotes-wrp">
	<h3>Случайные цитаты</h3>
    <? if ($quote->random): ?>
        <? foreach($quote->random as $random): ?>
            <div class="quote">
                <!--<p class="quote-info">Автор: <a href="../../index.php">Омар Хаям</a> &nbsp; |&nbsp;  Книга: <a href="">Стихи</a> &nbsp; |&nbsp;  Дата: 13.01.18</p>-->
                <p><?=$random->text?></p>
            </div>
        <? endforeach; ?>
    <? endif; ?>
</div>