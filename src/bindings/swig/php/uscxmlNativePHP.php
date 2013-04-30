<?php

/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 2.0.9
 * 
 * This file is not intended to be easily readable and contains a number of 
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG 
 * interface file instead. 
 * ----------------------------------------------------------------------------- */

// Try to load our extension if it's not already loaded.
if (!extension_loaded('uscxmlNativePHP')) {
  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if (!dl('php_uscxmlNativePHP.dll')) return;
  } else {
    // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
    if (PHP_SHLIB_SUFFIX === 'dylib') {
      if (!dl('uscxmlNativePHP.so')) return;
    } else {
      if (!dl('uscxmlNativePHP.'.PHP_SHLIB_SUFFIX)) return;
    }
  }
}



abstract class uscxmlNativePHP {
	const CAN_NOTHING = 0;

	const CAN_BASIC_HTTP = 1;

	const CAN_GENERIC_HTTP = 2;
}

/* PHP Proxy Classes */
class Data {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'Data_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if (function_exists('Data_'.$var.'_set')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		$func = 'Data_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	const VERBATIM = 0;

	const INTERPRETED = Data_INTERPRETED;

	function __construct($atom__or_dom=null,$type_=null) {
		if (is_resource($atom__or_dom) && get_resource_type($atom__or_dom) === '_p_uscxml__Data') {
			$this->_cPtr=$atom__or_dom;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Data(); break;
		case 1: $this->_cPtr=new_Data($atom__or_dom); break;
		default: $this->_cPtr=new_Data($atom__or_dom,$type_);
		}
	}

	function isValid() {
		return Data_isValid($this->_cPtr);
	}

	static function fromJSON($jsonString) {
		$r=Data_fromJSON($jsonString);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Data($r);
		}
		return $r;
	}

	static function fromXML($xmlString) {
		$r=Data_fromXML($xmlString);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Data($r);
		}
		return $r;
	}

	function toDocument() {
		return Data_toDocument($this->_cPtr);
	}

	function toXMLString() {
		return Data_toXMLString($this->_cPtr);
	}

	function getCompund() {
		return Data_getCompund($this->_cPtr);
	}

	function setCompound($compound) {
		Data_setCompound($this->_cPtr,$compound);
	}

	function getArray() {
		return Data_getArray($this->_cPtr);
	}

	function setArray($array) {
		Data_setArray($this->_cPtr,$array);
	}

	function getAtom() {
		return Data_getAtom($this->_cPtr);
	}

	function setAtom($atom) {
		Data_setAtom($this->_cPtr,$atom);
	}

	function getType() {
		return Data_getType($this->_cPtr);
	}

	function setType($type) {
		Data_setType($this->_cPtr,$type);
	}
}

class Event {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'Event_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if (function_exists('Event_'.$var.'_set')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'data') return new Data(Event_data_get($this->_cPtr));
		if ($var === 'namelist') return new NameList(Event_namelist_get($this->_cPtr));
		$func = 'Event_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	const INTERNAL = 1;

	const EXTERNAL = 2;

	const PLATFORM = 3;

	function __construct($name_or_xmlString=null,$type=null) {
		if (is_resource($name_or_xmlString) && get_resource_type($name_or_xmlString) === '_p_uscxml__Event') {
			$this->_cPtr=$name_or_xmlString;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Event(); break;
		case 1: $this->_cPtr=new_Event($name_or_xmlString); break;
		default: $this->_cPtr=new_Event($name_or_xmlString,$type);
		}
	}

	function getName() {
		return Event_getName($this->_cPtr);
	}

	function setName($name) {
		Event_setName($this->_cPtr,$name);
	}

	function getType() {
		return Event_getType($this->_cPtr);
	}

	function setType($type) {
		Event_setType($this->_cPtr,$type);
	}

	function getOrigin() {
		return Event_getOrigin($this->_cPtr);
	}

	function setOrigin($origin) {
		Event_setOrigin($this->_cPtr,$origin);
	}

	function getOriginType() {
		return Event_getOriginType($this->_cPtr);
	}

	function setOriginType($originType) {
		Event_setOriginType($this->_cPtr,$originType);
	}

	function getDOM() {
		return Event_getDOM($this->_cPtr);
	}

	function setDOM($dom) {
		Event_setDOM($this->_cPtr,$dom);
	}

	function getFirstDOMElement() {
		return Event_getFirstDOMElement($this->_cPtr);
	}

