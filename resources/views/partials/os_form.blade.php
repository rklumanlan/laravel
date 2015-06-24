<?php


foreach($os_def as $key => $os_def){
   if (in_array($os_def->id, $selected_os)) {
       $check="checked";
   }
   else{$check="";}

    echo"
      <div class='col-sm-3 '>
      <label class='checkbox-inline '>
          <input type='checkbox' name='os[]' value='".$os_def->id."' ".$check.">".$os_def->os_desc."
      </label>
      </div>";
}

?>
