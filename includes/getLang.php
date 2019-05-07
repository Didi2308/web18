<?php
function getLang()
{
    $locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
if ($locale == "")
    $locale == 'fr-FR';
    $locale = substr ($locale, 0, 2);
    return $locale;

}