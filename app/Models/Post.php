<?php  

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModuleNotFoundException;


namespace App\Models;

class Post

{
	public function all()

	{

		return File
	}

	public static function find($slug)

	{

	    if (! file_exists($path = resource_path("posts/{$slug}.html"))){

	        throw new ModuleNotFoundException();
	        ;
	    }

	    return cache()->remember("posts.{$slug}", 1200, fn () => file_get_contents($path));
	}


}