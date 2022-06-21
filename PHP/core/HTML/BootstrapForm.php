<?php
namespace Core\HTML;
class BootstrapForm extends Form{

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    /**
     * @param $name string
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $mapped = isset($options['mapped']) ? $options['mapped'] : true;
        $length = isset($options['maxlength']) ? $options['maxlength'] : '';
        $value = "";
        if($mapped){
            $value =  $this->getValue($name);
        }
        $label = '<label>' . $label . '</label>';
        if($type === 'textarea'){
            if($length ){
                $input = '<textarea name="' . $name . '" class="form-control" maxlength="'.$length.'"  >' . $this->getValue($name) . '</textarea>';

            }else{
                $input = '<textarea name="' . $name . '" class="form-control">' . $value. '</textarea>';
            }
        } else{
            if($length ){
                $input = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" class="form-control" maxlength="'.$length.'" >';

            }else{
                $input = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" class="form-control">';

            }

        }
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options,$mapped = true){
        $value = "";
        if($mapped){
            $value = $this->getValue($name);
        }
        $label = '<label>' . $label . '</label>';
        $input = '<select class="form-control" id="' . $name . '" name="' . $name . '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $value){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}