<div id="random-quotes-wrp">
	<h3>Случайные цитаты</h3>
    <? if ($favorites): ?>
        <? foreach($favorites as $favorite): ?>
            <div class="quote">
                <!--<p class="quote-info">Автор: <a href="../../index.php">Омар Хаям</a> &nbsp; |&nbsp;  Книга: <a href="">Стихи</a> &nbsp; |&nbsp;  Дата: 13.01.18</p>-->
                <p><?=$favorite->text?></p>
            </div>
        <? endforeach; ?>
    <? endif; ?>
</div>