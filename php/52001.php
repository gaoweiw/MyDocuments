<?php 

	$arr=array(
			'code'=>'0000',
			'data'=>getData()
		);

	function getData(){
		$data=array(
			"title" => 'sublime Text 快捷键',
			"text" => array(
					'a',
					'b',
					'c',
					date("Y年m月d日")
				)
		);

		return $data;
	}

	echo json_encode($arr);

 ?>