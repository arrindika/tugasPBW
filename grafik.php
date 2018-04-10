<html>
	<head>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Peminat Teknologi Informasi '
         },
         xAxis: {
            categories: ['Peminat']
         },
         yAxis: {
            title: {
               text: 'Jumlah Peminat'
            }
         },
              series:             
            [
            <?php 
        	include('config.php');
           $sql   = "SELECT tahun  FROM peminat";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$merek=$ret['tahun'];                     
                 $sql_jumlah   = "SELECT jumlah FROM peminat WHERE tahun='$merek'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jumlah'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $merek; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
	</head>
	<body>
        <a class="hero-brand" href="index.html" title="Home"><img alt="Bell Logo" src="assets/img/home.png"></a>
		<div id='container'></div>		
	</body>
</html>