AmCharts.makeChart("graph1",
    {
        "type": "serial",
        "startDuration": 1,
        "color": "#FFF",
        "handDrawScatter": 6,
        "categoryAxis": {
            "gridPosition": "start",
            "autoGridCount": false,
            "titleBold": false,
            "titleFontSize": 2
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[title]] of [[category]]:[[value]]",
                "fillAlphas": 0.7,
                "id": "AmGraph-2",
                "lineAlpha": 0,
                "title": "graph 2",
                "valueField": "column-2"
            },
            {
                "id": "AmGraph-3",
                "title": "graph 3"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "title": "Axis title"
            }
        ],
        "allLabels": [],
        "balloon": {
            "borderThickness": 0,
            "color": "#FFF",
            "fadeOutDuration": 0,
            "fixedPosition": false,
            "fontSize": 1,
            "offsetY": 3,
            "pointerWidth": 4,
            "shadowColor": "#FFF"
        },
        "titles": [],
        "dataProvider": [
            {
                "category": "category 1",
                "column-2": 5
            },
            {
                "category": "category 2",
                "column-2": 7
            },
            {
                "category": "category 3",
                "column-2": 3
            },
            {
                "category": "category 4",
                "column-2": 3
            },
            {
                "category": "category 5",
                "column-2": 1
            },
            {
                "category": "category 6",
                "column-2": 2
            },
            {
                "category": "category 7",
                "column-2": 8
            }
        ]
    }
);


    AmCharts.makeChart("graph2",
        {
            "type": "serial",
            "categoryField": "category",
            "startDuration": 1,
            "color": "#FFF",
            "theme": "light",
            "categoryAxis": {
                "gridPosition": "start"
            },
            "trendLines": [],
            "graphs": [
                {
                    "balloonText": "[[title]] of [[category]]:[[value]]",
                    "fillAlphas": 0.7,
                    "id": "AmGraph-2",
                    "lineAlpha": 0,
                    "title": "graph 2",
                    "valueField": "column-2"
                },
                {
                    "id": "AmGraph-3",
                    "title": "graph 3"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "title": "Axis title"
                }
            ],
            "allLabels": [],
            "balloon": {},
            "titles": [
                {
                    "id": "Title-1",
                    "size": 15,
                    "text": "Chart Title"
                }
            ],
            "dataProvider": [
                {
                    "category": "category 1",
                    "column-1": 8,
                    "column-2": 5
                },
                {
                    "category": "category 2",
                    "column-1": 6,
                    "column-2": 7
                },
                {
                    "category": "category 3",
                    "column-1": 2,
                    "column-2": 3
                },
                {
                    "category": "category 4",
                    "column-1": 1,
                    "column-2": 3
                },
                {
                    "category": "category 5",
                    "column-1": 2,
                    "column-2": 1
                },
                {
                    "category": "category 6",
                    "column-1": 3,
                    "column-2": 2
                },
                {
                    "category": "category 7",
                    "column-1": 6,
                    "column-2": 8
                }
            ]
        }
    );

AmCharts.makeChart("graph3",
    {
        "type": "serial",
        "categoryField": "category",
        "startDuration": 1,
        "color": "#FFF",
        "theme": "patterns",
        "categoryAxis": {
            "gridPosition": "start"
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[title]] of [[category]]:[[value]]",
                "fillAlphas": 0.7,
                "id": "AmGraph-2",
                "lineAlpha": 0,
                "title": "graph 2",
                "valueField": "column-2"
            },
            {
                "id": "AmGraph-3",
                "title": "graph 3"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "title": "Axis title"
            }
        ],
        "allLabels": [],
        "balloon": {},
        "titles": [
            {
                "id": "Title-1",
                "size": 15,
                "text": "Chart Title"
            }
        ],
        "dataProvider": [
            {
                "category": "category 1",
                "column-1": 8,
                "column-2": 5
            },
            {
                "category": "category 2",
                "column-1": 6,
                "column-2": 7
            },
            {
                "category": "category 3",
                "column-1": 2,
                "column-2": 3
            },
            {
                "category": "category 4",
                "column-1": 1,
                "column-2": 3
            },
            {
                "category": "category 5",
                "column-1": 2,
                "column-2": 1
            },
            {
                "category": "category 6",
                "column-1": 3,
                "column-2": 2
            },
            {
                "category": "category 7",
                "column-1": 6,
                "column-2": 8
            }
        ]
    }
);