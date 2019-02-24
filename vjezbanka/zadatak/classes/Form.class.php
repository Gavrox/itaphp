<?php

class Form {

    public function open_tag($action="",$method="",$enctype=""){
        echo "<form action='{$action}' method='{$method}' enctype='{$enctype}'>";
    }
    public function label($for,$text){
        echo "<label for='{$for}'>{$text}</label>";
    }
    public function input($type,$name,$value="",$placeholder=""){
        echo "<input type='{$type}' name='{$name}' value='{$value}' placeholder='{$placeholder}'>";
    }
    public function close_tag(){
        echo "</form>";
    }

    public function option(){
        echo "<select name='lang'>";
        echo "<option>Prevedi na Srpski</option>";
        echo "<option>Prevedi na Engleski</option>";
        echo "</select>";
    }
}