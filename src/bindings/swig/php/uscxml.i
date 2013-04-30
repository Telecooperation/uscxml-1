%module(directors="1", allprotected="1") uscxmlNativePHP

// import swig typemaps
%include "stl.i"

// macros from cmake
%import "uscxml/config.h"

// disable warning related to unknown base class
#pragma SWIG nowarn=401

%rename(c_array) array;
%rename(equals) operator==; 
%rename(isValid) operator bool;
%ignore operator!=;
%ignore operator<;
%ignore operator=;

//**************************************************
// This ends up in the generated wrapper code
//**************************************************

%{
#include "../../../uscxml/Message.h"
#include "../../../uscxml/Interpreter.h"
#include "../../../uscxml/concurrency/BlockingQueue.h"

using namespace uscxml;

%}

// Add this to the very top of the generated wrapper code

%insert("begin") %{
void*** tsrm_ls;
%}

%feature("director") uscxml::InterpreterMonitor;

%ignore uscxml::NumAttr;
%ignore uscxml::SCXMLParser;
%ignore uscxml::InterpreterImpl;

//***********************************************
// Beautify interpreter class
//***********************************************

%ignore uscxml::Interpreter::isAtomic(Arabica::DOM::Node<std::string>);
%extend uscxml::Interpreter {
	bool isAtomic(const std::string stateId) {
		Arabica::DOM::Node<std::string> state = self->getState(stateId);
		return self->isAtomic(state);
	}
}

//***********************************************
// Parse the header file to generate wrappers
//***********************************************

%include "../../../uscxml/Message.h"
%include "../../../uscxml/Interpreter.h"
%include "../../../uscxml/concurrency/BlockingQueue.h"

%template(ParentQueue) uscxml::concurrency::BlockingQueue<uscxml::SendRequest>;
%template(NameList) std::map<std::string, std::string>;
%template(ParamList) std::vector<std::string>;
%template(Params) std::map<std::string, std::vector<std::string> >;
