<?php 
namespace App\AuthTraits;
use Illuminate\Support\Facades\Auth;
use App\TinTuc;
Trait CanManageTrait{
	public function CanManagePost(TinTuc $tintuc)
	{
		if(Auth::user()->quyen == 0)
			return false;
		if(Auth::user()->quyen == 4 && Auth::user()->id != $tintuc->idUser);
			return false;
		return true;	
	}
	public function IsModOrAdmin()
	{
		if(Auth::user()->quyen == 1 || Auth::user()->quyen == 2)
			return true;
		return false;
	}
	public function IsAdmin()
	{
		if(Auth::user()->quyen == 1)
			return true;
		return false;
	}
	public function IsAuthor()
	{
		if(Auth::user()->quyen > 0)
			return true;
		return false;
	}
 }
