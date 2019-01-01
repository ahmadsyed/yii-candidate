<?php

/**
 * UploadForm class.
 */
use yii\web\UploadedFile;
class UploadForm extends CFormModel
{
	public $file;
	

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			//array('file', 'required'),
		);
	}
}