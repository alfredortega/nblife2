<fieldset>
    <legend>Edit Customer</legend>
    <form action="" method="post" >
    <div class="row">
        <div class="col-md-4">
            <label for="firstname">First Name</label>
            <input type="text" 
                    id="firstname" 
                    class="form-control" 
                    required="required" 
                    name="firstname"
                    value="<?php echo $customer->firstname ?>" 
                    placeholder="First Name">
        </div>
        <div class="col-md-4">
            <label for="middlename">Middle Name</label>
            <input type="text" 
                    id="middlename" 
                    class="form-control"
                    name="middlename"
                    value="<?php echo $customer->middlename ?>" 
                    placeholder="Middle Name">
        </div>
        <div class="col-md-4">
            <label for="lastname">Last Name</label>
            <input type="text" 
                    id="lastname" 
                    class="form-control" 
                    required="required" 
                    name="lastname"
                    value="<?php echo $customer->lastname ?>" 
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
                    value="<?php echo $customer->dateofbirth ?>"
                    >
        
        </div>
        <div class="col-md-4"> 
            <label for="salutation">Salutation</label>
            <select id="salutation" 
                    name="salutation"
                    class="form-control"
                    >
                <option value="Mr" <?php if($customer->salutation == 'Mr') echo 'selected'; ?> >Mr</option>
                <option value="Ms" <?php if($customer->salutation == 'Ms') echo 'selected'; ?> >Ms</option>
                <option value="Mrs" <?php if($customer->salutation == 'Mrs') echo 'selected'; ?> >Mrs</option>
                <option value="Rev" <?php if($customer->salutation == 'Rev') echo 'selected'; ?> >Rev</option>
                <option value="Dr" <?php if($customer->salutation == 'Dr') echo 'selected'; ?> >Dr</option>
            </select>
        </div>
        <div class="col-md-4"> 
            <label for="gender">Gender</label>
            <select id="gender" 
                    name="gender"
                    class="form-control"
                    >
                <option value="M" <?php if($customer->gender == 'M') echo 'selected'; ?> >Male</option>
                <option value="F"<?php if($customer->gender == 'F') echo 'selected'; ?>>Female</option>
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
                    value="<?php echo $customer->streetaddress ?>" 
                    placeholder="Street Address">

        </div>
        <div class="col-md-4">
            <label for="streetaddress2">Apt/Bldg</label>
            <input type="text" 
                    id="streetaddress2" 
                    class="form-control" 
                    name="streetaddress2" 
                    value="<?php echo $customer->streetaddress2 ?>"
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
                    value="<?php echo $customer->city ?>" 
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
                    value="<?php echo $customer->state ?>"
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
                    value="<?php echo $customer->zipcode ?>"
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
                    value="<?php echo $customer->homephone ?>" 
                    placeholder="Home or Cell Phone">
        </div>
        <div class="col-md-4">
            <label for="workphone">Work Phone</label>
            <input type="tel" 
                    id="workphone" 
                    class="form-control" 
                    name="workphone"
                    value="<?php echo $customer->workphone ?>" 
                    placeholder="Work Phone">

        </div>
        <div class="col-md-2">
            <label for="height">Height</label>
            <input type="text" 
                    id="height" 
                    required="required" 
                    name="height"
                    class="form-control" 
                    value="<?php echo $customer->height ?>"
                    placeholder="5'8">

        </div>
        <div class="col-md-2">
            <label for="weight">Weight</label>
            <input type="number" 
                    id="weight" 
                    required="required" 
                    name="weight"
                    value="<?php echo $customer->weight ?>"
                    class="form-control" 
                    placeholder="160">
        </div>
    </div>
    <br/>
    <input name="Submit" id="Submit" value="Submit" class="btn btn-lg btn-success btn-block" type="submit">
    </form>
</fieldset>
