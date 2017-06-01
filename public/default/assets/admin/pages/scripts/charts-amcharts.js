var ChartsAmcharts = function() {
	
	var initChartDashboard = function() {
		// var chart = AmCharts.makeChart( "chartdiv", {
		//   "type": "serial",
		//   "theme": "light",
		//   "dataProvider": [
		// 	  {
		// 	    "country": "2000",
		// 	    "visits": 2025
		// 	  }, {
		// 	    "country": "2001",
		// 	    "visits": 1882
		// 	  }, {
		// 	    "country": "2002",
		// 	    "visits": 1809
		// 	  }, {
		// 	    "country": "2003",
		// 	    "visits": 1322
		// 	  }, {
		// 	    "country": "2004",
		// 	    "visits": 1122
		// 	  }, {
		// 	    "country": "2005",
		// 	    "visits": 1114
		// 	  }, {
		// 	    "country": "2006",
		// 	    "visits": 984
		// 	  }, {
		// 	    "country": "2007",
		// 	    "visits": 711
		// 	  }, {
		// 	    "country": "2008",
		// 	    "visits": 665
		// 	  }, {
		// 	    "country": "2009",
		// 	    "visits": 580
		// 	  }, {
		// 	    "country": "2010",
		// 	    "visits": 443
		// 	  }, {
		// 	    "country": "2011",
		// 	    "visits": 441
		// 	  }, {
		// 	    "country": "2012",
		// 	    "visits": 395
		// 	  }
		//   ],
		//   "valueAxes": [
		// 	{
		// 		"axisAlpha": 0,
		// 		"position": "left",
		// 		"title": "Ton"
		// 	}
		//   ],
		//   "gridAboveGraphs": true,
		//   "startDuration": 1,
		//   "graphs": [ {
		//     "balloonText": "[[category]]: <b>[[value]]</b>",
		//     "fillAlphas": 0.8,
		//     "lineAlpha": 0.2,
		//     "type": "column",
		//     "valueField": "visits"
		//   } ],
		//   "chartCursor": {
		//     "categoryBalloonEnabled": false,
		//     "cursorAlpha": 0,
		//     "zoomable": false
		//   },
		//   "categoryField": "country",
		//   "categoryAxis": {
		//     "gridPosition": "start",
		//     "gridAlpha": 0,
		//     "tickPosition": "start",
		//     "tickLength": 20
		//   },
		//   "export": {
		//     "enabled": true
		//   }
		//
		// } );
		var chart = AmCharts.makeChart("chartdiv", {
		    "theme": "light",
		    "type": "serial",
			"startDuration": 2,
		    "dataProvider": [{
		        "country": "Muara Enim",
		        "visits": 3750000,
		        "color": "#FE2E2E"
		    }, {
		        "country": "Bengkulu",
		        "visits": 4500000,
		        "color": "#58FAAC"
		    }],
		    "valueAxes": [{
		        "position": "left",
		        "title": "Coal / Matrik Ton"
		    }],
		    "graphs": [{
		        "balloonText": "[[category]]: <b>[[value]]</b>",
		        "fillColorsField": "color",
		        "fillAlphas": 1,
		        "lineAlpha": 0.1,
		        "type": "column",
		        "valueField": "visits"
		    }],
		    "depth3D": 20,
			"angle": 30,
		    "chartCursor": {
		        "categoryBalloonEnabled": false,
		        "cursorAlpha": 0,
		        "zoomable": false
		    },
		    "categoryField": "country",
		    "categoryAxis": {
		        "gridPosition": "start",
		        "labelRotation": 90
		    },
		    "export": {
		    	"enabled": true
		     }

		});
    }
	
	var initChartDashboard2 = function() {
		// var chart = AmCharts.makeChart( "chartdiv2", {
		//   "type": "serial",
		//   "theme": "light",
		//   "dataProvider": [
		// 	  {
		// 	    "country": "JAN",
		// 	    "visits": 2025
		// 	  }, {
		// 	    "country": "FEB",
		// 	    "visits": 1882
		// 	  }, {
		// 	    "country": "MAR",
		// 	    "visits": 1809
		// 	  }, {
		// 	    "country": "APR",
		// 	    "visits": 1322
		// 	  }, {
		// 	    "country": "MAY",
		// 	    "visits": 1122
		// 	  }, {
		// 	    "country": "JUN",
		// 	    "visits": 1114
		// 	  }, {
		// 	    "country": "JUL",
		// 	    "visits": 984
		// 	  }, {
		// 	    "country": "AUG",
		// 	    "visits": 711
		// 	  }, {
		// 	    "country": "SEP",
		// 	    "visits": 665
		// 	  }, {
		// 	    "country": "OCT",
		// 	    "visits": 580
		// 	  }, {
		// 	    "country": "NOV",
		// 	    "visits": 443
		// 	  }, {
		// 	    "country": "DEC",
		// 	    "visits": 441
		// 	  }
		//   ],
		//   "valueAxes": [
		// 	{
		// 		"axisAlpha": 0,
		// 		"position": "left",
		// 		"title": "Ton"
		// 	}
		//   ],
		//   "gridAboveGraphs": true,
		//   "startDuration": 1,
		//   "graphs": [ {
		//     "balloonText": "[[category]]: <b>[[value]]</b>",
		//     "fillAlphas": 0.8,
		//     "lineAlpha": 0.2,
		//     "type": "column",
		//     "valueField": "visits"
		//   } ],
		//   "chartCursor": {
		//     "categoryBalloonEnabled": false,
		//     "cursorAlpha": 0,
		//     "zoomable": false
		//   },
		//   "categoryField": "country",
		//   "categoryAxis": {
		//     "gridPosition": "start",
		//     "gridAlpha": 0,
		//     "tickPosition": "start",
		//     "tickLength": 20
		//   },
		//   "export": {
		//     "enabled": true
		//   }
		//
		// } );
		var chart = AmCharts.makeChart("chartdiv2", {
		    "theme": "light",
		    "type": "serial",
		    "startDuration": 2,
		    "dataProvider": [{
		        "country": "2015",
		        "visits": 6900000,
		        "color": "#F4FA58"
		    }, {
		        "country": "2016",
		        "visits": 7700000,
		        "color": "#2EFE2E"
		    }, {
		        "country": "2017",
		        "visits": 3750000,
		        "color": "#FE642E"
		    }],
		    "valueAxes": [{
		        "position": "left",
		        "axisAlpha":0,
		        "gridAlpha":0,
				"title": "Coal / Matrik Ton"
		    }],
		    "graphs": [{
		        "balloonText": "[[category]]: <b>[[value]]</b>",
		        "colorField": "color",
		        "fillAlphas": 0.85,
		        "lineAlpha": 0.1,
		        "type": "column",
		        "topRadius":1,
		        "valueField": "visits"
		    }],
		    "depth3D": 40,
			"angle": 30,
		    "chartCursor": {
		        "categoryBalloonEnabled": false,
		        "cursorAlpha": 0,
		        "zoomable": false
		    },
		    "categoryField": "country",
		    "categoryAxis": {
		        "gridPosition": "start",
		        "axisAlpha":0,
		        "gridAlpha":0

		    },
		    "export": {
		    	"enabled": true
		     }

		}, 0);
    }
	
	var initChartDashboard3 = function() {
		// var chart = AmCharts.makeChart( "chartdiv3", {
		//   "type": "serial",
		//   "theme": "light",
		//   "rotate": true,
		//   "dataProvider": [
		// 	  {
		// 	    "country": "Truck 1",
		// 	    "visits": 38
		// 	  }, {
		// 	    "country": "Truck 2",
		// 	    "visits": 77
		// 	  }, {
		// 	    "country": "Truck 3",
		// 	    "visits": 115
		// 	  }
		//   ],
		//   "valueAxes": [
		// 	{
		// 		"axisAlpha": 0,
		// 		"position": "left",
		// 		"title": "KM/h"
		// 	}
		//   ],
		//   "gridAboveGraphs": true,
		//   "startDuration": 1,
		//   "graphs": [ {
		//     "balloonText": "[[category]]: <b>[[value]]</b>",
		//     "fillAlphas": 0.8,
		//     "lineAlpha": 0.2,
		//     "type": "column",
		//     "valueField": "visits"
		//   } ],
		//   "chartCursor": {
		//     "categoryBalloonEnabled": false,
		//     "cursorAlpha": 0,
		//     "zoomable": false
		//   },
		//   "categoryField": "country",
		//   "categoryAxis": {
		//     "gridPosition": "start",
		//     "gridAlpha": 0,
		//     "tickPosition": "start",
		//     "tickLength": 20
		//   },
		//   "export": {
		//     "enabled": true
		//   }
		//
		// } );
		var chart = AmCharts.makeChart("chartdiv3", {
		  "type": "serial",
		  "theme": "light",
		  "rotate": "true",
		  "marginRight": 70,
		  "dataProvider": [{
		    "country": "DEC",
		    "visits": 0,
		    "color": "#FF0F00"
		  }, {
		    "country": "NOV",
		    "visits": 0,
		    "color": "#FF6600"
		  }, {
		    "country": "OCT",
		    "visits": 0,
		    "color": "#FF9E01"
		  }, {
		    "country": "SEP",
		    "visits": 0,
		    "color": "#FCD202"
		  }, {
		    "country": "AUG",
		    "visits": 0,
		    "color": "#F8FF01"
		  }, {
		    "country": "JUL",
		    "visits": 0,
		    "color": "#B0DE09"
		  }, {
		    "country": "JUN",
		    "visits": 585000,
		    "color": "#04D215"
		  }, {
		    "country": "MAY",
		    "visits": 705000,
		    "color": "#FAAC58"
		  }, {
		    "country": "APR",
		    "visits": 660000,
		    "color": "#FF0000"
		  }, {
		    "country": "MAR",
		    "visits": 720000,
		    "color": "#FAAC58"
		  }, {
		    "country": "FEB",
		    "visits": 715000,
		    "color": "#FAAC58"
		  }, {
		    "country": "JAN",
		    "visits": 395000,
		    "color": "#FF0000"
		  }],
		  "valueAxes": [{
		    "axisAlpha": 0,
		    "position": "left",
		    "title": "Monthly Target : 666.667 Ton"
		  }],
		  "startDuration": 1,
		  "graphs": [{
		    "balloonText": "<b>[[category]]: [[value]]</b>",
		    "fillColorsField": "color",
		    "fillAlphas": 0.9,
		    "lineAlpha": 0.2,
		    "type": "column",
		    "valueField": "visits"
		  }],
		  "chartCursor": {
		    "categoryBalloonEnabled": false,
		    "cursorAlpha": 0,
		    "zoomable": false
		  },
		  "categoryField": "country",
		  "categoryAxis": {
		    "gridPosition": "start",
		    "labelRotation": 45
		  },
		  "export": {
		    "enabled": true
		  }

		});
    }
	
	var initChartDashboard4 = function() {
		// var chart = AmCharts.makeChart( "chartdiv4", {
		//   "type": "serial",
		//   "theme": "light",
		//   "marginRight": 40,
		//   "marginLeft": 40,
		//   "autoMarginOffset": 20,
		//   "dataDateFormat": "YYYY-MM-DD",
		//   "valueAxes": [ {
		// 	"axisAlpha": 0,
  // 			"position": "left",
  // 			"title": "Ton"
		//   } ],
		//   "balloon": {
		//     "borderThickness": 1,
		//     "shadowAlpha": 0
		//   },
		//   "graphs": [ {
		//     "id": "g1",
		//     "balloon": {
		//       "drop": true,
		//       "adjustBorderColor": false,
		//       "color": "#ffffff",
		//       "type": "smoothedLine"
		//     },
		//     "fillAlphas": 0.2,
		//     "bullet": "round",
		//     "bulletBorderAlpha": 1,
		//     "bulletColor": "#FFFFFF",
		//     "bulletSize": 5,
		//     "hideBulletsCount": 50,
		//     "lineThickness": 2,
		//     "title": "red line",
		//     "useLineColorForBulletBorder": true,
		//     "valueField": "value",
		//     "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
		//   } ],
		//   "chartCursor": {
		//     "valueLineEnabled": true,
		//     "valueLineBalloonEnabled": true,
		//     "cursorAlpha": 0,
		//     "zoomable": false,
		//     "valueZoomable": true,
		//     "valueLineAlpha": 0.5
		//   },
		//   "valueScrollbar": {
		//     "autoGridCount": true,
		//     "color": "#000000",
		//     "scrollbarHeight": 50
		//   },
		//   "categoryField": "date",
		//   "categoryAxis": {
		//     "parseDates": true,
		//     "dashLength": 1,
		//     "minorGridEnabled": true
		//   },
		//   "export": {
		//     "enabled": true
		//   },
		//   "dataProvider": [
		// 	  {
		// 	    "date": "2012-08-01",
		// 	    "value": 13
		// 	  }, {
		// 	    "date": "2012-08-02",
		// 	    "value": 22
		// 	  }, {
		// 	    "date": "2012-08-03",
		// 	    "value": 23
		// 	  }, {
		// 	    "date": "2012-08-04",
		// 	    "value": 20
		// 	  }, {
		// 	    "date": "2012-08-05",
		// 	    "value": 17
		// 	  }, {
		// 	    "date": "2012-08-06",
		// 	    "value": 16
		// 	  }, {
		// 	    "date": "2012-08-07",
		// 	    "value": 18
		// 	  }, {
		// 	    "date": "2012-08-08",
		// 	    "value": 21
		// 	  }, {
		// 	    "date": "2012-08-09",
		// 	    "value": 26
		// 	  }, {
		// 	    "date": "2012-08-10",
		// 	    "value": 24
		// 	  }, {
		// 	    "date": "2012-08-11",
		// 	    "value": 29
		// 	  }, {
		// 	    "date": "2012-08-12",
		// 	    "value": 32
		// 	  }, {
		// 	    "date": "2012-08-13",
		// 	    "value": 18
		// 	  }, {
		// 	    "date": "2012-08-14",
		// 	    "value": 24
		// 	  }, {
		// 	    "date": "2012-08-15",
		// 	    "value": 22
		// 	  }, {
		// 	    "date": "2012-08-16",
		// 	    "value": 18
		// 	  }, {
		// 	    "date": "2012-08-17",
		// 	    "value": 19
		// 	  }, {
		// 	    "date": "2012-08-18",
		// 	    "value": 14
		// 	  }, {
		// 	    "date": "2012-08-19",
		// 	    "value": 15
		// 	  }, {
		// 	    "date": "2012-08-20",
		// 	    "value": 12
		// 	  }, {
		// 	    "date": "2012-08-21",
		// 	    "value": 8
		// 	  }, {
		// 	    "date": "2012-08-22",
		// 	    "value": 9
		// 	  }, {
		// 	    "date": "2012-08-23",
		// 	    "value": 8
		// 	  }, {
		// 	    "date": "2012-08-24",
		// 	    "value": 7
		// 	  }, {
		// 	    "date": "2012-08-25",
		// 	    "value": 5
		// 	  }, {
		// 	    "date": "2012-08-26",
		// 	    "value": 11
		// 	  }, {
		// 	    "date": "2012-08-27",
		// 	    "value": 13
		// 	  }, {
		// 	    "date": "2012-08-28",
		// 	    "value": 18
		// 	  }, {
		// 	    "date": "2012-08-29",
		// 	    "value": 20
		// 	  }, {
		// 	    "date": "2012-08-30",
		// 	    "value": 29
		// 	  }, {
		// 	    "date": "2012-08-31",
		// 	    "value": 33
		// 	  }
		//   ]
		// } );
		var chart = AmCharts.makeChart("chartdiv4", {
		    "type": "serial",
		    "theme": "light",
		    "dataProvider": [{
		        "date": "2017-05-01",
		        "value": 21100
		    }, {
		        "date": "2017-05-02",
		        "value": 41100
		    }, {
		        "date": "2017-05-03",
		        "value": 60100
		    }, {
		        "date": "2017-05-04",
		        "value": 81400
		    }, {
		        "date": "2017-05-05",
		        "value": 103100
		    }, {
		        "date": "2017-05-06",
		        "value": 103100,
				"customBullet": "https://www.amcharts.com/lib/3/images/redstar.png"
		    }, {
		        "date": "2017-05-07",
		        "value": 146350
		    }, {
		        "date": "2017-05-08",
		        "value": 156350,
				"customBullet": "https://www.amcharts.com/lib/3/images/redstar.png"
		    }, {
		        "date": "2017-05-09",
		        "value": 177950
		    }, {
		        "date": "2017-05-10",
		        "value": 198950,
				"customBullet": "https://www.amcharts.com/lib/3/images/redstar.png"
		    }, {
		        "date": "2017-05-11",
		        "value": 198950,
				"customBullet": "https://www.amcharts.com/lib/3/images/redstar.png"
		    }, {
		        "date": "2017-05-12",
		        "value": 242350
		    }, {
		        "date": "2017-05-13",
		        "value": 264350
		    }, {
		        "date": "2017-05-14",
		        "value": 287100
		    }, {
		        "date": "2017-05-15",
		        "value": 302600,
				"customBullet": "https://www.amcharts.com/lib/3/images/redstar.png"
		    }],
		    "valueAxes": [{
				"position": "left",
				"axisAlpha":0,
				"gridAlpha":0,
				"title": "Coal Production - Metrik Ton"
		    }],
		    "graphs": [{
		        "bulletSize": 14,
		        "customBullet": "https://www.amcharts.com/lib/3/images/star.png?x",
		        "customBulletField": "customBullet",
		        "valueField": "value",
		        "balloonText":"<div style='margin:10px; text-align:left;'><span style='font-size:13px'>[[category]]</span><br><span style='font-size:18px'>Value:[[value]]</span>",
		    }],
		    "marginTop": 20,
		    "marginRight": 40,
		    "marginLeft": 80,
		    "marginBottom": 20,
		    "chartCursor": {
		        "graphBulletSize": 1.5,
		     	"zoomable":false,
		      	"valueZoomable":true,
		         "cursorAlpha":0,
		         "valueLineEnabled":true,
		         "valueLineBalloonEnabled":true,
		         "valueLineAlpha":0.2
		    },
		    "autoMargins": false,
		    "dataDateFormat": "YYYY-MM-DD",
		    "categoryField": "date",
		    "valueScrollbar":{
		      "offset":30
		    },
		    "categoryAxis": {
		        "parseDates": true,
		        "axisAlpha": 0,
		        "gridAlpha": 0,
		        "inside": true,
		        "tickLength": 0
		    },
		    "export": {
		        "enabled": true
		    }
		});
    }
	
	var initChartDashboard5 = function() {
		var chart = AmCharts.makeChart("chartdiv5", {
		    "type": "serial",
			"theme": "light",
		    "legend": {
		        "horizontalGap": 5,
		        "maxColumns": 1,
		        "position": "right",
				"useGraphSettings": true,
				"markerSize": 10
		    },
		    "dataProvider": [{
		        "year": 2003,
		        "europe": 2.5,
		        "namerica": 2.5,
		        "asia": 2.1,
		        "lamerica": 0.3,
		        "meast": 0.2,
		        "africa": 0.1
		    }],
		    "valueAxes": [{
		        "stackType": "regular",
		        "axisAlpha": 0.5,
		        "gridAlpha": 0
		    }],
		    "graphs": [{
		        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0.3,
		        "title": "Europe",
		        "type": "column",
				"color": "#000000",
		        "valueField": "europe"
		    }, {
		        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0.3,
		        "title": "North America",
		        "type": "column",
				"color": "#000000",
		        "valueField": "namerica"
		    }, {
		        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0.3,
		        "title": "Asia-Pacific",
		        "type": "column",
				"color": "#000000",
		        "valueField": "asia"
		    }, {
		        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0.3,
		        "title": "Latin America",
		        "type": "column",
				"color": "#000000",
		        "valueField": "lamerica"
		    }, {
		        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0.3,
		        "title": "Middle-East",
		        "type": "column",
				"color": "#000000",
		        "valueField": "meast"
		    }, {
		        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0.3,
		        "title": "Africa",
		        "type": "column",
				"color": "#000000",
		        "valueField": "africa"
		    }],
		    "rotate": true,
		    "categoryField": "year",
		    "categoryAxis": {
		        "gridPosition": "start",
		        "axisAlpha": 0,
		        "gridAlpha": 0,
		        "position": "left"
		    },
		    "export": {
		    	"enabled": true
		     }
		});
    }

    return {
        //main function to initiate the module

        init: function() {
			initChartDashboard();
			initChartDashboard2();
			initChartDashboard3();
			initChartDashboard4();
			initChartDashboard5();
        }

    };

}();