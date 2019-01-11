                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Client HTMA Input</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

            <form method="post" action="">

                <div class="row">
                    <div class="col-lg-4">
                         Name: <?php echo $fullname; ?>   
                    </div>
                    <div class="col-lg-1">
                         Sex: <?php echo $gender; ?>   
                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-1">
                        Age: <?php echo $age; ?>   
                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        Lab Date: 
                        <input type="date" name="labdate" id="labdate" value='<?php echo $labdate; ?>' required />   
                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        Lab Number: 
                        <input type="number" name="labnumber" name="labnumber" autofocus required />   
                    </div>
                    <!-- /.col-lg-3 -->
                </div>

                <br/>


                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Nutrient Minerals</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>


                <div class="row">
                    <div class="col-lg-1">
                        Calcium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Magnessium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Sodium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Potassium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Iron
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Copper
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Manganese
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Zinc
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Chromium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        Selenium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Phosphorus
                    </div>
                    <!-- /.col-lg-2 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="calcium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="magnesium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="sodium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="potassium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="iron" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="copper" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="manganese" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="zinc" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="chromium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" min="0" step=".001"  name="selenium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min=".000" step=".001"  name="phosphorus" required>
                    </div>
                    <!-- /.col-lg-2 -->
                </div>
                <!-- /.row -->


                <br/>


                <div class="row">
                    <div class="col-lg-12">
                        <h4>Toxic Minerals</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        Lead
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Mercury
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Cadmium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Arsenic
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Aluminum
                    </div>
                    <!-- /.col-lg-2 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="lead" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="mercury" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="cadmium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="arsenic" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="aluminum" required>
                    </div>
                    <!-- /.col-lg-2 -->
                </div>
                <!-- /.row -->


                <br/>



                <div class="row">
                    <div class="col-lg-12">
                        <h4>Additional Minerals</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        Nickel
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Cobalt
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Molybdemum
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Lithium
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        Boron
                    </div>
                    <!-- /.col-lg-2 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="nickel" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="cobalt" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="molybdenum" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="lithium" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" min="0" step=".001"  name="boron" required value="0">
                    </div>
                    <!-- /.col-lg-2 -->
                </div>
                    <!-- /.row -->

                <br/>
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

