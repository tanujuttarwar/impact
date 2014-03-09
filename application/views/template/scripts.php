<script src="<?php echo base_url().'assets/js/jquery-1.11.0.min.js'; ?>"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.sidelink').click(function(e){
     e.preventDefault();
     $("#content").load($(this).attr('href'));
  });
  
  $('body').on('click', '.datatable a', function(e) {
		e.preventDefault();
		$("#content").load($(this).attr('href'));
	});
	
	$('body').on('submit', 'form', function(e) {
		$.ajax({ // create an AJAX call...
        data: $(this).serialize(), // get the form data
        type: $(this).attr('method'), // GET or POST
        url: $(this).attr('action'), // the file to call
        success: function(response) { // on success..
            $('#content').html(response); // update the DIV
        }
		});
		return false;
	});
	
});
</script>