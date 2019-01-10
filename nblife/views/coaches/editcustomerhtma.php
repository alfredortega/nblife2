                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">HTMA Input</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

            <form method="post" action="">

                <!-- /.row -->
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
                        <input type="date" name="labdate" id="labdate" value='<?php echo $htma->labdate; ?>' required>   
                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        Lab Number: 
                        <input type="number" name="labnumber" id="labnumber" value='<?php echo $htma->labnumber; ?>' required>   
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
                        <input type="number" name="calcium" id="calcium" min="0" step=".001" value="<?php echo $htma->calcium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="magnesium" id="magnesium" min="0" step=".001" value="<?php echo $htma->magnesium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="sodium" id="sodium" min="0" step=".001" value="<?php echo $htma->sodium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="potassium" id="potassium" min="0" step=".001" value="<?php echo $htma->potassium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="iron" id="iron" min="0" step=".001" value="<?php echo $htma->iron; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="copper" id="copper" min="0" step=".001" value="<?php echo $htma->copper; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="manganese" id="manganese" min="0" step=".001" value="<?php echo $htma->manganese; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="zinc" id="zinc" min="0" step=".001" value="<?php echo $htma->zinc; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="chromium" id="chromium" min="0" step=".001" value="<?php echo $htma->chromium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-1">
                        <input type="number" name="selenium" id="selenium" min="0" step=".001" value="<?php echo $htma->selenium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="phosphorus" id="phosphorus" min="0" step=".001" value="<?php echo $htma->phosphorus; ?>" required>
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
                        <input type="number" name="lead" id="lead" min="0" step=".001" value="<?php echo $htma->lead; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="mercury" id="mercury" min="0" step=".001" value="<?php echo $htma->mercury; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="cadmium" id="cadmium" min="0" step=".001" value="<?php echo $htma->cadmium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="arsenic" id="arsenic" min="0" step=".001" value="<?php echo $htma->arsenic; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="aluminum" id="aluminum" min="0" step=".001" value="<?php echo $htma->aluminum; ?>" required>
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
                        <input type="number" name="nickel" id="nickel" min="0" step=".001" value="<?php echo $htma->nickel; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="cobalt" id="cobalt" min="0" step=".001" value="<?php echo $htma->cobalt; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="molybdenum" id="molybdenum" min="0" step=".001" value="<?php echo $htma->molybdenum; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="lithium" id="lithium" min="0" step=".001" value="<?php echo $htma->lithium; ?>" required>
                    </div>
                    <!-- /.col-lg-2 -->
                    <div class="col-lg-2">
                        <input type="number" name="boron" id="boron" min="-1"  step=".001" value="<?php echo $htma->boron; ?>" required>
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


            <div class="table-responsive">
                <table class="table table-striped" style="width:625px">
                    <thead>
                        <tr>
                            <th style="width:125px">Mineral Ratio</th>
                            <th style="width:125px;text-align:right;">Ideal Ratio</th>
                            <th style="width:125px;text-align:right;">Current Ratio</th>
                            <th style="width:125px;text-align:right;">% of Ideal</th>
                            <th style="width:125px;text-align:right;">Previous Ratio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >CA/MG</td>
                            <td align="right"><?php echo number_format((float)$htmaratiocalculator->calciumdividedbymagnessiumidealratio,2,'.',''); ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->calciumdividedbymagnessium; ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->calciumdividedbymagnessiumpercentage; ?></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td >CA/K</td>
                            <td align="right"><?php echo number_format((float)$htmaratiocalculator->calciumdividedbypotassiumidealratio,2,'.',''); ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->calciumdividedbypotassium; ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->calciumdividedbypotassiumpercentage; ?></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td >NA/MG</td>
                            <td align="right"><?php echo number_format((float)$htmaratiocalculator->sodiumdividedbymagnesiumidealratio,2,'.',''); ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->sodiumdividedbymagnesium; ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->sodiumdividedbymagnesiumpercentage; ?></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td >NA/K</td>
                            <td align="right"><?php echo number_format((float)$htmaratiocalculator->sodiumdividedbypotassiumidealratio,2,'.',''); ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->sodiumdividedbypotassium; ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->sodiumdividedbypotassiumpercentage; ?></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td >ZN/CU</td>
                            <td align="right"><?php echo number_format((float)$htmaratiocalculator->zincividedbycopperidealratio,2,'.',''); ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->zincividedbycopper; ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->zincividedbycopperpercentage; ?></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td >CA/P</td>
                            <td align="right"><?php echo number_format((float)$htmaratiocalculator->calciumdividedbyphosphorusidealratio,2,'.',''); ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->calciumdividedbyphosphorus; ?></td>
                            <td align="right"><?php echo $htmaratiocalculator->calciumdividedbyphosphoruspercentage; ?></td>
                            <td align="right"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <strong>OXIDATION TYPE:</strong> <?php echo $htmaratiocalculator->oxidationtype; ?>
                </div>

            </div>