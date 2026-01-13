<?php
function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->is_permission);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }

  function getMyPermission($id)
  {
    switch ($id) {
      case 1:
        return 'superadmin';
        break;
      case 2:
        return 'perlengkapan';
        break;
      case 3:
        return 'kepegawaian';
        break; 
      case 4:
        return 'keuangan';
        break;
      case 5:
        return 'infokom';
        break; 
      case 6:
        return 'laboratorium';
        break; 
      case 7:
        return 'penindakan';
        break; 
      case 8:
        return 'pemeriksaan';
        break; 
      case 9:
        return 'pengujian';
        break; 
      case 10:
        return 'evaluasi';
        break; 
      case 11:
        return 'admin';
        break;
      case 12:
        return 'ktu';
        break;
      case 13:
        return 'user';
        break;
      case 14:
        return 'sertifikasi';
        break; 
      case 15:
        return 'it';
        break; 
      case 16:
        return 'kabalai';
        break;
      case 17:
        return 'picinfokom';
        break;
      case 18:
        return 'picinspeksi';
        break;
      case 19:
        return 'picsertifikasi';
        break;
      case 20:
        return 'picpengujian';
        break;
      case 21:
        return 'picpenindakan';
        break;
      case 22:
        return 'pickepegawaian';
        break;
      case 23:
        return 'picsakip';
        break;
      case 24:
        return 'picujipangan';
        break;
      case 25:
        return 'picujikos';
        break;
      case 26:
        return 'picujimic';
        break;
      case 27:
        return 'picujiot';
        break;
      case 28:
        return 'picserdep2';
        break;
      case 29:
        return 'picserdep3';
        break;
      case 30:
        return 'picinfopn';
        break;
      default:
        return 'cadangan';
        break;
    }
  }
  
 
  function getVersion(){
      return "1.0";
  }
  
  


?>
