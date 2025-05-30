<div class="float-child">

 <html>  
      <body> 
    
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "alumni");  
 $query = "select DISTINCT(passed_out_year) as cyear from student_info;";  
 $result = mysqli_query($connect, $query);  
 ?>  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Count'],
			<?php 
			  	$year=2019;
          if(isset($company_name)){
          while($row = mysqli_fetch_array($result))					
          {  
            
            $query2="SELECT count(c2.sno) as number from student_info c1,company c2 where c1.sid=c2.sid and c2.company_name='".$company_name."' and c1.passed_out_year='$year'";  
            $result2 = mysqli_query($connect, $query2);
            if($row2=mysqli_fetch_array($result2))
            {
              echo "['".$row["cyear"]."', ".$row2["number"]."],";
            }
          $year++;
          }
        }
        else{
          echo "[0,0]";
        }
      ?>
			
        ]);
      
        var options = {
          chart: {
            title: '<?php echo "$company_name" ?>',
            subtitle: 'COMAPNY YEAR WISE COUNT',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  
    
  <div style="width:500px;">  
                <h3 align="left"></h3>  
                <br />  
                <div id="barchart_material" style="width: 500px; height: 400px;"></div>  
           </div>     
  </body>
  </html>
    </div>
    </div>
