<?php


foreach($lang_def as $key => $lang_def){
   if (in_array($lang_def->id, $selected_lang)) {
       $check="checked";
   }
   else{$check="";}

    echo"
      <div class='col-sm-3 '>
      <label class='checkbox-inline '>
          <input type='checkbox' name='lang[]' value='".$lang_def->id."' ".$check.">".$lang_def->lang_desc."
      </label>
      </div>";
}

?>
