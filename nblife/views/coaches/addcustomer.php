<fieldset>
    <legend>Add Customer</legend>
    <form action="" method="post" >
<!-- /.row -->
<div class="row">
        <div class="col-md-4">
            <label for="firstname">First Name</label>
            <input type="text" 
                    id="firstname" 
                    class="form-control" 
                    required="required" 
                    name="firstname"
                    value="" 
                    placeholder="First Name"
                    autofocus>
        </div>
        <div class="col-md-4">
            <label for="middlename">Middle Name</label>
            <input type="text" 
                    id="middlename" 
                    class="form-control"
                    name="middlename"
                    value="" 
                    placeholder="Middle Name">
        </div>
        <div class="col-md-4">
            <label for="lastname">Last Name</label>
            <input type="text" 
                    id="lastname" 
                    class="form-control" 
                    required="required" 
                    name="lastname"
                    value="" 
                    placeholder="Last Name">
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="col-md-4"> 
            <label for="dateofbirth">Date of Birth</label>
            <input type="date" 
                    id="dateofbirth" 
                    required="required"
                    name="dateofbirth"
                    class="form-control"
                    value=""
                    >
        
        </div>
        <div class="col-md-4"> 
            <label for="salutation">Salutation</label>
            <select id="salutation" 
                    name="salutation"
                    class="form-control"
                    >
                <option value="Mr" >Mr</option>
                <option value="Ms" >Ms</option>
                <option value="Mrs" >Mrs</option>
                <option value="Rev" >Rev</option>
                <option value="Dr" >Dr</option>
            </select>
        </div>
        <div class="col-md-4"> 
            <label for="gender">Gender</label>
            <select id="gender" 
                    name="gender"
                    class="form-control"
                    >
                <option value="M" >Male</option>
                <option value="F" >Female</option>
            </select>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-8">
            <label for="streetaddress">Street Address</label>
            <input type="text" 
                    id="streetaddress" 
                    class="form-control" 
                    required="required" 
                    name="streetaddress"
                    value="" 
                    placeholder="Street Address">

        </div>
        <div class="col-md-4">
            <label for="streetaddress2">Apt/Bldg</label>
            <input type="text" 
                    id="streetaddress2" 
                    class="form-control" 
                    name="streetaddress2" 
                    value=""
                    placeholder="Apt/Bldg #">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-7">
            <label for="city">City</label>
            <input type="text" 
                    id="city" 
                    class="form-control"  
                    required="required" 
                    name="city"
                    value="" 
                    placeholder="City">
        </div>
        <div class="col-md-2">
            <label for="state">State Abbr</label>
            <input type="text" 
                    id="state" 
                    class="form-control"  
                    required="required" 
                    name="state" 
                    maxlength="2"
                    value=""
                    placeholder="State">
        </div>
        <div class="col-md-3">
            <label for="zipcode">Zip</label>
            <input type="text" 
                    id="zipcode" 
                    class="form-control"  
                    required="required" 
                    name="zipcode" 
                    placeholder="Zip Code"
                    value=""
                    maxlength="10">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <label for="homephone">Home/Cell Phone</label>
            <input type="tel" 
                    id="homephone" 
                    class="form-control" 
                    required="required" 
                    name="homephone"
                    value="" 
                    placeholder="Home or Cell Phone">
        </div>
        <div class="col-md-4">
            <label for="workphone">Work Phone</label>
            <input type="tel" 
                    id="workphone" 
                    class="form-control" 
                    name="workphone"
                    value="" 
                    placeholder="Work Phone">

        </div>
        <div class="col-md-2">
            <label for="height">Height</label>
            <input type="text" 
                    id="height" 
                    required="required" 
                    name="height"
                    class="form-control" 
                    value=""
                    placeholder="5'8">

        </div>
        <div class="col-md-2">
            <label for="weight">Weight</label>
            <input type="number" 
                    id="weight" 
                    required="required" 
                    name="weight"
                    value=""
                    class="form-control" 
                    placeholder="160">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <br/>
            <p class="text-warning">This is the email address the person will use to login with the default password of: <?php echo $GLOBALS['DEFAULT_PASSWORD'];  ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Enter Email Address" id="emailaddress" name="emailaddress" value="">
        </div>
        <div class="col-lg-6">
            <label>Conf Email Address</label>
            <input type="email" class="form-control" placeholder="Enter Email Address" id="confemailaddress" name="confemailaddress" value="">
        </div>
    </div><!-- end row -->
    <br/>
    <div class="row">
        <div class="col-lg-2">
            <input name="Submit" id="Submit" value="Submit" class="btn btn-lg btn-success btn-block" type="submit">
        </div>

        <div class="col-lg-2">
            <input value="Cancel" class="btn btn-lg btn-primary btn-block" onclick="window.history.go(-1); return false;">
        </div>    
    </div>

    </form>
</fieldset>
