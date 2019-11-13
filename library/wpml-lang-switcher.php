<?php 
function icl_post_languages(){
  $languages = icl_get_languages('skip_missing=0');
  $lang_html = '';
  if(1 < count($languages)){
    $lang_html .= '<div class="language-switcher-container">';
    foreach($languages as $l){
	  if($l['language_code'] == 'bg'){
		 $l['language_code'] = 'бг'; 
	  }
      if(!$l['active']) {
	      $lang_html .= '<a href="'.$l['url'].'">'.$l['language_code'].'</a>';
	  }
	  else {
		  $lang_html .= '<a class="active-lang" href="'.$l['url'].'">'.$l['language_code'].'</a>';
	  }
    }
    $lang_html .= '</div>';
  }
  echo $lang_html;
}	
?>