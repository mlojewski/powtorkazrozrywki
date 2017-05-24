<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if( ! $_FILES['uploadFile'] ){
            die('Brak przesłanego pliku');
        }
        
        try{
            $hashedNameFile = changeNameToMD5($_FILES['uploadFile']['name']);
            mainMakeDir( $hashedNameFile ) ;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
        
        
         
         
    }
    
    
  /*
   * ----------------
   */  
    
    
    function fileWrite($dirName){
        
        
        $destination = '/var/www/upload/'. basename($_FILES['uploadFile']['name']);

        //TODO FALSE
         $moveResult = move_uploaded_file($_FILES['uploadFile']['tmp_name'], $destination) ;
        
         if($moveResult == FALSE){
             throw new Exception('Move_Upload_file nie działa');
         }
    }
    
    
    function changeNameToMD5($nameFileWithExtend){
        
        if($nameFileWithExtend == null){
            throw new Exception('MD5', 1);
        }
        
        $nameFile = strtok($nameFileWithExtend, '.');
        return md5($nameFile);
    }
    
    function mainMakeDir($hashedName){
        
        $curentDate = date('Y-m-d');
        
        if( is_dir($curentDate) == FALSE ){
            //nie ma folderu
            mkdir($curentDate);
        }
        $firstLetters = substr($hashedName, 0,2);
        $lastLetters = substr($hashedName, -2);

        $resultOf = makeSubDir($curentDate.'/', $firstLetters);
        
        if($resultOf){            
            $subDirSub = makeSubDir($curentDate.'/'.$firstLetters.'/', $lastLetters);
        }else {
            throw new Exception('Nie udało się utworzyć pierwszego katalogu');
        }
        
        if($subDirSub){
            //zapis
            $dirName = $curentDate.'/'.$firstLetters.'/'.$lastLetters.'/';
            fileWrite($dirName);
        }else {
            throw new Exception('Nie udało się utworzyć drugiego katalogu');
            $resultOf = false;
        }
        
        return $resultOf;
    }
    
    
    function makeSubDir($dirToCreate, $nameOfDirToCreate){
        $resultOf = null;
        $dirToCheck = $dirToCreate.$nameOfDirToCreate;
        
        if(is_dir($dirToCheck) == FALSE){
           $resultOf = mkdir($dirToCheck);
        }
        
        return $resultOf;
    }
    
    