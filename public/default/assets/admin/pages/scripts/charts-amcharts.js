var ChartsAmcharts = function() {
	
	var initChartDashboard = function() {
		var chart = AmCharts.makeChart( "chartdiv", {
		  "type": "serial",
		  "theme": "light",
		  "dataProvider": [
			  {
			    "country": "2000",
			    "visits": 2025
			  }, {
			    "country": "2001",
			    "visits": 1882
			  }, {
			    "country": "2002",
			    "visits": 1809
			  }, {
			    "country": "2003",
			    "visits": 1322
			  }, {
			    "country": "2004",
			    "visits": 1122
			  }, {
			    "country": "2005",
			    "visits": 1114
			  }, {
			    "country": "2006",
			    "visits": 984
			  }, {
			    "country": "2007",
			    "visits": 711
			  }, {
			    "country": "2008",
			    "visits": 665
			  }, {
			    "country": "2009",
			    "visits": 580
			  }, {
			    "country": "2010",
			    "visits": 443
			  }, {
			    "country": "2011",
			    "visits": 441
			  }, {
			    "country": "2012",
			    "visits": 395
			  }
		  ],
		  "valueAxes": [
			{
				"axisAlpha": 0,
				"position": "left",
				"title": "Ton"
			}
		  ],
		  "gridAboveGraphs": true,
		  "startDuration": 1,
		  "graphs": [ {
		    "balloonText": "[[category]]: <b>[[value]]</b>",
		    "fillAlphas": 0.8,
		    "lineAlpha": 0.2,
		    "type": "column",
		    "valueField": "visits"
		  } ],
		  "chartCursor": {
		    "categoryBalloonEnabled": false,
		    "cursorAlpha": 0,
		    "zoomable": false
		  },
		  "categoryField": "country",
		  "categoryAxis": {
		    "gridPosition": "start",
		    "gridAlpha": 0,
		    "tickPosition": "start",
		    "tickLength": 20
		  },
		  "export": {
		    "enabled": true
		  }
		
		} );
    }
	
	var initChartDashboard2 = function() {
		var chart = AmCharts.makeChart( "chartdiv2", {
		  "type": "serial",
		  "theme": "light",
		  "dataProvider": [
			  {
			    "country": "JAN",
			    "visits": 2025
			  }, {
			    "country": "FEB",
			    "visits": 1882
			  }, {
			    "country": "MAR",
			    "visits": 1809
			  }, {
			    "country": "APR",
			    "visits": 1322
			  }, {
			    "country": "MAY",
			    "visits": 1122
			  }, {
			    "country": "JUN",
			    "visits": 1114
			  }, {
			    "country": "JUL",
			    "visits": 984
			  }, {
			    "country": "AUG",
			    "visits": 711
			  }, {
			    "country": "SEP",
			    "visits": 665
			  }, {
			    "country": "OCT",
			    "visits": 580
			  }, {
			    "country": "NOV",
			    "visits": 443
			  }, {
			    "country": "DEC",
			    "visits": 441
			  }
		  ],
		  "valueAxes": [
			{
				"axisAlpha": 0,
				"position": "left",
				"title": "Ton"
			}
		  ],
		  "gridAboveGraphs": true,
		  "startDuration": 1,
		  "graphs": [ {
		    "balloonText": "[[category]]: <b>[[value]]</b>",
		    "fillAlphas": 0.8,
		    "lineAlpha": 0.2,
		    "type": "column",
		    "valueField": "visits"
		  } ],
		  "chartCursor": {
		    "categoryBalloonEnabled": false,
		    "cursorAlpha": 0,
		    "zoomable": false
		  },
		  "categoryField": "country",
		  "categoryAxis": {
		    "gridPosition": "start",
		    "gridAlpha": 0,
		    "tickPosition": "start",
		    "tickLength": 20
		  },
		  "export": {
		    "enabled": true
		  }
		
		} );
    }
	
	var initChartDashboard3 = function() {
		var chart = AmCharts.makeChart( "chartdiv3", {
		  "type": "serial",
		  "theme": "light",
		  "rotate": true,
		  "dataProvider": [
			  {
			    "country": "Truck 1",
			    "visits": 38
			  }, {
			    "country": "Truck 2",
			    "visits": 77
			  }, {
			    "country": "Truck 3",
			    "visits": 115
			  }
		  ],
		  "valueAxes": [
			{
				"axisAlpha": 0,
				"position": "left",
				"title": "KM/h"
			}
		  ],
		  "gridAboveGraphs": true,
		  "startDuration": 1,
		  "graphs": [ {
		    "balloonText": "[[category]]: <b>[[value]]</b>",
		    "fillAlphas": 0.8,
		    "lineAlpha": 0.2,
		    "type": "column",
		    "valueField": "visits"
		  } ],
		  "chartCursor": {
		    "categoryBalloonEnabled": false,
		    "cursorAlpha": 0,
		    "zoomable": false
		  },
		  "categoryField": "country",
		  "categoryAxis": {
		    "gridPosition": "start",
		    "gridAlpha": 0,
		    "tickPosition": "start",
		    "tickLength": 20
		  },
		  "export": {
		    "enabled": true
		  }
		
		} );
    }
	
	var initChartDashboard4 = function() {
		var chart = AmCharts.makeChart( "chartdiv4", {
		  "type": "serial",
		  "theme": "light",
		  "marginRight": 40,
		  "marginLeft": 40,
		  "autoMarginOffset": 20,
		  "dataDateFormat": "YYYY-MM-DD",
		  "valueAxes": [ {
			"axisAlpha": 0,
  			"position": "left",
  			"title": "Ton"
		  } ],
		  "balloon": {
		    "borderThickness": 1,
		    "shadowAlpha": 0
		  },
		  "graphs": [ {
		    "id": "g1",
		    "balloon": {
		      "drop": true,
		      "adjustBorderColor": false,
		      "color": "#ffffff",
		      "type": "smoothedLine"
		    },
		    "fillAlphas": 0.2,
		    "bullet": "round",
		    "bulletBorderAlpha": 1,
		    "bulletColor": "#FFFFFF",
		    "bulletSize": 5,
		    "hideBulletsCount": 50,
		    "lineThickness": 2,
		    "title": "red line",
		    "useLineColorForBulletBorder": true,
		    "valueField": "value",
		    "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
		  } ],
		  "chartCursor": {
		    "valueLineEnabled": true,
		    "valueLineBalloonEnabled": true,
		    "cursorAlpha": 0,
		    "zoomable": false,
		    "valueZoomable": true,
		    "valueLineAlpha": 0.5
		  },
		  "valueScrollbar": {
		    "autoGridCount": true,
		    "color": "#000000",
		    "scrollbarHeight": 50
		  },
		  "categoryField": "date",
		  "categoryAxis": {
		    "parseDates": true,
		    "dashLength": 1,
		    "minorGridEnabled": true
		  },
		  "export": {
		    "enabled": true
		  },
		  "dataProvider": [
			  {
			    "date": "2012-08-01",
			    "value": 13
			  }, {
			    "date": "2012-08-02",
			    "value": 22
			  }, {
			    "date": "2012-08-03",
			    "value": 23
			  }, {
			    "date": "2012-08-04",
			    "value": 20
			  }, {
			    "date": "2012-08-05",
			    "value": 17
			  }, {
			    "date": "2012-08-06",
			    "value": 16
			  }, {
			    "date": "2012-08-07",
			    "value": 18
			  }, {
			    "date": "2012-08-08",
			    "value": 21
			  }, {
			    "date": "2012-08-09",
			    "value": 26
			  }, {
			    "date": "2012-08-10",
			    "value": 24
			  }, {
			    "date": "2012-08-11",
			    "value": 29
			  }, {
			    "date": "2012-08-12",
			    "value": 32
			  }, {
			    "date": "2012-08-13",
			    "value": 18
			  }, {
			    "date": "2012-08-14",
			    "value": 24
			  }, {
			    "date": "2012-08-15",
			    "value": 22
			  }, {
			    "date": "2012-08-16",
			    "value": 18
			  }, {
			    "date": "2012-08-17",
			    "value": 19
			  }, {
			    "date": "2012-08-18",
			    "value": 14
			  }, {
			    "date": "2012-08-19",
			    "value": 15
			  }, {
			    "date": "2012-08-20",
			    "value": 12
			  }, {
			    "date": "2012-08-21",
			    "value": 8
			  }, {
			    "date": "2012-08-22",
			    "value": 9
			  }, {
			    "date": "2012-08-23",
			    "value": 8
			  }, {
			    "date": "2012-08-24",
			    "value": 7
			  }, {
			    "date": "2012-08-25",
			    "value": 5
			  }, {
			    "date": "2012-08-26",
			    "value": 11
			  }, {
			    "date": "2012-08-27",
			    "value": 13
			  }, {
			    "date": "2012-08-28",
			    "value": 18
			  }, {
			    "date": "2012-08-29",
			    "value": 20
			  }, {
			    "date": "2012-08-30",
			    "value": 29
			  }, {
			    "date": "2012-08-31",
			    "value": 33
			  }
		  ]
		} );
    }

    return {
        //main function to initiate the module

        init: function() {
			initChartDashboard();
			initChartDashboard2();
			initChartDashboard3();
			initChartDashboard4();
        }

    };

}();