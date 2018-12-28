<form action="" method="POST">

    <div class="alert alert-danger">
        You are about to delete <?php echo $customer->firstname . ' ' .  $customer->lastname;  ?> ? Are you sure?
    </div>

    <div class="row">
        <div class="col-md-6">
            <input name="Submit" id="Submit" value="Delete" class="btn btn-lg btn-warning btn-block" type="submit">
        </div>

        <div class="col-md-6">
            <input value="Cancel" class="btn btn-lg btn-primary btn-block" onclick="window.history.go(-1); return false;">
        </div>
    </div>
</form>