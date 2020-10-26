<?php
require_once 'AbstractDisplay.class.php';
?>
<?php
/**
 * ConcreteClassクラスに相当する
 */
class TableDisplay extends AbstractDisplay {

    
    
    
    
    /**
     * ヘッダを表示する
     */
    protected function displayHeader() {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    /**
     * ボディ（クライアントから渡された内容）を表示する
     */
    protected function displayBody() {
         echo '<tr>';
            echo '<th></th>';
            echo '<td>name</td>';
            echo '</tr>';
        foreach ($this->getData() as $key => $value) {
            $key++; 
            echo '<tr>';
            echo '<th>menu' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    /**
     * フッタを表示する
     */
    protected function displayFooter() {
        echo '</table>';
    }
}
?>
