<?php 

/** 
* Generated at: 2019-03-27T04:39:32+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
- Name [input]
- PassCreator [password]
- Alamat [textarea]
*/ 

namespace Pimcore\Model\Object;



/**
* @method \Pimcore\Model\Object\Creator\Listing getByName ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Creator\Listing getByPassCreator ($value, $limit = 0) 
* @method \Pimcore\Model\Object\Creator\Listing getByAlamat ($value, $limit = 0) 
*/

class Creator extends Concrete {

public $o_classId = 2;
public $o_className = "creator";
public $Name;
public $PassCreator;
public $Alamat;


/**
* @param array $values
* @return \Pimcore\Model\Object\Creator
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("Name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Name;
	return $data;
}

/**
* Set Name - Name
* @param string $Name
* @return \Pimcore\Model\Object\Creator
*/
public function setName ($Name) {
	$this->Name = $Name;
	return $this;
}

/**
* Get PassCreator - PassCreator
* @return string
*/
public function getPassCreator () {
	$preValue = $this->preGetValue("PassCreator"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->PassCreator;
	return $data;
}

/**
* Set PassCreator - PassCreator
* @param string $PassCreator
* @return \Pimcore\Model\Object\Creator
*/
public function setPassCreator ($PassCreator) {
	$this->PassCreator = $PassCreator;
	return $this;
}

/**
* Get Alamat - Alamat
* @return string
*/
public function getAlamat () {
	$preValue = $this->preGetValue("Alamat"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Alamat;
	return $data;
}

/**
* Set Alamat - Alamat
* @param string $Alamat
* @return \Pimcore\Model\Object\Creator
*/
public function setAlamat ($Alamat) {
	$this->Alamat = $Alamat;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

