<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">My Customers</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <a alt="View All Customers" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/showallcustomers'  ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/group.png' ?>">View All Customers
        </a>
        &nbsp;&nbsp;&nbsp;        
        <a alt="Add Customer" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/addcustomer/' ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/person.png' ?>">Add Customer
        </a>
        
        <br/>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Cust ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Edit Customer</th>
                        <th>Delete Customer</th>
                        <th>Edit HTMA</th>
                        <th>Add HTMA</th>
                        <th>Edit Symptom Sheet</th>
                        <th>Add Symptom Sheet</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($customers as $customer)
                        {
                            echo '<tr>';
                            echo '<td>' . $customer->id .  '</td>';
                            echo '<td>' . $customer->firstname .  '</td>';
                            echo '<td>' . $customer->lastname .  '</td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/editcustomer/' . $customer->id .  '/"><img alt="Edit Customer" src="' .  $GLOBALS['BASE_URL'] . 'images/pencil.png" height="25" width="25">Edit </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/deletecustomer/' . $customer->id .  '"><img alt="Delete Customer" src="' .  $GLOBALS['BASE_URL'] . 'images/cancel.png" height="25" width="25">Delete </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/selectcustomerhtma/' . $customer->id .  '"><img alt="Edit HTMA" src="' .  $GLOBALS['BASE_URL'] . 'images/htma.png" height="25" width="25">Edit HTMA </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/addcustomerhtma/' . $customer->id .  '"><img alt="Add HTMA" src="' .  $GLOBALS['BASE_URL'] . 'images/plus.png" height="25" width="25">Add HTMA </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/selectsymptomsheet/' . $customer->id .  '"><img alt="Edit Symptom Sheet" src="' .  $GLOBALS['BASE_URL'] . 'images/symptomsheet-view.png" height="25" width="25">Edit Symptom Sheet </a></td>';
                            echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/addsymptomsheet/' . $customer->id .  '"><img alt="Add Symptom Sheet" src="' .  $GLOBALS['BASE_URL'] . 'images/symptomsheet-add.png" height="25" width="25">Add Symptom Sheet </a></td>';
                            echo '</tr>';
                        }


                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
