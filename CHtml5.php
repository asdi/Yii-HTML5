<?php
/**
 * CHtml5
 *
 * This class is exactly like CHtml, only makes inputField public for easier custom HTML5 input fields
 *
 * @author    patrick <patrick@mimbee.nl>
 */
class CHtml5 extends CHtml
{
	/**
	 * Generates an input HTML tag.
	 * @see CHtml::inputField();
	 */
	public static function inputField($type,$name,$value,$htmlOptions)
	{
		return parent::inputField($type, $name, $value, $htmlOptions);
	}
}
