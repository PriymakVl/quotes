  <div class="container">

    <div class="row">
      <!-- message -->
      <? include './views/total/message.php'; ?>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Цитаты</h2>
      </div>
    </div>

	
  	<div class="row">

  		<!-- menu -->
      <? include 'menu.php'; ?>

  		<!-- quotes -->
  		<? include 'quotes.php'; ?>
        
    </div>

    <!-- pagination -->
    <div class="row">
      <div class="col-md-12">
        <?= $pagination ? $pagination->links : ''?> 
      </div>
    </div>
  </div>

  <!-- rating form -->
  <? include 'rating_form.php'; ?>

  <!-- scripts -->
  <script type="text/javascript" src="/modules/quote/js/set_id_quote_for_form_rating.js"></script>
