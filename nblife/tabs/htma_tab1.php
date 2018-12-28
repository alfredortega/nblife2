<h4>Your Hair Tissue Mineral Analysis At-A-Glance</h4>


<div class="panel panel-green">
    <div class="panel-heading">
        I. YOUR ENERGY OUTPUT
    </div><!--panel heading-->
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <p>The most important ratio on the chart is the Vitality Ratio, the energy you have available for living. The next most important are the ratios that reveal the efficiency of your Adrenal and Thyroid glands. These are the glands, which in tandem serve as your energy producing powerhouse. </p>
                <p>Eventually, you’ll want to see these three ratios to move closer to IDEAL. As you heal, however, you can anticipate up and down movement in these ratios from one retest to the next. Movement indicates changes in body chemistry. These changes can be associated with eliminating toxic minerals and chemicals. They can also be associated with not following the program. </p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>SIGNIFICANT MINERAL RATIOS</th>
                        <th>YOUR RATIOS</th>
                        <th>IDEAL RATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <strong>A. Vitality:</strong> Energy to live, heal, detox and repair 
                            <span class="glyphicon glyphicon-question-sign"  data-toggle="modal" data-target="#vitalityHelp"></span>
                        </td>
                        <td>
                            <?php echo $htmacalc->sodiumdividedbypotassium; ?>
                        </td>
                        <td>
                            2.5-4 
                        </td>
                    </tr>    
                    <tr>
                        <td>
                        <strong>B. Adrenal Glands:</strong> Energy to burn protein and fat <span class="glyphicon glyphicon-question-sign"  data-toggle="modal" data-target="#adrenalHelp"></span>
                        </td>
                        <td>
                            <?php echo $htmacalc->sodiumdividedbymagnesium; ?>
                        </td>
                        <td>
                            4.17
                        </td>
                    </tr>   
                    <tr>
                        <td>
                        <strong>C. Thyroid:</strong> Energy for digestion, brain and heart <span class="glyphicon glyphicon-question-sign"  data-toggle="modal" data-target="#thyroidHelp"></span>
                        </td>
                        <td>
                            <?php echo $htmacalc->calciumdividedbypotassium; ?>
                        </td>
                        <td>
                            4.00
                        </td>
                    </tr>   
                </tbody> 
            </table>
        </div><!--table-responsive -->    
    </div><!--panel body-->
</div><!--panel-->








<div class="panel panel-green">
    <div class="panel-heading">
        II. YOUR ENERGY OUTPUT STRESSORS
    </div><!--panel heading-->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>SIGNIFICANT MINERAL RATIOS</th>
                        <th>YOUR RATIOS</th>
                        <th>IDEAL RATIONS</th>
                    </tr>
                </thead>
            </table>

            <p>
                <strong>A. Oxidation:</strong> speed at which adrenal/thyroid glands convert food to energy
            </p>

            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>
                             <input type="radio" value="Extremely" name="oxidation">Extremely&nbsp;
                             <input type="radio" value="Moderately" name="oxidation">Moderately&nbsp;
                             <input type="radio" value="Mildly" name="oxidation">Mildly&nbsp;
                             <input type="radio" value="Ideal Ratio" name="oxidation">Ideal Ratio&nbsp;
                        </td>
                        <td>
                            <?php echo $htmacalc->oxidationvalue . ' ' . $htmacalc->oxidationtype; ?>
                        </td>
                        <td>
                            &lt; 5.0 Mildly Slow
                        </td>
                    </tr>    
                </tbody>
            </table>

            <input type="radio" name="oxidationSpeed" value="Fast">  Glands convert food to energy too fast<br>
            <input type="radio" name="oxidationSpeed" value="Slow">  Glands convert food to energy too slow<br>
            <input type="radio" name="MoxidationSpeedixed" value="Mixed"> One gland fast the other slow. Will resolve to Fast/Slow<br>            
            <br/>
            <p>
                <strong>B. Toxicities:</strong> progress toward eliminating 11 toxic forms of minerals
            </p>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>
                            <strong>Poor Eliminator -</strong> Energy is too low to dislodge these toxins   
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            0
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <strong>Active Eliminator -</strong> Energy is available to eliminate these toxins   
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            0
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <strong>Ideal -</strong> These toxins, although present, are at acceptable levels   
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            11
                        </td>
                    </tr>    

                </tbody>
            </table>
            <br/>
            <p>
                <strong>C. Deficiencies:</strong> imbalances of stand-alone nutrient minerals
            </p>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>
                            <strong>Phosphorous –</strong> A refined fuel that builds body tissue   
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            13.00-16.00
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <strong>Zinc -</strong> For brain/digestion/emotional balance, fighting infection   
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            16.00-20.00
                        </td>
                    </tr>    
                </tbody>
            </table>
        </div><!--table-responsive -->    
    </div><!--panel body-->
