<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">View My Hair Tissue and Mineral Analysis Results</h3>
    </div>
    
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
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
                    echo '<td><a href="' . $GLOBALS['BASE_URL'] . 'clients/htmaataglance/' . $htmaresult->id .  '/"><img alt="View HTMA" src="' .  $GLOBALS['BASE_URL'] . 'images/view.png" height="25" width="25">View</a></td>';
                    echo '<td>' . $htmaresult->labnumber .  '</td>';
                    echo '<td>' . $htmaresult->labdate .  '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
