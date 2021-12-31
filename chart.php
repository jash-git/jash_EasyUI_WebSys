<?php
//user.php作為來源
	error_reporting(0);//停止報錯
	
	date_default_timezone_set("Asia/Taipei");
	echo date("Y-m-d H:i:s")."<br/>";　// 常用的完整表示法，分別為年、月、日、時、分、秒，輸出結果類似 2013-06-05 05:12:50

?>
<script src="echarts/echarts.min.js"></script>
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div id="main" style="width: 600px;height:400px;"></div>
<script type="text/javascript">
	// 基于准备好的dom，初始化echarts实例
	var myChart = echarts.init(document.getElementById('main'));

	// 指定图表的配置项和数据
	var option = {
		title: {
			text: 'ECharts 入门示例'
		},
		tooltip: {},
		legend: {
			data:['销量']
		},
		xAxis: {
			data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
		},
		yAxis: {},
		series: [{
			name: '销量',
			type: 'bar',
			data: [5, 20, 36, 10, 10, 20]
		}]
	};

	// 使用刚指定的配置项和数据显示图表。
	myChart.setOption(option);
</script>