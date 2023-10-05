<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="js/fusioncharts.js"></script>
  <script type="text/javascript" src="js/themes/fusioncharts.theme.zune.js"></script>
</head>
    <body>
    <?php
	include_once("includes/fusioncharts.php");
    require '../vendor/autoload.php'; // Include Composer autoloader

    use PhpOffice\PhpSpreadsheet\IOFactory;
		
        $objPHPExcel  = IOFactory::load('test.xlsx');
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $highestRow   = $objWorksheet->getHighestRow();
		$highestColumn = $objWorksheet->getHighestColumn();
        $actualData = array();
		for($row = 1; $row <= $highestRow; $row++){
			/* Chart1 */
			$cell = $objWorksheet->getCellByColumnAndRow(1, $row);
			$Yes[]= $cell->getValue();
			$cell = $objWorksheet->getCellByColumnAndRow(2, $row);
			$No[] = $cell->getValue();
			
			/* Chart 2(drilldown) */
			$cell = $objWorksheet->getCellByColumnAndRow(5, $row);
			$yes1[] = $cell->getValue();
			$cell = $objWorksheet->getCellByColumnAndRow(6, $row);
			$yes2[] = $cell->getValue();
			$cell = $objWorksheet->getCellByColumnAndRow(7, $row);
			$yes3[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(8, $row);
			$yes4[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(9, $row);
			$yes5[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(10, $row);
			$yes6[] = $cell->getValue();

            $cell = $objWorksheet->getCellByColumnAndRow(11, $row);
			$yes7[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(12, $row);
			$yes8[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(13, $row);
			$yes9[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(14, $row);
			$yes10[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(15, $row);
			$yes11[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(16, $row);
			$yes12[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(17, $row);
			$yes13[] = $cell->getValue();
            $cell = $objWorksheet->getCellByColumnAndRow(18, $row);
			$yes14[] = $cell->getValue();

            $cell = $objWorksheet->getCellByColumnAndRow(19, $row);
			$yes15[] = $cell->getValue();
           
			
		}

			
	//$labels = array("Yes", "No");
	//$label = array("18-24","25-29","30-35");
	//$data1 = array($yes1[0],$yes2[0],$yes3[0]);
	//$data2 = array($yesq[1],$yesw[1],$yese[1]);
	$link = array("newchart-xml-Intake", "newchart-xml-enrolment", "newchart-xml-Graduate");
?>
<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="js/theme/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
  FusionCharts.ready(function () {
    var XVIIChart = new FusionCharts({
        type: 'column2d',
        renderAt: 'chart1',
        width: '100%',
        height: '530',
        dataFormat: 'json',
        id: "myChartId",
        dataSource: {
            "chart": {
              "caption":"2017 intake,enrolment and graduate",
					"paletteColors": "#43a7bd,#bd5943",
                    "subCaption":"",
                    "enableSmartLabels":"1",
                    "showPercentValues":"1",
                    "showLegend":"1",
                    "decimals":"1",
                    "theme":"zune",
					"exportenabled":"1"
            },
            "data": [{
                <?php
					echo "\"label\":\"$Yes[1]\",";
					echo "\"value\":\"$No[1]\",";
					echo "\"link\":\"$link[0]\",";
					?>
            }, {
                <?php
					echo "\"label\":\"$Yes[2]\",";
					echo "\"value\":\"$No[2]\",";
					echo "\"link\":\"$link[1]\",";
					?>
            }, 
            {
                <?php
					echo "\"label\":\"$Yes[3]\",";
					echo "\"value\":\"$No[3]\",";
					echo "\"link\":\"$link[2]\",";
					?>
            }],
            "linkeddata": [
                    {
                        "id": "Intake",
                        "linkedchart": {
                            "chart": {
                                "caption":"Intake from different courses",
								"paletteColors": "#8dd0f0,#8fe0ff,#75b4e3",
								"subCaption":"",
								"enableSmartLabels":"1",
								"showPercentValues":"1",
								"showLegend":"1",
								"decimals":"1",
								"exportenabled":"1",
								"theme":"zune"
                            },
                            "data": [
                                {
                                    <?php
                                    
										echo "\"label\":\"$yes1[0]\",";
										echo "\"value\":\"$yes1[1]\",";
									?>
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes2[0]\",";
										echo "\"value\":\"$yes2[1]\",";
									?>
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes3[0]\",";
										echo "\"value\":\"$yes3[1]\",";
									?>
                                    
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes4[0]\",";
										echo "\"value\":\"$yes4[1]\",";
									?>
                                },
                                {
                                 <?php
										echo "\"label\":\"$yes5[0]\",";
										echo "\"value\":\"$yes5[1]\",";
									?>

                                },
                                {<?php
										echo "\"label\":\"$yes6[0]\",";
										echo "\"value\":\"$yes6[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes7[0]\",";
										echo "\"value\":\"$yes7[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes8[0]\",";
										echo "\"value\":\"$yes8[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes9[0]\",";
										echo "\"value\":\"$yes9[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes10[0]\",";
										echo "\"value\":\"$yes10[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes11[0]\",";
										echo "\"value\":\"$yes11[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes12[0]\",";
										echo "\"value\":\"$yes12[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes13[0]\",";
										echo "\"value\":\"$yes13[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes14[0]\",";
										echo "\"value\":\"$yes14[1]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes15[0]\",";
										echo "\"value\":\"$yes15[1]\",";
									?>


                                    
                                }
                            ]
                        }
                    },
                    
                    {
                        "id": "Enrolment",
                        "linkedchart": {
                            "chart": {
                                "caption":"Enrolment from different courses",
								"paletteColors": "#8dd0f0,#8fe0ff,#75b4e3",
								"subCaption":"",
								"enableSmartLabels":"1",
								"showPercentValues":"1",
								"showLegend":"1",
								"decimals":"2",
								"exportenabled":"1",
								"theme":"zune"
                            },
                            "data": [
                                {
                                    <?php
                                    
										echo "\"label\":\"$yes1[0]\",";
										echo "\"value\":\"$yes1[2]\",";
									?>
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes2[0]\",";
										echo "\"value\":\"$yes2[2]\",";
									?>
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes3[0]\",";
										echo "\"value\":\"$yes3[2]\",";
									?>
                                    
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes4[0]\",";
										echo "\"value\":\"$yes4[2]\",";
									?>
                                },
                                {
                                 <?php
										echo "\"label\":\"$yes5[0]\",";
										echo "\"value\":\"$yes5[2]\",";
									?>

                                },
                                {<?php
										echo "\"label\":\"$yes6[0]\",";
										echo "\"value\":\"$yes6[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes7[0]\",";
										echo "\"value\":\"$yes7[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes8[0]\",";
										echo "\"value\":\"$yes8[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes9[0]\",";
										echo "\"value\":\"$yes9[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes10[0]\",";
										echo "\"value\":\"$yes10[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes11[0]\",";
										echo "\"value\":\"$yes11[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes12[0]\",";
										echo "\"value\":\"$yes12[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes13[0]\",";
										echo "\"value\":\"$yes13[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes14[0]\",";
										echo "\"value\":\"$yes14[2]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes15[0]\",";
										echo "\"value\":\"$yes15[2]\",";
									?>


                                    
                                }
                            ]
                        }
                    }, 

					{
                        "id": "Graduate",
                        "linkedchart": {
                            "chart": {
                                "caption":"Graduate from different courses",
								"paletteColors": "#8dd0f0,#8fe0ff,#75b4e3",
								"subCaption":"",
								"enableSmartLabels":"1",
								"showPercentValues":"1",
								"showLegend":"1",
								"decimals":"2",
								"exportenabled":"1",
								"theme":"zune"
                            },
                            "data": [
                                {
                                    <?php
                                    
										echo "\"label\":\"$yes1[0]\",";
										echo "\"value\":\"$yes1[3]\",";
									?>
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes2[0]\",";
										echo "\"value\":\"$yes2[3]\",";
									?>
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes3[0]\",";
										echo "\"value\":\"$yes3[3]\",";
									?>
                                    
                                },
                                {
                                    <?php
										echo "\"label\":\"$yes4[0]\",";
										echo "\"value\":\"$yes4[3]\",";
									?>
                                },
                                {
                                 <?php
										echo "\"label\":\"$yes5[0]\",";
										echo "\"value\":\"$yes5[3]\",";
									?>

                                },
                                {<?php
										echo "\"label\":\"$yes6[0]\",";
										echo "\"value\":\"$yes6[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes7[0]\",";
										echo "\"value\":\"$yes7[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes8[0]\",";
										echo "\"value\":\"$yes8[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes9[0]\",";
										echo "\"value\":\"$yes9[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes10[0]\",";
										echo "\"value\":\"$yes10[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes11[0]\",";
										echo "\"value\":\"$yes11[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes12[0]\",";
										echo "\"value\":\"$yes12[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes13[0]\",";
										echo "\"value\":\"$yes13[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes14[0]\",";
										echo "\"value\":\"$yes14[3]\",";
									?> },
                                    {<?php
										echo "\"label\":\"$yes15[0]\",";
										echo "\"value\":\"$yes15[3]\",";
									?>


                                    
                                }
                            ]
                        }
                    }, 
                    ]
		}
        
    });
    
    
    XVIIChart.configureLink (
        {
            type : "bar2d",
            overlayButton:
            {    
                message: 'close',
                fontColor : '880000',
                bgColor:'FFEEEE',
                borderColor: '660000'
            }
        }, 0);
    
		XVIIChart.render();
});
</script>
  <div id="chart1"></div>
  
    </body>
</html>