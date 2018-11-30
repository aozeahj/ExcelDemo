<?php
/**
 * Created by PhpStorm.
 * User: aozeahj
 * Date: 2018/11/16
 * Time: 6:04 PM
 */

require __DIR__ . "/../vendor/autoload.php";

$powerExcel = new \ExcelDemo\ReportFrom();

//$powerExcel->singleSheet(['name','class'], [['zhangsan','1304'],['lisi', 222]], '测试', 'kkk', '/tmp/', true);

$excel_data[] = array('sheet_name' => '111', 'sheet_title' => ['日期','渠道类型','操作系统','一级渠道','二级渠道', '次日留存率'], 'dim_cnt' => 5, 'sheet_data' =>[['2018-11-29','营销活动','全部','租赁活动','全部', '0%'],['2018-11-29','营销活动','全部','全部','全部', '0%'],['2018-11-29','经纪人拉新','全部','经纪人拉新','全部', '0%'], ['2018-11-29','经纪人拉新','全部','全国经纪人拉新','全部', '0%'],['2018-11-29','积分墙','全部','钱咖','全部', '0%'],['2018-11-29','积分墙','全部','试客','全部', '0%'],['2018-11-29','积分墙','全部','巨掌','全部', '0%'],['2018-11-30','积分墙','全部','巨掌','全部', '0%']]);
//$excel_data[] = array('sheet_name' => '222', 'sheet_title' => ['城市','端','uv','pv'], 'dim_cnt' => 2, 'sheet_data' =>[['北京','app',222,10000],['北京', 'app',333,40000],['北京', 'apph5',333,40000], ['上海', 'apph5',333,40000],['杭州', 'apph5',333,40000],['杭州', 'pc',333,40000]]);


//$powerExcel->singleSheet(['城市','端','uv','pv'], 2, [['北京','app',222,10000],['北京', 'app',333,40000],['北京', 'apph5',333,40000], ['上海', 'apph5',333,40000],['杭州', 'apph5',333,40000],['杭州', 'pc',333,40000]], '测试', 'kkk', '/tmp/', true);

$powerExcel->numerouseSheet($excel_data, '多sheet测试', '/tmp/', true);

//$powerExcel->merge([],[],'cee');