<?php 
function ShowAttribute($label, $value){
    echo '<div class="col" name="' . $label . '">
              <h3>'.$label.'</h3>
              <p class="fields">'.$value.'</p>
          </div>';
}
    
?>
