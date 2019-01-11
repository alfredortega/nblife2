<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">My Clients</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <a alt="View All Clients" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/showallclients'  ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/group.png' ?>">View All Clients
        </a>
        &nbsp;&nbsp;&nbsp;        
        <a alt="Add Client" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/addclient/' ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/person.png' ?>">Add Client
        </a>
        
        <br/>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Cust ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Edit Client</th>
                        <th>Delete Client</th>
                        <th>Edit HTMA</th>
                        <th>Add HTMA</th>
                        <th>Edit Symptom Sheet</th>
                        <th>Add Symptom Sheet</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($clients as $client)
                        {
                            echo '<tr>';
                            echo '<td>' . $client->id .  '</td>';
                            echo '<td>' . $client->firstname .  '</td>';
                            echo '<td>' . $client->lastname .  '</td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/editclient/' . $client->id .  '/"><img alt="Edit Client" src="' .  $GLOBALS['BASE_URL'] . 'images/pencil.png" height="25" width="25">Edit </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/deleteclient/' . $client->id .  '"><img alt="Delete Client" src="' .  $GLOBALS['BASE_URL'] . 'images/cancel.png" height="25" width="25">Delete </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/selectclienthtma/' . $client->id .  '"><img alt="Edit HTMA" src="' .  $GLOBALS['BASE_URL'] . 'images/htma.png" height="25" width="25">Edit HTMA </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/addclienthtma/' . $client->id .  '"><img alt="Add HTMA" src="' .  $GLOBALS['BASE_URL'] . 'images/plus.png" height="25" width="25">Add HTMA </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/selectsymptomsheet/' . $client->id .  '"><img alt="Edit Symptom Sheet" src="' .  $GLOBALS['BASE_URL'] . 'images/symptomsheet-view.png" height="25" width="25">Edit Symptom Sheet </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/addsymptomsheet/' . $client->id .  '"><img alt="Add Symptom Sheet" src="' .  $GLOBALS['BASE_URL'] . 'images/symptomsheet-add.png" height="25" width="25">Add Symptom Sheet </a></td>';
                            echo '</tr>';
                        }


                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
