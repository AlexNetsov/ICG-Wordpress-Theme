jQuery(document).ready( function() {
   
   jQuery(".projects-program-filters select").on('change', function(e) {
      e.preventDefault();

      var program_id = jQuery(this).find("option:selected").attr('value');
      var nonce = jQuery('.projects-program-filters').attr("data-nonce");
      var cur_lang = jQuery('.projects-program-filters').attr("data-language");
            
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : projectsAjax.ajaxurl,
         data : {action: "projects_ajax_callback", nonce: nonce, cur_lang: cur_lang, program_id: program_id},
         success: function(response) {
            if(response.type == "success") {
				jQuery('.projects-filter-showcase-container').html(response.data);
				//jQuery('.page-template-page-programs .load-more-button-container').hide();
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });

});