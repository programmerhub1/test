
<!DOCTYPE html>

<html>
<head>
	<title></title>    
        
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../css/middlepage.css">
                            <!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

                                   <!-- morris chart -->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<style type="text/css">
  ::-webkit-scrollbar{
    width: 10px;
    height: 10px;
  }
  ::-webkit-scrollbar-track{
  box-shadow: lightgrey;
  border-radius: 10px;
  }
  ::-webkit-scrollbar-thumb{
    background:grey;
    border-radius: 10px;
  }
 body{
  background-color: #fcfcfc;
  margin:0px;
  padding: 0px;
 }
	.c{
		/*background-color: red;*/
		position: relative;top: 20px;
		width: 98%;
    height: 100vh;
	}

  .chart{
    background-color: #fff;
      box-shadow: 1px 1px 3px 1px lightgrey, 
             -2px -2px 3px 1px #fff;
       width: 100%;
       position: relative;
       margin-bottom: 20px;
  }
	.chart-horizontal{
       height: 110px;
  }
  .ch-left{
    background-color: ; 
    height: 80%;
  }
  .ch-right{
    /*background-color: red;*/
    height: 80%;
    float: right;
    position: relative;
  }
  .ch-right i{
    position: relative;top: 30px;
  }
  .ch-bottom{height: 20%;
    border-top: 1px solid lightgrey;
    width: 90%;
    margin: auto;
  }
  .ch-left span{
    font-weight: bold;
    color: grey;
    position: relative;
    top: 10px;
    letter-spacing: .2px;
  }
   .ch-left div{
      font-size: 1.7em;
      position: relative;
      top: 15px;
      left: 5px;
   }
   .ch-bottom span{
    color: #fff;
    float: right;
    letter-spacing: .2px;
   }
                        /*chart-graph*/

    .chart-graph{
      height: 250px;
    }
                             /*pie-chart*/
   .chart-pie{
    height: 300px;
   }
                          /*chart-other*/
    .chart-other{
      height: 120px;
    }                          
                         /*friend-suggestion*/
   .friend-suggestion{
     height: 230px;
     float: right;
     overflow-x: scroll;
     overflow-y: hidden;
     white-space: nowrap;
   }
   .friend-suggestion span{
    position: absolute;
    margin: 5px;
    color: #fff;
    padding: 5px;
    padding-right: 20px;
    background-color: green;
    border-radius: 0px 50px 50px 0px;
   }
   .project-details{
    width: 25%;
    padding-top: -30px;
    padding-left: 10px;
    height: 100%;
    font-weight: bold;
    font-size: .8em;
    border-right: 1px solid #f2f2f2;
    margin-top: 5px;
    height: 110px;
    text-align: center;
   }
   .project-details i{
    font-size: 1.7em;
      padding: 20px;
   }
   .friend-list{
    height: 150px;
    position: relative;
    left: 10px;
    margin-right: 20px;
    top: 50px;
    width: 130px;
    display: inline-block;
    border-radius: 10px;
    box-shadow: 1px 1px 2px 1px lightgrey,-1px -1px 2px 1px #fff;
   }
   .friend-list img{
      height: 70px;
      position: relative; 
      left: 25px;
      top: 15px;
      width: 70px;
      border-radius: 50%;
   }
   .friend-list .fsname{
    position: relative;
    top: 23px;
    font-weight: bold;
    font-size: .8em; 
   }