	function getStrippedDOM() {
		return Event_getStrippedDOM($this->_cPtr);
	}

	function getRaw() {
		return Event_getRaw($this->_cPtr);
	}

	function setRaw($raw) {
		Event_setRaw($this->_cPtr,$raw);
	}

	function getContent() {
		return Event_getContent($this->_cPtr);
	}

	function setContent($content) {
		Event_setContent($this->_cPtr,$content);
	}

	function getSendId() {
		return Event_getSendId($this->_cPtr);
	}

	function setSendId($sendId) {
		Event_setSendId($this->_cPtr,$sendId);
	}

	function getInvokeId() {
		return Event_getInvokeId($this->_cPtr);
	}

	function setInvokeId($invokeId) {
		Event_setInvokeId($this->_cPtr,$invokeId);
	}

	function getData() {
		$r=Event_getData($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Data($r);
		}
		return $r;
	}

	function setData($data) {
		Event_setData($this->_cPtr,$data);
	}

	function initContent($content) {
		Event_initContent($this->_cPtr,$content);
	}

	static function fromXML($xmlString) {
		$r=Event_fromXML($xmlString);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Event($r);
		}
		return $r;
	}

	function toDocument() {
		return Event_toDocument($this->_cPtr);
	}

	function toXMLString() {
		return Event_toXMLString($this->_cPtr);
	}

	function getNameList() {
		$r=Event_getNameList($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new NameList($r);
		}
		return $r;
	}

	function getNameListKeys() {
		$r=Event_getNameListKeys($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ParamList($r);
		}
		return $r;
	}

	function getParams() {
		$r=Event_getParams($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Params($r);
		}
		return $r;
	}

	function getParamKeys() {
		$r=Event_getParamKeys($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ParamList($r);
		}
		return $r;
	}
}

class InvokeRequest extends Event {
	public $_cPtr=null;

	function __set($var,$value) {
		$func = 'InvokeRequest_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		Event::__set($var,$value);
	}

	function __isset($var) {
		if (function_exists('InvokeRequest_'.$var.'_set')) return true;
		if ($var === 'thisown') return true;
		return Event::__isset($var);
	}

	function __get($var) {
		$func = 'InvokeRequest_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return Event::__get($var);
	}

	function __construct($event=null) {
		if (is_resource($event) && get_resource_type($event) === '_p_uscxml__InvokeRequest') {
			$this->_cPtr=$event;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_InvokeRequest(); break;
		default: $this->_cPtr=new_InvokeRequest($event);
		}
	}

	function getType() {
		return InvokeRequest_getType($this->_cPtr);
	}

	function setType($type) {
		InvokeRequest_setType($this->_cPtr,$type);
	}

	function getSource() {
		return InvokeRequest_getSource($this->_cPtr);
	}

	function setSource($src) {
		InvokeRequest_setSource($this->_cPtr,$src);
	}

	function isAutoForwarded() {
		return InvokeRequest_isAutoForwarded($this->_cPtr);
	}

	function setAutoForwarded($autoForward) {
		InvokeRequest_setAutoForwarded($this->_cPtr,$autoForward);
	}

	static function fromXML($xmlString) {
		$r=InvokeRequest_fromXML($xmlString);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new InvokeRequest($r);
		}
		return $r;
	}

	function toDocument() {
		return InvokeRequest_toDocument($this->_cPtr);
	}

	function toXMLString() {
		return InvokeRequest_toXMLString($this->_cPtr);
	}
}

class SendRequest extends Event {
	public $_cPtr=null;

	function __set($var,$value) {
		$func = 'SendRequest_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		Event::__set($var,$value);
	}

	function __isset($var) {
		if (function_exists('SendRequest_'.$var.'_set')) return true;
		if ($var === 'thisown') return true;
		return Event::__isset($var);
	}

	function __get($var) {
		$func = 'SendRequest_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return Event::__get($var);
	}

	function __construct($event=null) {
		if (is_resource($event) && get_resource_type($event) === '_p_uscxml__SendRequest') {
			$this->_cPtr=$event;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_SendRequest(); break;
		default: $this->_cPtr=new_SendRequest($event);
		}
	}

	function getTarget() {
		return SendRequest_getTarget($this->_cPtr);
	}

	function setTarget($target) {
		SendRequest_setTarget($this->_cPtr,$target);
	}

	function getType() {
		return SendRequest_getType($this->_cPtr);
	}

