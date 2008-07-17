--TEST--
WSDL with multiple operations
--FILE--
<?php

$url = "http://localhost/services/wsdl_generation/multi_operation_service.php?wsdl";
$fp = fopen($url, 'r');
$result = fpassthru($fp);
fclose($fp);

echo $result;

?>
--EXPECT--
<?xml version="1.0" encoding="UTF-8"?>
<definitions xmlns="http://schemas.xmlsoap.org/wsdl/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:tns="http://www.wso2.org/php" xmlns:tnx="http://www.wso2.org/php/xsd" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/" xmlns:http="http://www.w3.org/2003/05/soap/bindings/HTTP/" targetNamespace="http://www.wso2.org/php"><types><xsd:schema elementFormDefault="qualified" targetNamespace="http://www.wso2.org/php/xsd" xmlns:ns0="http://labs.wso2.org/tests/simpleadd/types" xmlns:ns1="http://labs.wso2.org/tests/matrixadd" xmlns:ns2="http://labs.wso2.org/tests/matrixadd/types"><xsd:import namespace="http://labs.wso2.org/tests/matrixadd/types"/><xsd:import namespace="http://labs.wso2.org/tests/matrixadd"/><xsd:import namespace="http://labs.wso2.org/tests/simpleadd/types"/><xsd:element name="simple_add" type="ns0:simpleAdd"/><xsd:element name="simple_add_response" type="ns0:simpleAddResponse"/><xsd:element name="matrix_add" type="ns1:MatrixAdd"/><xsd:element name="matrix_add_response" type="ns2:MatrixAddResponse"/></xsd:schema><xsd:schema elementFormDefault="qualified" targetNamespace="http://labs.wso2.org/tests/simpleadd/types"><xsd:complexType name="simpleAdd"><xsd:sequence><xsd:element name="x" type="xsd:int"/><xsd:element name="y" type="xsd:int"/></xsd:sequence></xsd:complexType><xsd:complexType name="simpleAddResponse"><xsd:sequence><xsd:element name="return" type="xsd:int"/></xsd:sequence></xsd:complexType></xsd:schema><xsd:schema elementFormDefault="qualified" targetNamespace="http://labs.wso2.org/tests/matrixadd" xmlns:ns2="http://labs.wso2.org/tests/matrixadd/types" xmlns:ns3="http://labs.wso2.org/tests/matrixadd/types"><xsd:import namespace="http://labs.wso2.org/tests/matrixadd/types"/><xsd:complexType name="MatrixAdd"><xsd:sequence><xsd:element name="matrix1" type="ns2:Matrix"/><xsd:element name="matrix2" type="ns3:Matrix"/></xsd:sequence></xsd:complexType></xsd:schema><xsd:schema elementFormDefault="qualified" targetNamespace="http://labs.wso2.org/tests/matrixadd/types" xmlns:ns2="http://labs.wso2.org/tests/matrixadd/types" xmlns:ns4="http://labs.wso2.org/tests/matrixadd/types"><xsd:complexType name="Matrix"><xsd:sequence><xsd:element name="rows" maxOccurs="unbounded" type="ns2:MatrixRow"/></xsd:sequence></xsd:complexType><xsd:complexType name="MatrixRow"><xsd:sequence><xsd:element name="cols" maxOccurs="unbounded" type="xsd:int"/></xsd:sequence></xsd:complexType><xsd:complexType name="MatrixAddResponse"><xsd:sequence><xsd:element name="matrix" type="ns4:Matrix"/></xsd:sequence></xsd:complexType></xsd:schema></types><message name="simple_add"><part name="parameters" element="tnx:simple_add"/></message><message name="simple_addResponse"><part name="parameters" element="tnx:simple_add_response"/></message><message name="matrix_add"><part name="parameters" element="tnx:matrix_add"/></message><message name="matrix_addResponse"><part name="parameters" element="tnx:matrix_add_response"/></message><portType name="services_wsdl_generation_multi_operation_service.phpPortType"><operation name="simple_add"><input message="tns:simple_add"/><output message="tns:simple_addResponse"/></operation><operation name="matrix_add"><input message="tns:matrix_add"/><output message="tns:matrix_addResponse"/></operation></portType><binding name="services_wsdl_generation_multi_operation_service.phpSOAPBinding" type="tns:services_wsdl_generation_multi_operation_service.phpPortType"><soap:binding xmlns="http://schemas.xmlsoap.org/wsdl/soap/" transport="http://schemas.xmlsoap.org/soap/http" style="document"/><operation xmlns:default="http://schemas.xmlsoap.org/wsdl/soap/" name="simple_add"><soap:operation xmlns="http://schemas.xmlsoap.org/wsdl/soap/" soapAction="http://localhost/services/wsdl_generation/multi_operation_service.php/simple_add" style="document"/><input xmlns:default="http://schemas.xmlsoap.org/wsdl/soap/"><soap:body xmlns="http://schemas.xmlsoap.org/wsdl/soap/" use="literal"/></input><output xmlns:default="http://schemas.xmlsoap.org/wsdl/soap/"><soap:body xmlns="http://schemas.xmlsoap.org/wsdl/soap/" use="literal"/></output></operation><operation xmlns:default="http://schemas.xmlsoap.org/wsdl/soap/" name="matrix_add"><soap:operation xmlns="http://schemas.xmlsoap.org/wsdl/soap/" soapAction="http://localhost/services/wsdl_generation/multi_operation_service.php/matrix_add" style="document"/><input xmlns:default="http://schemas.xmlsoap.org/wsdl/soap/"><soap:body xmlns="http://schemas.xmlsoap.org/wsdl/soap/" use="literal"/></input><output xmlns:default="http://schemas.xmlsoap.org/wsdl/soap/"><soap:body xmlns="http://schemas.xmlsoap.org/wsdl/soap/" use="literal"/></output></operation></binding><service name="services_wsdl_generation_multi_operation_service.php"><port xmlns:default="http://schemas.xmlsoap.org/wsdl/soap/" name="services_wsdl_generation_multi_operation_service.phpSOAPPort_Http" binding="tns:services_wsdl_generation_multi_operation_service.phpSOAPBinding"><soap:address xmlns="http://schemas.xmlsoap.org/wsdl/soap/" location="http://localhost/services/wsdl_generation/multi_operation_service.php"/></port></service></definitions>
5265