</style>
<body>
  <div class="container-fluid c">
  	                        <!-- horizontal chart -->
    <div class="row" >
      <div class="col-md-3">
  			<div class="chart chart-horizontal row">
              <div class="ch-left col-8"><span>Profile Views</span><div>25</div></div>
               <div class="ch-right col-4"><i class="fa fa-eye fa-3x" aria-hidden="true" style="height: 200px;color: #cc3300;"></i></div>
              <div class="ch-bottom col-md-11" style="background-color: #cc3300;"><font color="lightgreen">5%</font><span>since last week</span> </div>
        </div>
  		</div>

  		<div class="col-md-3">
            <div class="chart chart-horizontal row">
              <div class="ch-left col-8"><span>Connections</span><div>25</div></div>
               <div class="ch-right col-4"><i class="fa fa-user fa-3x" aria-hidden="true" style="height: 200px;color: #009933;"></i></div>
              <div class="ch-bottom col-md-11" style="background-color: #009933;"><font color="lightgreen">5%</font><span>since last week</span> </div>
        </div>
  		</div>

  		<div class="col-md-3">
               <div class=" chart chart-horizontal row">
              <div class="ch-left col-8"><span>My Projects</span><div>25</div></div>
               <div class="ch-right col-4"><i class="fa fa-tasks fa-3x" aria-hidden="true" style="height: 200px;color: #cccc00;"></i></div>
              <div class="ch-bottom col-md-11" style="background-color: #cccc00"><font color="lightgreen">5%</font><span>since last week</span> </div>
        </div>
  		</div>

  		<div class="col-md-3">
             <div class=" chart chart-horizontal row">
              <div class="ch-left col-8"><span>Answers</span><div>25</div></div>
               <div class="ch-right col-4"><i class="fa fa-reply fa-3x" aria-hidden="true" style="height: 200px;color: #6699cc;"></i></div>
              <div class="ch-bottom col-md-11" style="background-color: #6699cc;"><font color="lightgreen">5%</font><span>since last week</span> </div>
        </div>
  		</div>
  	</div>
                                                 
     
     <div class="row">
                        <!-- chart-graph -->  
        <div class="col-md-8">
          <div id="area-example" class="chart chart-graph col-md-12"></div>
        </div>
                         <!-- pie chart -->
         <div class="col-md-4">
          <div id="donut-example" class="chart chart-graph"></div>
          </div>
     </div> 


      <div class="row">
                        <!-- chart-graph -->  
        <div class="col-md-5">
           <div class="chart chart-other container">
            <div class="row">
             <div class="project-details"><i class="fa fa-tasks" aria-hidden="true" style="color: #336699"></i><br>MyProjects<div style="color: #336699">8</div></div>
             <div class="project-details"><i class="fa fa-download" aria-hidden="true" style="color: #336600"></i><br>Downloads<div style="color: #336600">89</div></div>
             <div class="project-details"><i class="fa fa-share" aria-hidden="true" style="color: #999999"></i><br>Shares<div style="color: #999999">30</div></div>
             <div class="project-details"><i class="fa fa-heart" aria-hidden="true" style="color: #cc3300"></i><br>Likes<div style="color: #cc3300">100</div></div>
            </div>
           </div>
        </div>
                         <!-- pie chart -->
        <div class="col-md-7">
           <div class="chart friend-suggestion">
            <span>Suggestions</span>
              <div class="friend-list">
                <img src="images.jpg">
                <center><div class="fsname">Vrajesh Barot</div></center>
              </div>
              <div class="friend-list">
                <img src="images.jpg">
                <center><div class="fsname">User Name</div></center>
              </div>
           </div>
        </div>

     </div> 
                                 <!-- Table -->

    <table class="table chart">
      <tr>
        <th>No.</th>
        <th>Project Name</th>
        <th>Budget</th>
      </tr>
      <tr>
        <td>1.</td>
        <td>Project Name</td>
        <td>50$</td>
      </tr>
    </table>

  </div>
</body>
<script type="text/javascript">
     var monthNames = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    Morris.Area({
        element: 'area-example',
        data: [
            {y: 1, a: 500},
            {y: 2, a: 200},
            {y: 3, a: 400},
            {y: 4, a: 600},
            {y: 5, a: 500},
            {y: 6, a: 600}
        ],
        xkey: 'y',
        parseTime: false,
        ykeys: ['a'],
        xLabelFormat: function (x) {
            var index = parseInt(x.src.y);
            return monthNames[index];
        },
        xLabels: "month",
        labels: ['Earnings($)'],
        lineColors: ['#a0d0e0', '#3dbeee'],
        hideHover: 'auto'

    });

    Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Requested Projects", value: 12},
    {label: "Confirmed Projects", value: 30},
    {label: "Complited Projects", value: 20}
  ]
});

</script>
</html>