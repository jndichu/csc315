<?php
class Employee
{
    // Constructor
    public function __construct(){
        
    }
    
    // Destructor
    public function __destruct(){
    
    }
//function to get sum
     function searchEmployee($kra , $idno, $dept){

        $Salesdepartment = array(
            array(
                'Name' => 'james',
                'Phone' => '22222',
                'gender' => 'Male',
                'Town' => 'Nairobi',
                'Kra' => 'ac3ddf444',
                'IDNo' => '10936482'
            ),
            array(
                'Name' => 'Cynthia',
                'Phone' => '3333',
                'gender' => 'female',
                'Town' => 'Kisumu',
                'Kra' => 'a456223',
                'IDNo' => '3434'
            )
        );
        $ITdepartment = array(
            array(
                'Name' => 'Sasha',
                'Phone' => '4444',
                'gender' => 'female',
                'Town' => 'California',
                'Kra' => 'af345500',
                'IDNo' => '4566543'
            ),
            array(
                'Name' => 'Sandra',
                'Phone' => '8888',
                'gender' => 'female',
                'Town' => 'Mombasa',
                'Kra' => 'a4fd566',
                'IDNo' => '9992'
            )
        );

        if($dept == 1){
            foreach ($Salesdepartment as $key => $val) {
                if ($val['Kra'] == $kra && $val['IDNo'] == $idno) {
                    return $ITdepartment;
                    //var_dump($ITdepartment);
                }
            }
        }else{
            foreach ($ITdepartment as $key => $val) {
                if ($val['Kra'] == $kra && $val['IDNo'] == $idno) {
                    return $ITdepartment;
                    //var_dump($ITdepartment);
                }
            }
        }
            
            
         

    }
//function to convert to xml
    function createXml($details) {

        $response = '<?xml version="1.0" encoding="utf-8"?>';
        $response .= '<response>
        <customername>'.$details[0]['Name'].'</customername>
        <phone>'.$details[0]['Phone'].'</phone>
        <gender>'.$details[0]['gender'].'</gender>
        <Town>'.$details[0]['Town'].'</Town>
        <Kra>'.$details[0]['Kra'].'</Kra>
        <idno>'.$details[0]['IDNo'].'</idno>
        </response>';
    
              
            return $response;
     }
}
 
// Create a new object
$obj = new Employee;
 $data = $obj->searchEmployee($_GET['kra'],$_GET['idno']);
 //$obj->createXml($data);
 //var_dump($data);
 header("Content-type: text/xml; charset=utf-8");
 echo $obj->createXml($data);


 
?>
