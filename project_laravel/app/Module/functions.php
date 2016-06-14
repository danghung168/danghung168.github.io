<?php
function stripUnicode($str)
{
    if (!$str) return false;
    $unicode = array(
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ầ|ẩ|ẫ|ậ|ấ',
        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ầ|Ẩ|Ẫ|Ậ|Ấ',
        'd' => 'đ',
        'D' => 'Đ',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'E' => 'Ế|Ề|Ể|Ễ|Ệ|Ê|É|È|Ẻ|Ẽ|Ẹ',
        'i' => 'í|ì|ị|ỉ|ĩ',
        'I' => 'Í|Ì|Ị|Ỉ|Ĩ',
        'o' => 'ó|ò|ỏ|õ|ọ|ơ|ớ|ờ|ở|ỡ|ợ|ô|ồ|ổ|ỗ|ộ|ố',
        'Ô' => 'Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ô|Ồ|Ổ|Ỗ|Ộ|Ố',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'y' => 'ý|ỳ|ỵ|ỷ|ỹ',
        'Y' => 'Ý|Ỳ|Ỵ|Ỷ|Ỹ',
    );
    foreach ($unicode as $khongdau => $codau)
    {
        $arr = explode("|", $codau);
        $str = str_replace($arr, $khongdau, $str);
    }
    return  $str;
}
function  changeTitle($str)
{
    $str = trim($str);
    if ($str == "")
        return "";
    $str = str_replace('"', '', $str);
    $str = str_replace("'", '', $str);
    $str = stripUnicode($str);
    $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
    $str = str_replace(' ','-', $str);
    return  $str;
}
function CateMenu ($data, $parent = 0, $str = "--", $select = 0)
{

    foreach ($data as $key => $value)
    {
        $id = $value['id'];
        $name = $value['name'];
        if ($value['paren_id'] == $parent)
        {
            if ($select != 0 && $id == $select)
            {
                echo "<option value = '$id' selected = 'selected>$str . $name</option>";
            }else
            {
                echo "<option value = '$id'>$str $name</option>";
            }
            CateMenu ($data, $id, $str."--");
        }
    }
}
function cate_parent($data, $parent = 0, $str = "--", $select = 0){
    foreach ($data as $key =>$val){
        $id = $val['id'];
        $name = $val['name'];
        if ($val['paren_id'] == $parent){
            if ($select != 0 && $id == $select){
                echo "<option value = '$id' selected = 'selected'>$str $name</option>";
            }else{
                echo "<option value = '$id'>$str $name</option>";
            }
        }
    }
}
?>