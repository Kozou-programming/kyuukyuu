<?php
                  
function str(String $string) :string{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}