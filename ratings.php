<?php

if($row["rating"] == 5)
{ 
    
?>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
<?php

}
else if($row["rating"] == 4)
{ 
    
?>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star-o"></span>
<?php

}
else if($row["rating"] == 3)
{ 
    
?>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
<?php

}
else if($row["rating"] == 2)
{ 
    
?>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
<?php

}
else
{ 
    
?>
    <span class="fa fa-star"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
<?php

}

?>