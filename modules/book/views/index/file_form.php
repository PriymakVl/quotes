<div class="modal fade" id="upload-file-book">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    
   <form action="/book/upload_file" enctype="multipart/form-data" method="post">
      <!-- Modal body -->
      <div class="modal-body">
         <!-- rating -->
         <div class="form-group">
            <label for="rating">Файл книги:</label>
            <input type="file" name="file_book">
            <input type="hidden" name="id_book" value="<?=$book->id?>">
         </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Загрузить">
      </div>
   </form>
      

    </div>
  </div>
</div>