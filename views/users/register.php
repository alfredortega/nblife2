<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Register</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<form action="" method="POST" data-toggle="validator">
    <div class="form-group">    
        <div class="row">
            <div class="col-lg-4">
                    <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Email Address" autofocus id="email" name="email" value="">
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-lg-4">
                    <label>Enter Password</label>
                <input class="form-control" type="password" id="password" name="password" >
            </div>
        </div>      
        <br/>
        <div class="row">
            <div class="col-lg-4">
                    <label>Confirm Password</label>
                <input class="form-control" type="password" data-match="#password" id="confpassword" name="confpassword" data-match-error="Whoops, these don't match"  >
            </div>
        </div>      
        <br/>
        <div class="row">
            <div class="col-lg-4">
                    <input type="submit" class="btn btn-outline btn-primary" value="Register" id="Register" name="Register" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="login">Go to Login Page</a>
            </div>            
        </div>    
    </div>  
</form>    
