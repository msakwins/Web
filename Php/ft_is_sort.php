<?
function ft_is_sort($tab)
{
    $sorted = $tab;
    sort($sorted);
    if ($sorted === $tab)
        return(TRUE);
    return(FALSE);
}
?>