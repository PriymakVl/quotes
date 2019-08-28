<style type="text/css">
</style>

<div class="modal" id="rating-edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    
   <form action="/book/edit_rating?>">
      <!-- Modal body -->
      <div class="modal-body">
         <!-- rating -->
         <div class="form-group">
            <label for="rating">Рейтинг книги:</label>
            <input type="number" class="form-control input-sm" id="rating" name="rating" value="1">
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