<div class="modal fade" id="rating-edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    
   <form action="/quote/edit_rating?>">
      <!-- Modal body -->
      <div class="modal-body">
         <!-- rating -->
         <div class="form-group">
            <label for="rating">Рейтинг цитаты:</label>
            <input type="number" class="form-control input-sm" id="rating" name="rating" value="1">
            <input type="hidden" name="id_quote" value="">
         </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Изменить">
      </div>
   </form>
      

    </div>
  </div>
</div>