<?php
require_once 'AbstractDisplay.class.php';
?>
<?php
/**
 * ConcreteClass���饹����������
 */
class TableDisplay extends AbstractDisplay {

    
    
    
    
    /**
     * �إå���ɽ������
     */
    protected function displayHeader() {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    /**
     * �ܥǥ��ʥ��饤����Ȥ����Ϥ��줿���ơˤ�ɽ������
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
     * �եå���ɽ������
     */
    protected function displayFooter() {
        echo '</table>';
    }
}
?>
