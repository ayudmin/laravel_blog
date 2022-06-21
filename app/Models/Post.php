<?php  

namespace App\Models;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModuleNotFoundException;



class Post

{
	public static function all()

	{

		$files =  File::files(resource_path("posts/"));

		return array_map(fn ($file) => $file ->getContents(), $files);
	}

	public static function find($slug)

	{

	    if (! file_exists($path = resource_path("posts/{$slug}.html"))){

	        throw new ModuleNotFoundException();
	        
	    }

	    return cache()->remember("posts.{$slug}", 1200, fn () => file_get_contents($path));
	}


}