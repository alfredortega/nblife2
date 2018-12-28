<div class="row">
    <div class="col-lg-12">
        <div class="text-center">
            <h2 class="text-info">Introduction to Your Hair Tissue Mineral Analysis Packet</h2>
            <hr/>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-1">
        &nbsp;
    </div>
    <div class="col-lg-10">
        <p class="align-right">
            Right here in front of your eyes you have the blueprint for producing the
            energy you need to sustain optimal health.
        <p class="align-right">
            You have an at-a-glance view of the stressors that interfere with your
            ability to produce energy at full capacity. You have a customized
            supplementation and lifestyle program based upon what your body says
            it needs. Right here. Right now.
        <p class="align-right">
            With these tools, you can stop the guessing game that has had you
            chasing one new idea after another. You know immediate gratification is
            short lived. You now have the what you need for the long haul – the steps
            it takes for a long, healthy life.
        </p>
        <p class="align-right">
            Nutritional healing has to do with optimizing your body’s ability to produce health-sustaining energy. This is
            accomplished by bringing your nutrient minerals into balance.
        </p>    
    </div>
    <div class="col-lg-1">
        &nbsp;
    </div>
<!-- /.row -->
</div>






<div class="row">
    <div class="col-lg-1">
        &nbsp;
    </div>

    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                Hair Tissue Mineral Analysis Details (dated <?php echo $htma->labdate ?>)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#sectionOverview" data-toggle="tab">HTMA At A Glance</a>
                    </li>
                    <li>
                        <a href="#sectionYourProgram" data-toggle="tab">Your Program</a> 
                    </li>
                    <li>
                        <a href="#sectionARLBarChart" data-toggle="tab">ARL Bar Chart</a> 
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="sectionOverview">
                        <?php include_once("tabs/htma_tab1.php") ?>
                    </div>
                    <div class="tab-pane fade" id="sectionYourProgram">
                        <?php include_once("tabs/htma_tab2.php") ?>
                    </div>
                    <div class="tab-pane fade" id="sectionARLBarChart">
                        <?php include_once("tabs/htma_tab3.php") ?>                                
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>    