
        
$(function(){
    var aduitObj = {
        init: function(){

            this.chartList = [];
           
            this.drawTipPie();
            this.drawBarChart();

           
            this.getTableList();
            this.getNetworkList();
        },
        pieOption: function(){
            return {
                tooltip : {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                color: ['#fa7d7d', '#f9dd8a', '#5bc7e6', '#aeb3b8'],
                calculable : false,
                series : [
                    {
                        name:'访问来源',
                        type:'pie',
                        radius : ['40%', '70%'],
                        itemStyle : {
                            normal : {
                                label : {
                                    show : 'inner'
                                },
                                labelLine : {
                                    show : 'inner'
                                }
                            },
                            emphasis : {
                                label : {
                                    show : true,
                                    position : 'center',
                                    textStyle : {
                                        fontSize : '20',
                                        fontWeight : 'bold'
                                    }
                                }
                            }
                        }
                    }
                ]
            };
        },
        barOption: function(){

            return {
                
                tooltip : {
                    trigger: 'axis'
                },
                color: ['#fa7d7d', '#f9dd8a', '#5bc7e6', '#aeb3b8'],
                
                calculable : false,
                yAxis : [
                    {
                        type : 'value',
                        boundaryGap : [0, 0.01]
                    }
                ],
                xAxis : [
                    {
                        type : 'category'
                    }
                ]
                
            };
        },
        tableHover: function(config){
            config = $.extend({
                wrap: '#network-table-wrap',
                list: '.network-tabletr',
                className: 'active',
                listTd: '.network-table-list'
            }, config || {});
            var wrap = $(config.wrap),
                list = wrap.find(config.list),
                className = config.className;

                list.hover(function(){
                    var that = $(this);
                    that.siblings().removeClass(className).end().addClass(className);
                    that.find(config.listTd).show();
                }, function(){
                     var that = $(this);
                     that.removeClass(className);
                     that.find(config.listTd).hide();
                });
        },
        
        drawChart: function(config){
            config = config || {};
            var wrap = $(config.wrap),
                myChart,
                that = this;


            wrap.length && (myChart = echarts.init(wrap[0])); 
            myChart && myChart.setOption(config.data);
            this.chartList.push(myChart);
             window.onresize =  function(){
               $.each( that.chartList, function(){
                    $(this).resize();
                })
             }
            
           
        },
        createAjax: function(config){
            var deaultConf = {
                method: 'get',
                settpl: true
            };

            config = $.extend(deaultConf, config || {});

            var method = config.method;

            $[method](config.url)
                .success(function(data){
                    config.settpl && $(config.wrap).html(baidu.template(config.tpl, data));
                    config.success && config.success(data);
                })
                .error(function() { console.log("error"); });
        },
        getTableList: function(){
            var that = this;
             this.createAjax({
                url: __APPDOMAIN + '/data/table.json',
                wrap: '#network-tbody',
                tpl: 'network-table',
                success: function(){
                     that.tableHover();
                }
             })

        },
        getNetworkList: function(){
            this.createAjax({
                url: __APPDOMAIN + '/data/networklist.json',
                wrap: '#network-list-box',
                tpl: 'network-list-tpl',
                settpl: true
             });
        },
        drawTipPie: function(){
            var that = this;
            this.createAjax({
                url: __APPDOMAIN + '/data/piechart.json',
                wrap: '#network-tootlip-box',
                tpl: 'network-tootlip-tpl',
                success: function(data){
                    var option = that.pieOption();
                    option.series[0].data = data.data;
                    that.drawChart({
                        wrap: '#network-pie',
                        data: option
                    });
                }
             });
        },
        drawBarChart: function(){
            var that = this;
            this.createAjax({
                url: __APPDOMAIN + '/data/barchart.json',
                success: function(data){
                    var option = that.barOption(),
                    datas = data.data;;
                    option.series = datas.bardata;
                    option.xAxis[0].data = datas.catalist;
                    that.drawChart({
                        wrap: '#network-bar',
                        settpl: false,
                        data: option
                    });
                }
             });
            
        }
    };

    aduitObj.init();

});

