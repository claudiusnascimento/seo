<?php


if (! function_exists('seo_form_builder')) {

    function seo_form_builder_text($label, $name, $model = false) {

        $html = '<div class="form-group">';
        $html .= '<label for="'.$name.'">'.$label.'</label>';

        $value = get_seo_attr_value($name, $model);

        $html .= '<input class="form-control" name="'.$name.'" type="text" value="'.$value.'">';

        return $html . '</div>';
    }
}

if (! function_exists('seo_form_builder_textarea')) {

    function seo_form_builder_textarea($label, $name, $model = false) {

        $html = '<div class="form-group">';
        $html .= '<label for="'.$name.'">'.$label.'</label>';

        $value = get_seo_attr_value($name, $model);
        $html .= '<textarea class="form-control" name="'.$name.'" cols="50" rows="10">'.$value.'</textarea>';

        return $html . '</div>';
    }
}

if (! function_exists('get_seo_attr_value')) {

    function get_seo_attr_value($name, $model = false) {
        return old($name, optional($model)->{$name});
    }
}
