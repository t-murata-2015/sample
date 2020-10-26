<?php
require_once 'AbstractDisplay.class.php';
?>
<?php
/**
 * ConcreteClassクラスに相当する
 */
class ListDisplay extends AbstractDisplay {

    /**
     * ヘッダを表示する
     */
    protected function displayHeader() {
        echo '<dl>';
    }

    /**
     * ボディ（クライアントから渡された内容）を表示する
     */
    protected function displayBody() {
        foreach ($this->getData() as $key => $value) {
            $key++; 
            echo '<dt>DISH ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * フッタを表示する
     */
    protected function displayFooter() {
        echo '</dl>';
    }
}
?>
