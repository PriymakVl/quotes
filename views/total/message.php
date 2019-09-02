<? if($this->message->text): ?>
    <div class="container">
        <p class="alert <?=$this->message->class?>"><?=$this->message->text?></p>
       <!--  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span> -->
    </div>
<? endif; ?>
