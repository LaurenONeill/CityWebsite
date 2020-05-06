<?php
//===================================================================================
// This script is used to save an XML generated file.
//===================================================================================
// Author : Miro
// Dated : 07/11/2019
// Version : 1.00
//===================================================================================
// Read the variables being posted from the form.
// simliar code to calling the reading of the TXT file can be used to call this PHP script.
// your variable that your are passing should look something like this:
// USAGE :
// xml_writer.php?xmldatastring='YOUR XML FILE LAYOUT'

 $sXMLDataString  	= $_REQUEST["xmldatastring"];
// with the FTP client , create the XML folder.
//



 $cFileExtName      = time();
 $cXMLdatadir 		= "xml/";
 $XMLFileName 		= $cXMLdatadir."gps_".date("Ydm")."_".$cFileExtName.'.xml';

 $XMLFileHandle = fopen($XMLFileName,'w'); // or echo("Unable to create price export file - ".$prcFileName);
 fwrite($XMLFileHandle, $sXMLDataString);
 fclose($XMLFileHandle);

echo json_encode($XMLFileNames);
/*
// HOW TO CREATE AN XML File
////////////////////////////////
// You dont need any special ability to write an XML formatted file, its a PLAIN file that contains XML Tags
// so declare a string Variable, and then keep appending string information to the end...

// $myXML ='<?xml version="1.0" encoding="UTF-8"?>';
// $myXML .= '<GPS_location>';
// $myXML .= '<Longitude>'.$LongValue.'</Longitude>'; //
// $myXML .= '<Latitude>'.$LatValue.'</Latitude>';    //
// $myXML .= '<TimeStamp>'.$TimeStampedValue.'</TimeStamp>';
// $myXML .= '</GPS_location>';
*/
?>