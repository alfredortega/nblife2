<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Symptom Sheets for results for <?php echo $fullname; ?></h1>
    </div>
    
</div>


<div class="row">
    <div class="col-lg-12">
        <a alt="Add Customer" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/addsymptomsheet/' . $cid; ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/person.png' ?>">Add Symptom Sheet
        </a>
        
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Created Date</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($symptomsheets as $symptomsheet)
                {
                    echo '<tr>';
                    echo '<td>' . $symptomsheet['createddate'] .  '</td>';
                    echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/viewsymptomsheet/' . $symptomsheet['recordid'] .  '"><img alt="View Customer Symptom Sheet" src="' .  $GLOBALS['BASE_URL'] . 'images/view.png" height="25" width="25">View </a></td>';
                    echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/editsymptomsheet/' . $symptomsheet['recordid'] .  '"><img alt="Edit Customer Symptom Sheet" src="' .  $GLOBALS['BASE_URL'] . 'images/pencil.png" height="25" width="25">Edit </a></td>';
                    echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/deletesymptomsheet/' . $symptomsheet['recordid'] .  '"><img alt="Delete Customer" src="' .  $GLOBALS['BASE_URL'] . 'images/cancel.png" height="25" width="25">Delete</a></td>';
                    echo '</tr>';
                }


            ?>
        </tbody>
    </table>
</div>

        