	function setType($type) {
		SendRequest_setType($this->_cPtr,$type);
	}

	function getDelayMs() {
		return SendRequest_getDelayMs($this->_cPtr);
	}

	function setDelayMs($delayMs) {
		SendRequest_setDelayMs($this->_cPtr,$delayMs);
	}

	static function fromXML($xmlString) {
		$r=SendRequest_fromXML($xmlString);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SendRequest($r);
		}
		return $r;
	}

	function toDocument() {
		return SendRequest_toDocument($this->_cPtr);
	}

	function toXMLString() {
		return SendRequest_toXMLString($this->_cPtr);
	}
}

class Interpreter {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	static function fromDOM($dom) {
		$r=Interpreter_fromDOM($dom);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Interpreter($r);
		}
		return $r;
	}

	static function fromXML($xml) {
		$r=Interpreter_fromXML($xml);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Interpreter($r);
		}
		return $r;
	}

	static function fromURI($uri) {
		$r=Interpreter_fromURI($uri);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Interpreter($r);
		}
		return $r;
	}

	static function fromInputSource($source) {
		$r=Interpreter_fromInputSource($source);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Interpreter($r);
		}
		return $r;
	}

	function __construct($impl_or_other=null) {
		if (is_resource($impl_or_other) && get_resource_type($impl_or_other) === '_p_uscxml__Interpreter') {
			$this->_cPtr=$impl_or_other;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Interpreter(); break;
		default: $this->_cPtr=new_Interpreter($impl_or_other);
		}
	}

	function isValid() {
		return Interpreter_isValid($this->_cPtr);
	}

	function equals($other) {
		return Interpreter_equals($this->_cPtr,$other);
	}

	function start() {
		Interpreter_start($this->_cPtr);
	}

	function join() {
		Interpreter_join($this->_cPtr);
	}

	function isRunning() {
		return Interpreter_isRunning($this->_cPtr);
	}

	function interpret() {
		Interpreter_interpret($this->_cPtr);
	}

	function addMonitor($monitor) {
		Interpreter_addMonitor($this->_cPtr,$monitor);
	}

	function removeMonitor($monitor) {
		Interpreter_removeMonitor($this->_cPtr,$monitor);
	}

	function setBaseURI($baseURI) {
		Interpreter_setBaseURI($this->_cPtr,$baseURI);
	}

	function getBaseURI() {
		return Interpreter_getBaseURI($this->_cPtr);
	}

	function setCmdLineOptions($argc,$argv) {
		Interpreter_setCmdLineOptions($this->_cPtr,$argc,$argv);
	}

	function getCmdLineOptions() {
		$r=Interpreter_getCmdLineOptions($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Data($r);
		}
		return $r;
	}

	function getHTTPServlet() {
		return Interpreter_getHTTPServlet($this->_cPtr);
	}

	function getDataModel() {
		return Interpreter_getDataModel($this->_cPtr);
	}

	function setParentQueue($parentQueue) {
		Interpreter_setParentQueue($this->_cPtr,$parentQueue);
	}

	function getXPathPrefix() {
		return Interpreter_getXPathPrefix($this->_cPtr);
	}

	function getXMLPrefix() {
		return Interpreter_getXMLPrefix($this->_cPtr);
	}

	function getNSContext() {
		return Interpreter_getNSContext($this->_cPtr);
	}

	function getXMLPrefixForNS($ns) {
		return Interpreter_getXMLPrefixForNS($this->_cPtr,$ns);
	}

	function receiveInternal($event) {
		Interpreter_receiveInternal($this->_cPtr,$event);
	}

	function receive($event,$toFront=false) {
		Interpreter_receive($this->_cPtr,$event,$toFront);
	}

	function getCurrentEvent() {
		$r=Interpreter_getCurrentEvent($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new Event($r);
		}
		return $r;
	}

	function getConfiguration() {
		$r=Interpreter_getConfiguration($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ParamList($r);
		}
		return $r;
	}

	function setConfiguration($states) {
		Interpreter_setConfiguration($this->_cPtr,$states);
	}

	function setInvokeRequest($req) {
		Interpreter_setInvokeRequest($this->_cPtr,$req);
	}

	function getState($stateId) {
		return Interpreter_getState($this->_cPtr,$stateId);
	}

	function getStates($stateIds) {
		return Interpreter_getStates($this->_cPtr,$stateIds);
	}

	function getDocument() {
		return Interpreter_getDocument($this->_cPtr);
	}

	function setCapabilities($capabilities) {
		Interpreter_setCapabilities($this->_cPtr,$capabilities);
	}

	function setName($name) {
		Interpreter_setName($this->_cPtr,$name);
	}

	function getName() {
		return Interpreter_getName($this->_cPtr);
	}

	function getSessionId() {
		return Interpreter_getSessionId($this->_cPtr);
	}

	function getIOProcessors() {
		return Interpreter_getIOProcessors($this->_cPtr);
	}

	function getInvokers() {
		return Interpreter_getInvokers($this->_cPtr);
	}

	function runOnMainThread($fps,$blocking=true) {
		return Interpreter_runOnMainThread($this->_cPtr,$fps,$blocking);
	}

	static function isMember($node,$set) {
		return Interpreter_isMember($node,$set);
	}

	function dump() {
		Interpreter_dump($this->_cPtr);
	}

	function hasLegalConfiguration() {
		return Interpreter_hasLegalConfiguration($this->_cPtr);
	}

	static function isState($state) {
		return Interpreter_isState($state);
	}

	static function isPseudoState($state) {
		return Interpreter_isPseudoState($state);
	}

	static function isTransitionTarget($elem) {
		return Interpreter_isTransitionTarget($elem);
	}

	static function isTargetless($transition) {
		return Interpreter_isTargetless($transition);
	}

	static function isFinal($state) {
		return Interpreter_isFinal($state);
	}

	static function isHistory($state) {
		return Interpreter_isHistory($state);
	}

	static function isParallel($state) {
		return Interpreter_isParallel($state);
	}

	static function isCompound($state) {
		return Interpreter_isCompound($state);
	}

	static function isDescendant($s1,$s2) {
		return Interpreter_isDescendant($s1,$s2);
	}

	static function tokenizeIdRefs($idRefs) {
		$r=Interpreter_tokenizeIdRefs($idRefs);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ParamList($r);
		}
		return $r;
	}

	static function spaceNormalize($text) {
		return Interpreter_spaceNormalize($text);
	}

	function isInitial($state) {
		return Interpreter_isInitial($this->_cPtr,$state);
	}

	function getInitialStates($state=null) {
		switch (func_num_args()) {
		case 0: $r=Interpreter_getInitialStates($this->_cPtr); break;
		default: $r=Interpreter_getInitialStates($this->_cPtr,$state);
		}
		return $r;
	}

	static function getChildStates($state) {
		return Interpreter_getChildStates($state);
	}

	static function getParentState($element) {
		return Interpreter_getParentState($element);
	}

	static function getAncestorElement($node,$tagName) {
		return Interpreter_getAncestorElement($node,$tagName);
	}

	function getTargetStates($transition) {
		return Interpreter_getTargetStates($this->_cPtr,$transition);
	}

	function getSourceState($transition) {
		return Interpreter_getSourceState($this->_cPtr,$transition);
	}

	static function filterChildElements($tagname_or_tagName,$node_or_nodeSet) {
		return Interpreter_filterChildElements($tagname_or_tagName,$node_or_nodeSet);
	}

	function findLCCA($states) {
		return Interpreter_findLCCA($this->_cPtr,$states);
	}

	function getProperAncestors($s1,$s2) {
		return Interpreter_getProperAncestors($this->_cPtr,$s1,$s2);
	}

	static function getUUID() {
		return Interpreter_getUUID();
	}

	function isAtomic($stateId=null) {
		switch (func_num_args()) {
		case 0: $r=Interpreter_isAtomic($this->_cPtr); break;
		default: $r=Interpreter_isAtomic($this->_cPtr,$stateId);
		}
		return $r;
	}
}

