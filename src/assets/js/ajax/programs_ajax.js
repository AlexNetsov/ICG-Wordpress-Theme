jQuery(document).ready( function() {
   
   jQuery(".page-template-page-programs .load-more-button-container a").click( function(e) {
      e.preventDefault();
      
      var query_vars = jQuery('.page-template-page-programs .query-vars').html();
      var nonce = jQuery('.page-template-page-programs .query-vars').attr("data-nonce");
      var cur_lang = jQuery('.page-template-page-programs .current-language-holder').html();
      console.log(nonce);
      
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : programsAjax.ajaxurl,
         data : {action: "programs_ajax_callback", query_vars: query_vars, nonce: nonce, cur_lang: cur_lang},
         success: function(response) {
            if(response.type == "success") {
				jQuery('.page-template-page-programs .query-vars').html(response.new_query_vars);
				jQuery('.page-template-page-programs .program-showcase-container').html(response.data);
				jQuery('.page-template-page-programs .load-more-button-container').hide();
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });

});