<?php
namespace Portfolio;

class Site {

	protected $title;
	protected $slug;
	protected $description;
	protected $category;

	protected $_storageDir;
	protected $_data;

	public function __construct(string $slug, string $storageDir) {
		$this->slug = $slug;
		$this->_storageDir = "$storageDir/$slug";
		$this->validate();
		$this->hydrate();
	}

	protected function hydrate() {
		$data = json_decode(file_get_contents("$this->_storageDir/info.json"), TRUE);
		if (!$data) throw new \RuntimeException("Invalid JSON for site $this->slug.");
		foreach ($data as $key => $val) {
			$this->$key = $val;
		}
	}

	protected function validate() {
		if (!is_readable("$this->_storageDir/info.json")) {
			throw new \RuntimeException("Missing info file $this->_storageDir/info.json for site $this->slug.");
		}
		if (!is_readable("$this->_storageDir/screenshot.jpg")) {
			throw new \RuntimeException("Missing screenshot $this->_storageDir/screenshot.jpg for site $this->slug.");
		}
	}

	public function get() {
		$values = [];
		foreach ($this as $key => $val) {
			if ($key[0] === '_') continue;
			$values[$key] = $val;
		}
		return $values;
	}

}
