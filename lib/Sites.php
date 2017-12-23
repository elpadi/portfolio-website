<?php
namespace Portfolio;

class Sites extends \ArrayIterator {

	public function fetch(string $storageDir) {
		$dirs = glob("$storageDir/*");
		shuffle($dirs);
		foreach ($dirs as $dir) {
			$slug = basename($dir);
			$this->append(new Site($slug, $storageDir));
		}
	}

}
