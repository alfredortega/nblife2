<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View HTMA results for <?php echo $fullname; ?></h1>
    </div>
    
</div>


<div class="row">
    <div class="col-lg-12">
        <a alt="View My Clients" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/showmyclients'  ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/group.png' ?>">View My Clients
        </a>
        &nbsp;&nbsp;&nbsp;        

        <a alt="Add Client" href="<?php echo $GLOBALS['BASE_URL'] . 'coaches/addclienthtma/' . $cid; ?> ">
            <img  height="25" width="25" alt="" src="<?php echo $GLOBALS['BASE_URL'] . 'images/person.png' ?>">Add HTMA
        </a>
        
    </div>
    <!-- /.col-lg-12 -->
</div>


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Lab Number</th>
                <th>Lab Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($htmaresults as $htmaresult)
                {
                    echo '<tr>';
                    echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/editclienthtma/' . $htmaresult->id .  '"><img alt="Edit Client HTMA" src="' .  $GLOBALS['BASE_URL'] . 'images/pencil.png" height="25" width="25">Edit </a></td>';
                    echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'coaches/deleteclienthtma/' . $htmaresult->id .  '"><img alt="Delete Client" src="' .  $GLOBALS['BASE_URL'] . 'images/cancel.png" height="25" width="25">Delete</a></td>';
                    echo '<td>' . $htmaresult->labnumber .  '</td>';
                    echo '<td>' . $htmaresult->labdate .  '</td>';
                    echo '</tr>';
                }


            ?>
        </tbody>
    </table>
</div>

        