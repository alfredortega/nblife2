<?php

/**
*Secure class performs the required security functions
*for the application. It does encyrption, decryption, hashing
*and password checking.
*
*/
class Secure {

  public $salt = "R2{=7f%AY{zQ0GEAD?]1_651!,a@N`Y-{A?gYq-vh~Ds+|?6hk!|L:Nh|7%_ePa(";
  public $key =  "D6T#k]gZjeM?Jy!s";

    public function Encrypt($string){
        $s = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->key, $string, MCRYPT_MODE_ECB)));
        return $s;
    }

    public function Decrypt($string){
        $s = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->key, base64_decode($string),MCRYPT_MODE_ECB));
        return $s;
    }

    public function Hashword($string){
        $s = crypt($string, '$1$'.$this->salt.'$');
        return $s;
    }

    public function VerifyPassword($password, $hashedPW){
        //1 = true, 0 = false;
        $hp = $this->Hashword($password);
        $r = $hp===$hashedPW;
        $retval;
        if($r!=1){
            $r = 0;
        }
        return $r;
    }
}
?>