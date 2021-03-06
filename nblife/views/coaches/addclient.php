<fieldset>
    <legend>Add Client</legend>
    <form action="" method="post" >
<!-- /.row -->
<div class="row">
        <div class="col-md-4">
            <label for="firstname">First Name <span style="color:maroon;">(*required)</span> </label>
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
            <label for="lastname">Last Name <span style="color:maroon;">(*required)</span></label>
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
            <label for="agerange">Age Range <span style="color:maroon;">(*required)</span></label>
                <select id="agerange" name="agerange" required="requried" class="form-control">
                    <option value="1">Under 18</option>
                    <option value="2">18-24</option>
                    <option value="3">25-34</option>
                    <option value="4">35-44</option>
                    <option value="5">45-54</option>
                    <option value="6">55-64</option>
                    <option value="7">65-74</option>
                    <option value="8">74 and above</option>
                </select>
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
            <label for="gender">Gender <span style="color:maroon;">(*required)</span></label><br/>
                <input type="radio" name="gender" value="M" >Male
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="F">Female            
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-8">
            <label for="streetaddress">Street Address <span style="color:maroon;">(*required)</span></label>
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
            <label for="city">City <span style="color:maroon;">(*required)</span></label>
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
            <label for="zipcode">Zip <span style="color:maroon;">(*required)</span></label>
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
            <label for="homephone">Home/Cell Phone ex.816-555-1234 <span style="color:maroon;">(*required)</span></label>
            <input type="tel" 
                    id="homephone" 
                    class="form-control" 
                    required="required" 
                    name="homephone"
                    value="" 
                    placeholder="816-555-1234"
                    title="Must be in this format: 816-555-1234"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    required>
        </div>
        <div class="col-md-4">
            <label for="workphone">Work Phone ex.816-555-1234</label>
            <input type="tel" 
                    id="workphone" 
                    class="form-control" 
                    name="workphone"
                    value="" 
                    placeholder="816-555-1234"
                    title="Must be in this format: 816-555-1234"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    >

        </div>
        <div class="col-md-2">
            <label for="height">Height <span style="color:maroon;">(*required)</span></label>
            <input type="text" 
                    id="height" 
                    required="required" 
                    name="height"
                    class="form-control" 
                    value=""
                    placeholder="5'8">

        </div>
        <div class="col-md-2">
            <label for="weight">Weight <span style="color:maroon;">(*required)</span></label>
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
            <label>Email Address <span style="color:maroon;">(*required)</span></label>
            <input type="email" class="form-control" placeholder="Enter Email Address" id="emailaddress" name="emailaddress" value="">
        </div>
        <div class="col-lg-6">
            <label>Conf Email Address <span style="color:maroon;">(*required)</span></label>
            <input type="email" class="form-control" placeholder="Enter Email Address" id="confemailaddress" name="confemailaddress" value="">
        </div>
    </div><!-- end row -->
    <br/>
    <div class="row">
        <div class="col-lg-2">
            <input name="Submit" id="Submit" value="Submit" class="btn btn-lg btn-success btn-block" type="submit">
        </div>

        <div class="col-lg-2">
            <a class="btn btn-lg btn-primary btn-block" href="<?php echo $GLOBALS['BASE_URL'] ?>/coaches/showmyclients">Cancel</a>
        </div>    
    </div>

    </form>
</fieldset>
