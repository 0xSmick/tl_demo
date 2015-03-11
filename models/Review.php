<?php
 
namespace app\models;
 
use yii\base\Model;
 
class Review extends Model
{
    const PERMISSIONS_PRIVATE = 10;
    const PERMISSIONS_PUBLIC = 20;
     
    public $titleOfCompany;
    public $text;
    public $permissions;
 
    public function rules()
    {
        return [
            [['titleOfCompany','text','permissions'], 'required'],
        ];
    }
     
    public function getPermissions() {
      return array (self::PERMISSIONS_PRIVATE=>'Private',self::PERMISSIONS_PUBLIC=>'Public');
    }
     
    public function getPermissionsLabel($permissions) {
      if ($permissions==self::PERMISSIONS_PUBLIC) {
        return 'Public';
      } else {
        return 'Private';        
      }
    }
}
?>