</div><!--panel-->



<div class="panel panel-green">
    <div class="panel-heading">
        III. YOUR ENERGY TRENDS
    </div><!--panel heading-->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>SIGNIFICANT MINERAL RATIOS</th>
                    </tr>
                </thead>
            </table>

            <p>
                <strong>A. Parasympathetic</strong> Branch of the Autonomic Nervous System (Ca/P = 2.5) 
                <span class="glyphicon glyphicon-question-sign"  data-toggle="modal" data-target="#parasympatheticHelp"></span>
                <br/>
                Energy used to heal, detox, repair AND to move to fight/flight as needed. &gt; 2.5 associated with exhaustion, over use of the Sympathetic Branch
            </p>

            <p>
                <strong>B. Sympathetic</strong> Branch of the Autonomic Nervous System (Ca/P &lt; 2.5)
                <span class="glyphicon glyphicon-question-sign"  data-toggle="modal" data-target="#sympatheticHelp"></span>
                <br/>
                Energy continously in flight or fight mode 
            </p>


            <p class="alert alert-info">
            Your state is:  <?php echo $htmacalc->autonomicnervoussystemstate . ' with a ratio of ' .  $htmacalc->calciumdividedbyphosphorus;  ?>
            </p>


            <p>
                Infections will be eliminated as the oxidation rate comes into balance, and as your body eliminates toxic metals 
                &amp; toxic chemicals. You may anticipate an increase in your energy output as these stressors are removed.
                Increased energy will facilitate and restore your optimal healing processes.
            </p>
            
            <p>
                When this point is reached, your recommended supplements will be modified to support optimum health. Learn more about toxicities and deficiencies in the Supporting Details Document.
            </p>    

        </div><!--table-responsive -->    
    </div><!--panel body-->