class InterpreterMonitor {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function onStableConfiguration($interpreter) {
		InterpreterMonitor_onStableConfiguration($this->_cPtr,$interpreter);
	}

	function beforeCompletion($interpreter) {
		InterpreterMonitor_beforeCompletion($this->_cPtr,$interpreter);
	}

	function afterCompletion($interpreter) {
		InterpreterMonitor_afterCompletion($this->_cPtr,$interpreter);
	}

	function beforeMicroStep($interpreter) {
		InterpreterMonitor_beforeMicroStep($this->_cPtr,$interpreter);
	}

	function beforeTakingTransitions($interpreter,$transitions) {
		InterpreterMonitor_beforeTakingTransitions($this->_cPtr,$interpreter,$transitions);
	}

	function beforeEnteringStates($interpreter,$statesToEnter) {
		InterpreterMonitor_beforeEnteringStates($this->_cPtr,$interpreter,$statesToEnter);
	}

	function afterEnteringStates($interpreter) {
		InterpreterMonitor_afterEnteringStates($this->_cPtr,$interpreter);
	}

	function beforeExitingStates($interpreter,$statesToExit) {
		InterpreterMonitor_beforeExitingStates($this->_cPtr,$interpreter,$statesToExit);
	}

	function afterExitingStates($interpreter) {
		InterpreterMonitor_afterExitingStates($this->_cPtr,$interpreter);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_uscxml__InterpreterMonitor') {
			$this->_cPtr=$res;
			return;
		}
		if (get_class($this) === 'InterpreterMonitor') {
			$_this = null;
		} else {
			$_this = $this;
		}
		$this->_cPtr=new_InterpreterMonitor($_this);
	}
}

