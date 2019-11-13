jQuery(document).ready( function() {

   jQuery(".single-program .single-procedure-filter").click( function(e) {
      e.preventDefault();
      $('.active-procedure-filter').removeClass('active-procedure-filter');
      $(this).parent('li').addClass("active-procedure-filter");
      
      var category_id = jQuery(this).attr("category-id");
      var ids = jQuery('.single-program .query-vars').html();
      var nonce = jQuery('.single-program .query-vars').attr("data-nonce");
      //var cur_lang = jQuery('.single-program .current-language-holder').html();
      
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : singleProgramAjax.ajaxurl,
         data : {action: "single_program_ajax_callback", category_id : category_id, ids: ids, nonce: nonce },
         success: function(response) {
            if(response.type == "success") {
	            if (response.data){
		            jQuery('.single-program .procedures-showcase-container').html(response.data);
	            }
				else {
					jQuery('.single-program .procedures-showcase-container').html('');
				}
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });

});