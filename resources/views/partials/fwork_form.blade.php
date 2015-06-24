<?php


foreach($fwork_def as $key => $fwork_def){
   if (in_array($fwork_def->id, $selected_fwork)) {
       $check="checked";
   }
   else{$check="";}

    echo"
      <div class='col-sm-3 '>
      <label class='checkbox-inline '>
          <input type='checkbox' name='fwork[]' value='".$fwork_def->id."' ".$check.">".$fwork_def->fwork_desc."
      </label>
      </div>";
}

?>
