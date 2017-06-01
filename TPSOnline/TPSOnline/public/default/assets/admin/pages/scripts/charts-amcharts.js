var ChartsAmcharts = function() {
	
	var initChartDashboard = function() {
		var chart = AmCharts.makeChart("chartdiv", {
			"type": "serial",
			"theme": "light",
			"marginRight": 70,
			"dataProvider": [
				{
					"country": "JAN",
					"visits": 3025,
					"color": "#0D8ECF",
					"visits2": 1254,
					"color2": "#FF9E01",
					"visits3": 7632,
					"color3": "#B0DE09",
					"visits4": 7661,
					"color4": "#CD0D74",
					"visits5": 500,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "FEB",
					"visits": 6382,
					"color": "#0D8ECF",
					"visits2": 8463,
					"color2": "#FF9E01",
					"visits3": 1425,
					"color3": "#B0DE09",
					"visits4": 1000,
					"color4": "#CD0D74",
					"visits5": 322,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "MAR",
					"visits": 9872,
					"color": "#0D8ECF",
					"visits2": 111,
					"color2": "#FF9E01",
					"visits3": 5244,
					"color3": "#B0DE09",
					"visits4": 1000,
					"color4": "#CD0D74",
					"visits5": 1673,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "APR",
					"visits": 1322,
					"color": "#0D8ECF",
					"visits2": 1828,
					"color2": "#FF9E01",
					"visits3": 1726,
					"color3": "#B0DE09",
					"visits4": 1542,
					"color4": "#CD0D74",
					"visits5": 1000,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "MEI",
					"visits": 1122,
					"color": "#0D8ECF",
					"visits2": 5244,
					"color2": "#FF9E01",
					"visits3": 2515,
					"color3": "#B0DE09",
					"visits4": 3444,
					"color4": "#CD0D74",
					"visits5": 1000,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "JUN",
					"visits": 1114,
					"color": "#0D8ECF",
					"visits2": 7429,
					"color2": "#FF9E01",
					"visits3": 2334,
					"color3": "#B0DE09",
					"visits4": 6333,
					"color4": "#CD0D74",
					"visits5": 6726,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "JUL",
					"visits": 3422,
					"color": "#0D8ECF",
					"visits2": 2373,
					"color2": "#FF9E01",
					"visits3": 2322,
					"color3": "#B0DE09",
					"visits4": 5342,
					"color4": "#CD0D74",
					"visits5": 2342,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "AUG",
					"visits": 711,
					"color": "#0D8ECF",
					"visits2": 3423,
					"color2": "#FF9E01",
					"visits3": 5322,
					"color3": "#B0DE09",
					"visits4": 3231,
					"color4": "#CD0D74",
					"visits5": 5332,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "SEP",
					"visits": 2323,
					"color": "#0D8ECF",
					"visits2": 6432,
					"color2": "#FF9E01",
					"visits3": 3233,
					"color3": "#B0DE09",
					"visits4": 6432,
					"color4": "#CD0D74",
					"visits5": 3332,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "NOV",
					"visits": 3233,
					"color": "#0D8ECF",
					"visits2": 4221,
					"color2": "#FF9E01",
					"visits3": 3332,
					"color3": "#B0DE09",
					"visits4": 4231,
					"color4": "#CD0D74",
					"visits5": 2123,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "DES",
					"visits": 443,
					"color": "#0D8ECF",
					"visits2": 1000,
					"color2": "#FF9E01",
					"visits3": 2344,
					"color3": "#B0DE09",
					"visits4": 1234,
					"color4": "#CD0D74",
					"visits5": 1543,
					"color5": "#8A0CCF"
			  	}
			],
			"valueAxes": [
				{
					"axisAlpha": 0,
					"position": "left",
					"title": "Visitors from country"
			  	}
			],
			"startDuration": 1,
			"graphs": [
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "KOJA",
					"color": "#FF0F00",
					"valueField": "visits"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color2",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "JICT",
					"color": "#000000",
					"valueField": "visits2"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color3",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "TER3",
					"color": "#000000",
					"valueField": "visits3"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color4",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "MAL0",
					"color": "#000000",
					"valueField": "visits4"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color5",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "NTC1",
					"color": "#000000",
					"valueField": "visits5"
			  	}
			],
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
	
	var initChartDashboard2 = function() {
		var chart = AmCharts.makeChart("chartdiv2", {
			"type": "serial",
			"theme": "light",
			"marginRight": 70,
			"dataProvider": [
				{
					"country": "JAN",
					"visits": 3025,
					"color": "#0D8ECF",
					"visits2": 1254,
					"color2": "#FF9E01",
					"visits3": 7632,
					"color3": "#B0DE09",
					"visits4": 7661,
					"color4": "#CD0D74",
					"visits5": 500,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "FEB",
					"visits": 6382,
					"color": "#0D8ECF",
					"visits2": 8463,
					"color2": "#FF9E01",
					"visits3": 1425,
					"color3": "#B0DE09",
					"visits4": 1000,
					"color4": "#CD0D74",
					"visits5": 322,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "MAR",
					"visits": 9872,
					"color": "#0D8ECF",
					"visits2": 111,
					"color2": "#FF9E01",
					"visits3": 5244,
					"color3": "#B0DE09",
					"visits4": 1000,
					"color4": "#CD0D74",
					"visits5": 1673,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "APR",
					"visits": 1322,
					"color": "#0D8ECF",
					"visits2": 1828,
					"color2": "#FF9E01",
					"visits3": 1726,
					"color3": "#B0DE09",
					"visits4": 1542,
					"color4": "#CD0D74",
					"visits5": 1000,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "MEI",
					"visits": 1122,
					"color": "#0D8ECF",
					"visits2": 5244,
					"color2": "#FF9E01",
					"visits3": 2515,
					"color3": "#B0DE09",
					"visits4": 3444,
					"color4": "#CD0D74",
					"visits5": 1000,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "JUN",
					"visits": 1114,
					"color": "#0D8ECF",
					"visits2": 7429,
					"color2": "#FF9E01",
					"visits3": 2334,
					"color3": "#B0DE09",
					"visits4": 6333,
					"color4": "#CD0D74",
					"visits5": 6726,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "JUL",
					"visits": 3422,
					"color": "#0D8ECF",
					"visits2": 2373,
					"color2": "#FF9E01",
					"visits3": 2322,
					"color3": "#B0DE09",
					"visits4": 5342,
					"color4": "#CD0D74",
					"visits5": 2342,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "AUG",
					"visits": 711,
					"color": "#0D8ECF",
					"visits2": 3423,
					"color2": "#FF9E01",
					"visits3": 5322,
					"color3": "#B0DE09",
					"visits4": 3231,
					"color4": "#CD0D74",
					"visits5": 5332,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "SEP",
					"visits": 2323,
					"color": "#0D8ECF",
					"visits2": 6432,
					"color2": "#FF9E01",
					"visits3": 3233,
					"color3": "#B0DE09",
					"visits4": 6432,
					"color4": "#CD0D74",
					"visits5": 3332,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "NOV",
					"visits": 3233,
					"color": "#0D8ECF",
					"visits2": 4221,
					"color2": "#FF9E01",
					"visits3": 3332,
					"color3": "#B0DE09",
					"visits4": 4231,
					"color4": "#CD0D74",
					"visits5": 2123,
					"color5": "#8A0CCF"
			  	}, 
				{
					"country": "DES",
					"visits": 443,
					"color": "#0D8ECF",
					"visits2": 1000,
					"color2": "#FF9E01",
					"visits3": 2344,
					"color3": "#B0DE09",
					"visits4": 1234,
					"color4": "#CD0D74",
					"visits5": 1543,
					"color5": "#8A0CCF"
			  	}
			],
			"valueAxes": [
				{
					"axisAlpha": 0,
					"position": "left",
					"title": "Visitors from country"
			  	}
			],
			"startDuration": 1,
			"graphs": [
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "KOJA",
					"color": "#FF0F00",
					"valueField": "visits"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color2",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "JICT",
					"color": "#000000",
					"valueField": "visits2"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color3",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "TER3",
					"color": "#000000",
					"valueField": "visits3"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color4",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "MAL0",
					"color": "#000000",
					"valueField": "visits4"
			  	},
				{
					"balloonText": "<b>[[title]], [[category]]: [[value]]</b>",
					"fillColorsField": "color5",
					"fillAlphas": 0.9,
					"lineAlpha": 0.2,
					"type": "column",
					"title": "NTC1",
					"color": "#000000",
					"valueField": "visits5"
			  	}
			],
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

    return {
        //main function to initiate the module

        init: function() {
			initChartDashboard();
			initChartDashboard2();
        }

    };

}();