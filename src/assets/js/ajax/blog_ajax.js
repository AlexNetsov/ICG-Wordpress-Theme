jQuery(document).ready( function() {

   jQuery(".blog .single-blog-filter").click( function(e) {
      e.preventDefault();
      $('.active-blog-filter').removeClass('active-blog-filter');
      $(this).parent('li').addClass("active-blog-filter");
      
      var category_id = jQuery(this).attr("category-id");
      var query_vars = jQuery('.blog .query-vars').html();
      var nonce = jQuery('.blog .query-vars').attr("data-nonce");
      var cur_lang = jQuery('.blog .current-language-holder').html();
      var number_of_posts = 8;
      
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : blogAjax.ajaxurl,
         data : {action: "blog_ajax_callback", category_id : category_id, cur_lang: cur_lang, query_vars: query_vars, nonce: nonce, number_of_posts: number_of_posts},
         success: function(response) {
            if(response.type == "success") {
				jQuery('.blog .query-vars').html(response.new_query_vars);
				jQuery('.blog .news-showcase-container').html(response.data);
				if(response.number_of_posts <= 8){
					jQuery('.blog .load-more-button-container').hide();
				}
				else {
					jQuery('.blog .load-more-button-container').show();
				}
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });
   
   jQuery(".blog .load-more-button-container a").click( function(e) {
      e.preventDefault();
      
      var category_id = jQuery('.active-blog-filter a').attr("category-id");
      var query_vars = jQuery('.blog .query-vars').html();
      var nonce = jQuery('.blog .query-vars').attr("data-nonce");
      var cur_lang = jQuery('.blog .current-language-holder').html();
      var number_of_posts = -1;
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : blogAjax.ajaxurl,
         data : {action: "blog_ajax_callback", category_id : category_id, cur_lang: cur_lang, query_vars: query_vars, nonce: nonce, number_of_posts: number_of_posts},
         success: function(response) {
            if(response.type == "success") {
				jQuery('.blog .query-vars').html(response.new_query_vars);
				jQuery('.blog .news-showcase-container').html(response.data);
				jQuery('.blog .load-more-button-container').hide();
            }
            else {
               console.log("Ajax failed");
            }
         }
      });   

   });

});