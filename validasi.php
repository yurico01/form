<?php
declare(strict_type=1);
class validasi
{
	public function validasiString(?string $data):bool
	{
		if($data == null){
			return false;
		}
		if (trim($data)===''){
			return false;
		}
		return true;
	}
}
