<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Change Password</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<form action="" method="POST" data-toggle="validator">
    <div class="form-group">    
        <div class="row">
            <div class="col-lg-4">
                    <label>Enter New Password</label>
                <input class="form-control" type="password" id="password" name="password" >
            </div>
        </div>      
        <br/>
        <div class="row">
            <div class="col-lg-4">
                    <label>Confirm New Password</label>
                <input class="form-control" type="password" data-match="#password" id="confpassword" name="confpassword" data-match-error="Whoops, these don't match"  >
            </div>
        </div>      
        <br/>
        <div class="row">
        <div class="row">
            <div class="col-md-2">
                <input name="Submit" id="Submit" value="Update" class="btn btn-lg btn-warning btn-block" type="submit">
            </div>

            <div class="col-md-2">
                <input value="Cancel" class="btn btn-lg btn-primary btn-block" onclick="window.history.go(-1); return false;">
            </div>

        </div>    
    </div>  
</form>    
