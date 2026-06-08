<?php

declare(strict_types=1);

/*
 * Inhaltselement "Zitat" – Zitattext, Autor und optionales Bild
 * (Bildoptionen wie beim Text-Element über die addImage-Subpalette des Cores).
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['quote'] = '{type_legend},type,headline;{text_legend},quote_text,quote_author;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['quote_text'] = array(
	'inputType' => 'textarea',
	'eval'      => array('mandatory' => true, 'basicEntities' => true, 'tl_class' => 'clr'),
	'sql'       => "text NULL",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['quote_author'] = array(
	'inputType' => 'text',
	'eval'      => array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'       => "varchar(255) NOT NULL default ''",
);
