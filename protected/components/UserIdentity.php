<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $_id;
        private $_name;
        private $_admin;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
                $user = UsersNew::model()->findByAttributes(array('email'=>$this->username));
//                pr(md5($this->password), false);
//                pr($user->password);
                if ($user===null) {
                        $this->errorCode=self::ERROR_USERNAME_INVALID;
//                } else if ($user->password !== SHA1($this->password) ) { 
                } else if ($user->password != $this->password ) { 
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
                }else if ($user->is_verified != 1 ) { 
                        $this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
                } else { // Okay!
                    $this->_id=$user->id;
                    $this->_name=$user->full_name;
                    $this->setState('admin',$user->role);
                    $this->setState('name',$user->full_name);
                    $this->errorCode=self::ERROR_NONE;
                }
                
		return !$this->errorCode;
	}
        
        public function getId()
        {
            return $this->_id;
        }
        public function getAdmin()
        {
            return $this->_admin;
        }
}