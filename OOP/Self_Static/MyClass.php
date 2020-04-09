<?php  

class ConNguoi  
{  
    private static $name = 'Con Người';  

    public static function getName()  
    {  
    	//truy xuất đến class khai báo nó	
        echo self::$name;  

        echo '<br>';  

        //static cho phép truy cập đối tượng hiện tại, gần giống $this
        echo static::$name;  

    }  
}  

/**
 * Lớp con kế thừa lớp cha ConNguoi
 */
class NguoiLon extends ConNguoi
{
	protected static $name = 'NguoiLon'; 
}

$a = new NguoiLon();  

$a->getName(); 
?>