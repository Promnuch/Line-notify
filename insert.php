
<?php


require_once('Database.php');
$db = new Database('test_Database','root','','localhost'); // เชื่อมต่อฐานข้อมูล
$result = $db->insert('test_Database',$_POST); // สั่ง Insert ข้อมูล users คือชื่อ Table ส่วน $_POST คือข้อมูลที่ส่งมาจากฟอร์มทั้งหมด
echo('success');


?>



