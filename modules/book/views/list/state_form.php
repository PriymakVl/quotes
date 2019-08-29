<style type="text/css">
</style>

<div class="modal" id="state-edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    
   <form action="/book/edit_state?>">
      <!-- Modal body -->
      <div class="modal-body">
         <!-- rating -->
         <div class="form-group">
            <label for="state">Состояние книги:</label>
            <select name="state" id="state">
              <option value="<?=Book::STATE_NOT_READ?>">Не прочитана</option>
              <option value="<?=Book::STATE_SPEED_READ?>">Просмотрена</option>
              <option value="<?=Book::STATE_READ?>">Прочитана</option>
              <option value="<?=Book::STATE_AUDIO?>">Прослушана</option>
              <option value="<?=Book::STATE_OUTLINED?>">Законспектирована</option>
            </select>
            <input type="hidden" name="id_book" value="">
         </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Изменить">
      </div>
   </form>
      

    </div>
  </div>
</div>