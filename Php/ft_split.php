<?
function ft_split($str)
{
    if (!$str)
        return (array());
    $str = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $str)));
    $tab = explode(" ", $str);
    sort($tab);
    return($tab);
}
?>