<?php 
//1.�����ֵ䱣����Ʒ��Ϣ
$products = array(
		"nv" => array("title"=>"����Ůװ", "des"=>"�˼��˰�����������������ϵ��","images"=> "../image/1.jpg"),
		"bb" => array("title"=>"�ݻ�¿��", "des"=>"��Ů�ѣ������ˣ���ѧ�ã�һ��һ��׼ϵ��","images"=>"../image/2.jpg"),
		"tx" => array("title"=>"������Ь", "des"=>"����Աר����Ь����˿��ϢŨ������ֵ��ӵ��","images"=>"../image/3.jpg")		
);
//2.��ȡǰ�˴��ݵĲ���
$name = $_GET("name");

//3.����ǰ�˴����key,��ȡ��Ӧ���ֵ�
$product = $products[$name];

//4.��С�ֵ��е�����ȡ�������ظ�ǰ��
echo $product["title"];
echo "|";
echo $product["des"];
echo "|";
echo $product["image"];
echo "123";
?>