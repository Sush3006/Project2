<?php
namespace utility;
//namespace MyProject\mvcName;
class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {
<<<<<<< HEAD
        print_r($array);
        $tableGen = '<table border=2>';
=======
<<<<<<< HEAD
        print_r($array);
        $tableGen = '<table border=2>';
=======
        $tableGen = '<table border="1"cellpadding="10">';
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
                    $id1=$value;
                } 
                    $tableGen .= '<td>' . $value . '</td>';
            }
            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $id1 . '">edit</a></td>';
            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=edit&id=' . $id1 . '">delete</a></td>';
            $id1='';
<<<<<<< HEAD
=======
=======
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
            $tableGen .= '</tr>';
        }
        $tableGen .= '</table>';
        return $tableGen;
    }
    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';
        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}
<<<<<<< HEAD
?>
=======
<<<<<<< HEAD
?>
=======
?>
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
