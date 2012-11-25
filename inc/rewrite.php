<?php  
  
	
function clearDiacritics($sText)  
{  
    $aReplacePL = array(  
        'ą' => 'a', 'ę' => 'e', 'ś' => 's', 'ć' => 'c',  
        'ó' => 'o', 'ń' => 'n', 'ż' => 'z', 'ź' => 'z', 'ł' => 'l',  
        'Ą' => 'A', 'Ę' => 'E', 'Ś' => 'S', 'Ć' => 'C',  
        'Ó' => 'O', 'Ń' => 'N', 'Ż' => 'Z', 'Ź' => 'Z', 'Ł' => 'L'  
        );  
      
    return str_replace(array_keys($aReplacePL), array_values($aReplacePL), $sText);  
}  
  
function prepareURL($sText)  
{  
    // pozbywamy się polskich znaków diakrytycznych  
    $sText = clearDiacritics($sText);  
  
    // dla przejrzystości wszystko z małych liter  
    $sText = strtolower($sText);  
  
    // wszystkie spacje zamieniamy na myślniki  
    $sText = str_replace(' ', '-', $sText);  
  
    // usuń wszytko co jest niedozwolonym znakiem  
    $sText = preg_replace('/[^0-9a-z\-]+/', '', $sText);  
  
    // zredukuj liczbę myślników do jednego obok siebie  
    $sText = preg_replace('/[\-]+/', '-', $sText);  
  
    // usuwamy możliwe myślniki na początku i końcu  
    $sText = trim($sText, '-');  
  
    return $sText;  
}  
  
  function urlDocument($sText, $iId)  
{  
    $sURL = '/%s,id%d.html';  
    $sName = prepareURL($sText);  
      
    return sprintf($sURL, $sName, $iId);  
} 

  function urlDocumentClip($sText, $clip)  
{  
    $sURL = '/%s,clip%d.html';  
    $sName = prepareURL($sText);  
      
    return sprintf($sURL, $sName, $clip);  
}


?>