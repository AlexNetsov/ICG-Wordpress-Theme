jQuery(document).ready( function() {
   
   jQuery(".projects-filter-showcase-container .load-more-button-container a").click( function(e) {
      e.preventDefault();
      
      var nonce = jQuery('.projects-program-filters').attr("data-nonce");
      var cur_lang = jQuery('.projects-program-filters').attr("data-language");
      var program_id = jQuery('.projects-program-filters select option:selected').attr('value');
      
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : projectsLoadMoreAjax.ajaxurl,
         data : {action: "projects_loadmore_callback", nonce: nonce, cur_lang: cur_lang, program_id: program_id,},
         success: function(response) {
            if(response.type == "success") {
				jQuery('.projects-filter-showcase-container').html(response.data);
				jQuery('.projects-filter-showcase-container .load-more-button-container').hide();
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });

});