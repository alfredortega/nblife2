<h4>Your ARL Bar Chart</h4>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">

            <?php
                if(strlen($htma->file_name) > 0)
                {
                    echo 'To open bar chart <a title="ARL Bar Chart" target="_blank" href="' .  $htma->file_name . '">click here</a>';
                }
                else
                {
                    echo 'No ARL Bar Chart has been uploaded.';
                }
            ?>
        
        </div>
    </div>    
</div>
