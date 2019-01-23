<fieldset>
    <legend>Edit Client</legend>
    <form action="" method="post" >
    <div class="row">
        <div class="col-md-4">
            <label for="firstname">First Name <span style="color:maroon;">(*required)</span></label>
            <input type="text" 
                    id="firstname" 
                    class="form-control" 
                    required="required" 
                    name="firstname"
                    value="<?php echo $client->firstname ?>" 
                    placeholder="First Name">
        </div>
        <div class="col-md-4">
            <label for="middlename">Middle Name</label>
            <input type="text" 
                    id="middlename" 
                    class="form-control"
                    name="middlename"
                    value="<?php echo $client->middlename ?>" 
                    placeholder="Middle Name">
        </div>
        <div class="col-md-4">
            <label for="lastname">Last Name <span style="color:maroon;">(*required)</span></label>
            <input type="text" 
                    id="lastname" 
                    class="form-control" 
                    required="required" 
                    name="lastname"
                    value="<?php echo $client->lastname ?>" 
                    placeholder="Last Name">
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="col-md-4"> 
            <label for="dateofbirth">Date of Birth< <span style="color:maroon;">(*required)</span>/label>
            <input type="date" 
                    id="dateofbirth" 
                    required="required"
                    name="dateofbirth"
                    class="form-control"
                    value="<?php echo $client->dateofbirth ?>"
                    >
        
        </div>
        <div class="col-md-4"> 
            <label for="salutation">Salutation</label>
            <select id="salutation" 
                    name="salutation"
                    class="form-control"
                    >
                <option value="Mr" <?php if($client->salutation == 'Mr') echo 'selected'; ?> >Mr</option>
                <option value="Ms" <?php if($client->salutation == 'Ms') echo 'selected'; ?> >Ms</option>
                <option value="Mrs" <?php if($client->salutation == 'Mrs') echo 'selected'; ?> >Mrs</option>
                <option value="Rev" <?php if($client->salutation == 'Rev') echo 'selected'; ?> >Rev</option>
                <option value="Dr" <?php if($client->salutation == 'Dr') echo 'selected'; ?> >Dr</option>
            </select>
        </div>
        <div class="col-md-4"> 
            <label for="gender">Gender <span style="color:maroon;">(*required)</span></label>
            <select id="gender" 
                    name="gender"
                    class="form-control"
                    >
                <option value="M" <?php if($client->gender == 'M') echo 'selected'; ?> >Male</option>
                <option value="F"<?php if($client->gender == 'F') echo 'selected'; ?>>Female</option>
            </select>
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
                    value="<?php echo $client->streetaddress ?>" 
                    placeholder="Street Address">

        </div>
        <div class="col-md-4">
            <label for="streetaddress2">Apt/Bldg</label>
            <input type="text" 
                    id="streetaddress2" 
                    class="form-control" 
                    name="streetaddress2" 
                    value="<?php echo $client->streetaddress2 ?>"
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
                    value="<?php echo $client->city ?>" 
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
                    value="<?php echo $client->state ?>"
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
                    value="<?php echo $client->zipcode ?>"
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
                    title="Must be in this format: 816-555-1234"
                    value="<?php echo $client->homephone ?>" 
                    placeholder="816-555-1234"
                    required
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    >
        </div>
        <div class="col-md-4">
            <label for="workphone">Work Phone ex.816-555-1234</label>
            <input type="tel" 
                    id="workphone" 
                    class="form-control" 
                    name="workphone"
                    value="<?php echo $client->workphone ?>" 
                    placeholder="816-555-1234"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    title="Must be in this format: 816-555-1234"
                    >

        </div>
        <div class="col-md-2">
            <label for="height">Height <span style="color:maroon;">(*required)</span></label>
            <input type="text" 
                    id="height" 
                    required="required" 
                    name="height"
                    class="form-control" 
                    value="<?php echo $client->height ?>"
                    placeholder="5'8">

        </div>
        <div class="col-md-2">
            <label for="weight">Weight <span style="color:maroon;">(*required)</span></label>
            <input type="number" 
                    id="weight" 
                    required="required" 
                    name="weight"
                    value="<?php echo $client->weight ?>"
                    class="form-control" 
                    placeholder="160">
        </div>
    </div>
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
