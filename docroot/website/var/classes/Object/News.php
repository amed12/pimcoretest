<?php 

/** 
* Generated at: 2019-03-27T04:40:38+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
- Title [input]
- Content [textarea]
- Category [select]
- Creator [href]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\News\Listing getByTitle ($value, $limit = 0) 
* @method \Pimcore\Model\Object\News\Listing getByContent ($value, $limit = 0) 
* @method \Pimcore\Model\Object\News\Listing getByCategory ($value, $limit = 0) 
* @method \Pimcore\Model\Object\News\Listing getByCreator ($value, $limit = 0) 
*/

class News extends Concrete {

public $o_classId = 1;
public $o_className = "news";
public $Title;
public $Content;
public $Category;
public $Creator;


/**
* @param array $values
* @return \Pimcore\Model\Object\News
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Title - Title news
* @return string
*/
public function getTitle () {
	$preValue = $this->preGetValue("Title"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Title;
	return $data;
}

/**
* Set Title - Title news
* @param string $Title
* @return \Pimcore\Model\Object\News
*/
public function setTitle ($Title) {
	$this->Title = $Title;
	return $this;
}

/**
* Get Content - Content berita
* @return string
*/
public function getContent () {
	$preValue = $this->preGetValue("Content"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Content;
	return $data;
}

/**
* Set Content - Content berita
* @param string $Content
* @return \Pimcore\Model\Object\News
*/
public function setContent ($Content) {
	$this->Content = $Content;
	return $this;
}

/**
* Get Category - Category
* @return string
*/
public function getCategory () {
	$preValue = $this->preGetValue("Category"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Category;
	return $data;
}

/**
* Set Category - Category
* @param string $Category
* @return \Pimcore\Model\Object\News
*/
public function setCategory ($Category) {
	$this->Category = $Category;
	return $this;
}

/**
* Get Creator - Creator
* @return \Pimcore\Model\Object\creator
*/
public function getCreator () {
	$preValue = $this->preGetValue("Creator"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("Creator")->preGetData($this);
	return $data;
}

/**
* Set Creator - Creator
* @param \Pimcore\Model\Object\creator $Creator
* @return \Pimcore\Model\Object\News
*/
public function setCreator ($Creator) {
	$this->Creator = $this->getClass()->getFieldDefinition("Creator")->preSetData($this, $Creator);
	return $this;
}

protected static $_relationFields = array (
  'Creator' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

