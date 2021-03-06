<?php

/*********************************************************************
* Extension configuration file for ext "libconnect".
*
* Generated by ext 16-11-2017 13:31 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'libconnect',
  'description' => 'Diese Extension ist von Avonis im Auftrag der Staats- und Universitaetsbibliothek Hamburg entwickelt worden. Mit ihr lassen sich Ergebnisse aus den Informationssystemen EZB und DBIS der Universitaet Regensburg direkt in das TYPO3-System einbinden.',
  'category' => 'plugin',
  'author' => 'Avonis New Media / SUB Hamburg',
  'author_email' => 'torsten.witt@sub.uni-hamburg.de',
  'author_company' => '',
  'module' => '',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '5.2.2',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.0.0-8.7.99',
      'cms' => '',
      'extbase' => '',
      'fluid' => '',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'Sub\\Libconnect\\' => 'Classes/',
    ),
  ),
  '_md5_values_when_last_written' => 'a:0:{}',
  'comment' => 'EZB: Detail view: field "Preistyp Anmerkung" fixed. List view: current list fixed from h2 to h3 DBIS: ISBN/ISSN added.',
  'user' => 'subunihhdevteam',
);

?>