</div><!--panel-->
























    <div class="modal fade" id="vitalityHelp" tabindex="-1" role="dialog" aria-labelledby="myModalVHLabel"> 
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title" id="myModalVHLabel">Your Energy Input (Vitality)</h5>
                </div>
                <div class="modal-body">

                    <p>A. YOUR VITALITY AS INDICATED BY SODIUM/POTASSIUM RATIO (Na/K)</p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Ratio Ranges</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        &gt;8.00
                                    </td>
                                    <td>
                                    Extreme elevation: inflammation, adrenal imbalance, asthma, allergies, kidney and liver problems. A high Na/K is preferable to a low Na/K.
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                        6.01-8.0
                                    </td>
                                    <td>
                                    Moderate elevation, tendency towards inflammation
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        4.01-6.00
                                    </td>
                                    <td>
                                        Mild elevation, good adrenal function
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        2.5-4.0
                                    </td>
                                    <td>
                                        <strong>IDEAL Vitality Ratio</strong>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        2-2.49
                                    </td>
                                    <td>
                                        Mild inversion, good adrenal function
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                        1-1.99
                                    </td>
                                    <td>
                                    Moderate inversion, adrenal exhaustion, allergies, digestive problems, deficiency of hydrochloric acid
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        &lt;1.00
                                    </td>
                                    <td>
                                    Extreme inversion – tendency toward heart attack, cancer, arthritis, kidney, liver disorders
                                    </td>
                                </tr>   
                                
                            </tbody> 
                        </table>
                    </div><!--table-responsive -->    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->






    <div class="modal fade" id="adrenalHelp" tabindex="-1" role="dialog" aria-labelledby="myModalAHLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title" id="myModalAHLabel">Your Energy Input (Adrenal)</h5>
                </div>
                <div class="modal-body">

                    <p>B. YOUR ADRENAL ACTIVITY AS INDICATED BY SODIUM/MAGNESIUM RATIO (Na/Mg)</p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Ratio Ranges</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        &gt;16.00
                                    </td>
                                    <td>
                                        Extremely overactive adrenals, more than 50% energy loss
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                        8.0-16.00
                                    </td>
                                    <td>
                                        Moderate excessive adrenals, 25-50% energy loss
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        4.18-7.99
                                    </td>
                                    <td>
                                        Mild excessive adrenal activity,10-24% energy loss
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        4.17
                                    </td>
                                    <td>
                                        <strong>IDEAL 100% energy Adrenal Ratio</strong>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        2.00-4.16
                                    </td>
                                    <td>
                                        Mild sluggish adrenal activity, 10-24% energy loss
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                        1-1.99
                                    </td>
                                    <td>
                                        Moderate sluggish adrenals, 25-50% energy loss
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        &lt;1.00
                                    </td>
                                    <td>
                                        Adrenal Insufficiency, more than 50% energy loss                                        
                                    </td>
                                </tr>   
                                
                            </tbody> 
                        </table>
                    </div><!--table-responsive -->    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
















    <div class="modal fade" id="thyroidHelp" tabindex="-1" role="dialog" aria-labelledby="myModalTHLabel">
        <div class="modal-dialog">
            <div class="modal-content" role="document">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title" id="myModalThLabel">Your Energy Input (Throid)</h5>
                </div>
                <div class="modal-body">

                    <p>YOUR THYROID ACTIVITY AS INDICATED BY CALCIUM/POTASSIUM RATIO (Ca/K)</p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Ratio Ranges</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        &gt;32.00
                                    </td>
                                    <td>
                                        Severe low thyroid activity, more than 75% more energy loss
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                        16.01-32.00
                                    </td>
                                    <td>
                                        Sluggish thyroid, 50-75% energy loss
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        8.01-16.00
                                    </td>
                                    <td>
                                        Moderate sluggish thyroid, 25-49% energy loss
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        4.01-8.0
                                    </td>
                                    <td>
                                        Mild sluggish thyroid, 10-24% energy loss
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        4.00
                                    </td>
                                    <td>
                                       <strong>IDEAL - 100% energy Thyroid Ratio</strong>
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                        2-3.99
                                    </td>
                                    <td>
                                        Mild fast thyroid activity, 10-24% energy loss                                        
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        1.00-1.99
                                    </td>
                                    <td>
                                        Moderate fast thyroid activity, 25-50% energy loss
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        &lt;1.00
                                    </td>
                                    <td>
                                        Excessive thyroid activity, more than 50% energy loss
                                    </td>
                                </tr>   
                                
                            </tbody> 
                        </table>
                    </div><!--table-responsive -->    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->













    <div class="modal fade" id="parasympatheticHelp" tabindex="-1" role="dialog" aria-labelledby="myModalPSHLabel">
        <div class="modal-dialog">
            <div class="modal-content" role="document">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title" id="myModalPSHLabel">PARASYMPATHETIC STATE (Ca/P = 2.5)</h5>
                </div>
                <div class="modal-body">
                    <p><strong>Energy Used For:</strong> nourishing, healing, elimination and regeneration the body. It is concerned with rebuilding the body. Parasympathetic nerves stimulate digestion and the immune and eliminative organs including: the liver, pancreas, stomach, and intestines</p>
                    <p><strong>Activated By:</strong> rest, relaxation and happy thoughts, it is essential for balanced living and for all healing. Moving yourself into a healthy parasympathetic state; and staying there as much of the time as possible helps heal all health conditions both physical and emotional.</p>
                    <p>The HTMA shows most of the population in an unhealthy state on either side of the Ca/P = 2.5 ratio. This is associated with unprecedented environmental and emotional stresses of modern life. This occurs when the sympathetic branch is overactive or exhausted due to overuse. These conditions shift the sympathetic branch into an unhealthy, exhausted-body, parasympathetic state.</p> 
                    <p><strong>Caution:</strong> The feeling often associated with functioning from the parasympathetic branch can be one of lethargy or fatigue, as you are so relaxed. Do not, however, believe this is unhealthy. It indicates a state of repair and rebuilding in progress.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="sympatheticHelp" tabindex="-1" role="dialog" aria-labelledby="myModalSHLabel">
        <div class="modal-dialog">
            <div class="modal-content" role="document">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title" id="myModalSHLabel">SYMPATHETIC STATE (Ca/P &lt; 2.5)</h5>
                </div>
                <div class="modal-body">

                    <p><strong>Energy Used For:</strong> defense rather than for nourishment or for elimination of waste. It tears down the body. Some use of this fight-or-flight system is normal and needed. </p>
                    <p><strong>Activated By:</strong> worrying to much or pushing yourself too hard.</p>
                    <p><strong>Caution:</strong> the adrenaline rush associated with activation of the sympathetic system may feel good at first but is always followed by a feeling of fatigue. Why? Because this branch of the autonomic nervous system uses up energy and depletes the body.</p>
                    <br/>
                    <p>Balancing your Autonomic Nervous System is associated with removing conditions that cause your body stress, specifically: </p>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="alert alert-success">
                                Toxic Metals and Toxic Chemicals    
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-info">
                                Imbalanced Nutrient Minerals                                    
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-warning">
                                    Deeply Buried Infections    
                            </div>
                        </div>
                    </div>    




                    <p>As these stressors are eliminated, your energy output will increase. Increased energy will facilitate and restore your optimal healing processes. Your customized supplement regimen will be modified to support optimum health.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



