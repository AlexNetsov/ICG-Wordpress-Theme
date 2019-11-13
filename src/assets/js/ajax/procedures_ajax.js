jQuery(document).ready( function() {
   
   jQuery(".page-template-page-procedures .procedures-filters-dropdown select").on('change', function(e) {
      e.preventDefault();

      var program_id = jQuery(this).find("option:selected").attr('value');
      var nonce = jQuery('.query-vars').attr("data-nonce");
      var cur_lang = jQuery('.query-vars').attr("data-language");
      var procedure_state = jQuery('.procedures-filters .active-procedure-filter a').attr('category-id');
            
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : proceduresAjax.ajaxurl,
         data : {action: "procedures_ajax_callback", nonce: nonce, cur_lang: cur_lang, program_id: program_id, procedure_state: procedure_state},
         success: function(response) {
            if(response.type == "success") {
	            if (response.data){
					jQuery('.procedure-showcase-container').html(response.data);
				}
				else {
					jQuery('.procedure-showcase-container').html('');
				}
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });
   
   jQuery(".page-template-page-procedures .single-procedure-filter").on('click', function(e) {
      e.preventDefault();
      
	  $('.active-procedure-filter').removeClass('active-procedure-filter');
      $(this).parent('li').addClass("active-procedure-filter");
      
      var program_id = jQuery('.procedures-filters').find("option:selected").attr('value');
      var nonce = jQuery('.query-vars').attr("data-nonce");
      var cur_lang = jQuery('.query-vars').attr("data-language");
      var procedure_state = jQuery(this).attr('category-id');
            
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : proceduresAjax.ajaxurl,
         data : {action: "procedures_ajax_callback", nonce: nonce, cur_lang: cur_lang, program_id: program_id, procedure_state: procedure_state},
         success: function(response) {
            if(response.type == "success") {
				if (response.data){
					jQuery('.procedure-showcase-container').html(response.data);
				}
				else {
					jQuery('.procedure-showcase-container').html('');
				}
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });

});