class ParentQueue {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_uscxml__concurrency__BlockingQueueT_uscxml__SendRequest_t') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_ParentQueue();
	}

	function push($elem) {
		ParentQueue_push($this->_cPtr,$elem);
	}

	function push_front($elem) {
		ParentQueue_push_front($this->_cPtr,$elem);
	}

	function pop() {
		$r=ParentQueue_pop($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new SendRequest($r);
		}
		return $r;
	}

	function isEmpty() {
		return ParentQueue_isEmpty($this->_cPtr);
	}
}

class NameList {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($arg1=null) {
		if (is_resource($arg1) && get_resource_type($arg1) === '_p_std__mapT_std__string_std__string_t') {
			$this->_cPtr=$arg1;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_NameList(); break;
		default: $this->_cPtr=new_NameList($arg1);
		}
	}

	function size() {
		return NameList_size($this->_cPtr);
	}

	function clear() {
		NameList_clear($this->_cPtr);
	}

	function get($key) {
		return NameList_get($this->_cPtr,$key);
	}

	function set($key,$x) {
		NameList_set($this->_cPtr,$key,$x);
	}

	function del($key) {
		NameList_del($this->_cPtr,$key);
	}

	function has_key($key) {
		return NameList_has_key($this->_cPtr,$key);
	}

	function is_empty() {
		return NameList_is_empty($this->_cPtr);
	}
}

class ParamList {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($n=null) {
		if (is_resource($n) && get_resource_type($n) === '_p_std__vectorT_std__string_t') {
			$this->_cPtr=$n;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_ParamList(); break;
		default: $this->_cPtr=new_ParamList($n);
		}
	}

	function size() {
		return ParamList_size($this->_cPtr);
	}

	function capacity() {
		return ParamList_capacity($this->_cPtr);
	}

	function reserve($n) {
		ParamList_reserve($this->_cPtr,$n);
	}

	function clear() {
		ParamList_clear($this->_cPtr);
	}

	function push($x) {
		ParamList_push($this->_cPtr,$x);
	}

	function is_empty() {
		return ParamList_is_empty($this->_cPtr);
	}

	function pop() {
		return ParamList_pop($this->_cPtr);
	}

	function get($i) {
		return ParamList_get($this->_cPtr,$i);
	}

	function set($i,$val) {
		ParamList_set($this->_cPtr,$i,$val);
	}
}

class Params {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_uscxmlNativePHP_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __construct($arg1=null) {
		if (is_resource($arg1) && get_resource_type($arg1) === '_p_std__mapT_std__string_std__vectorT_std__string_t_t') {
			$this->_cPtr=$arg1;
			return;
		}
		switch (func_num_args()) {
		case 0: $this->_cPtr=new_Params(); break;
		default: $this->_cPtr=new_Params($arg1);
		}
	}

	function size() {
		return Params_size($this->_cPtr);
	}

	function clear() {
		Params_clear($this->_cPtr);
	}

	function get($key) {
		$r=Params_get($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new ParamList($r);
		}
		return $r;
	}

	function set($key,$x) {
		Params_set($this->_cPtr,$key,$x);
	}

	function del($key) {
		Params_del($this->_cPtr,$key);
	}

	function has_key($key) {
		return Params_has_key($this->_cPtr,$key);
	}

	function is_empty() {
		return Params_is_empty($this->_cPtr);
	}
}


?>
