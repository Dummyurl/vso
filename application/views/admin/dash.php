<style type="text/css">
h1.sub{
  font-size: 80px;

}
</style>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
     <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h">Total Reports</h4>
              <h1 class="sub" id="count">24</h1>

            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h">Users</h4>
              <h1 class="sub">7</h1>

            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <h4 class="widget-h">Data</h4>
            <h1 class="sub text-center">12</h1>
          </div>
        </div>
      </section>
    </div>

  </div>

  <div class="row">
    <div class="col-md-8">
      <!--earning graph start-->
      <section class="panel">
        <header class="panel-heading">
          Graph <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
          </span>
        </header>
        <div class="panel-body">

          <div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
         
        </div>
      </section>
      <!--earning graph end-->
    </div>
    <div class="col-md-4">
      <!--widget graph start-->
      <section class="panel">
        <div class="panel-body">

         <img src="<?php echo base_url()?>assets/img/dataset.png" alt="admin" height=230; width=310;>
         <!-- Tab panes -->

       </div>
       <p class="text-center"><b>Most Visited </b></p>


     </section>

      <section id="counter_threeup" class="counter_threeup lightbg sections">
            <div class="container">
                <div class="row">
                    <div class="counter_threeup-wrapper">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="counter_threeup">
                                <div class="counter_threeup-photo">
                                    <img src="http://i.imgur.com/7jmZxc8.png" alt="counter_threeup" />
                                </div>
                                <div class="counter_threeup-content">
                                    <h5 class="count-number">11</h5>
                                    <h6>Designers</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="counter_threeup">
                                <div class="counter_threeup-photo">
                                    <img src="http://i.imgur.com/s3fDOCZ.png" alt="counter_threeup" />
                                </div>
                                <div class="counter_threeup-content">
                                    <h5 class="count-number">6542</h5>
                                    <h6>Hours Worked</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="counter_threeup">
                                <div class="counter_threeup-photo">
                                    <img src="http://i.imgur.com/UYLWCDw.png" alt="counter_threeup" />
                                </div>
                                <div class="counter_threeup-content">
                                    <h5 class="count-number">254</h5>
                                    <h6>Project finished</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="counter_threeup">
                                <div class="counter_threeup-photo">
                                    <img src="http://i.imgur.com/IVfjEcU.png" alt="counter_threeup" />
                                </div>
                                <div class="counter_threeup-content">
                                    <h5 class="count-number">435</h5>
                                    <h6>Drunk coffee</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

     <!-- page end-->

</section>
</section>


<!--main content end-->
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Page Visited"
  },
  axisY: {
    title: ""
  },
  data: [{        
    type: "column",  
    showInLegend: true, 
    legendMarkerColor: "grey",
    legendText: "Pages",
    dataPoints: [      
      { y: 232, label: "Home" },
      { y: 266,  label: "Map" },
      { y: 169,  label: "Reports" },
      { y: 158,  label: "About" },
      
    ]
  }]
});
chart.render();

}
</script>

   <script type="text/javascript">
     
   </script>