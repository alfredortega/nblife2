<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Clients</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <a alt="View My Clients" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/showmyclients'  ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/group.png' ?>">View My Clients
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Edit Client</th>
                        <th>Inactivate Client</th>
                        <th>HTMA Edit</th>
                        <th>HTMA Enter</th>
                        <th>Symptom Sheet Edit</th>
                        <th>Symptom Sheet Enter</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($clients as $client)
                        {
                            echo '<tr>';
                            echo '<td>' . $client->firstname .  '</td>';
                            echo '<td>' . $client->lastname .  '</td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/editclient/' . $client->id .  '/"><img alt="Edit Client" src="' .  $GLOBALS['BASE_URL'] . 'images/pencil.png" height="25" width="25">Edit </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/deleteclient/' . $client->id .  '"><img alt="Inactivate Client" src="' .  $GLOBALS['BASE_URL'] . 'images/cancel.png" height="25" width="25">Inactivate</a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/selectclienthtma/' . $client->id .  '"><img alt="HTMA Edit" src="' .  $GLOBALS['BASE_URL'] . 'images/htma.png" height="25" width="25">HTMA Edit </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/addclienthtma/' . $client->id .  '"><img alt="HTMA Enter" src="' .  $GLOBALS['BASE_URL'] . 'images/plus.png" height="25" width="25">HTMA Enter</a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/selectsymptomsheet/' . $client->id .  '"><img alt="Symptom Sheet Edit" src="' .  $GLOBALS['BASE_URL'] . 'images/symptomsheet-view.png" height="25" width="25">Symptom Sheet Edit</a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/addsymptomsheet/' . $client->id .  '"><img alt="Symptom Sheet Enter" src="' .  $GLOBALS['BASE_URL'] . 'images/symptomsheet-add.png" height="25" width="25">Symptom Sheet Enter</a></td>';
                            echo '</tr>';
                        }


                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
