<?php
require_once 'food.class.php';
require_once 'karaage.class.php';
require_once 'chicken.class.php';
require_once 'curry.class.php';

$karaage = new karaage('からあげ', 300, 'マヨネーズ');
$chicken = new chicken('チキン南蛮', 580);
$curry = new curry('カレー', 950);

$menus = array($karaage, $chicken, $curry);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>メニュー</title>
    </head>
    <FORM METHOD="POST" action="pay.php">
        <div>
            <b>メニュー</b>
        </div>
            <?php
            $i=1;
            foreach($menus as $menu):?>
                <div>
                    <?php
                    echo $menu->getName()." ".$menu->getPrice()." ";
                    if(get_class($menu)=='karaage'){
                        print $menu->getSource();
                    }?>
                    <input type="number" name="food_quantity<?php echo $i?>" size="3" maxlength="3" min="0" step="1"> 個
                </div>
               	<?php
               	$i++;
       	    endforeach ?>
        <div>
       		<button type="submit">会計</button><br><br>
        </div>				
    </FORM>
</html>