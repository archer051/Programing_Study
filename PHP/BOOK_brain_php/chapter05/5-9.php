<?
$arr = array( '������' =>
				array( '����' => 100,
				'����' => 100,
				'����' => 80
			),
			'����' =>
				array( '����' => 90,
				'����' => 100,
				'����' => 90
			),
			'�赿��' =>
				array( '����' => 80,
				'����' => 80,
				'����' => 100
			)
);
echo $arr['������']['����'] .','.$arr['������']['����'] .','.$arr['������']['����'];
echo '<BR>';
echo $arr['����']['����'] .','.$arr['����']['����'] .','.$arr['����']['����'];
echo '<BR>';
echo $arr['�赿��']['����'] .','.$arr['�赿��']['����'] .','.$arr['�赿��']['����'];
?>