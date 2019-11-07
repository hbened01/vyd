<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class IndexFrom extends CFormModel
{
	
	
	public function rules()
	{
		
	}

	public function attributeLabels()
	{
		
	}
        
        public function behaviors()
        {
            return array(
                'galleria' => array(
                    'class' => 'application.extensions.galleria.GalleriaBehavior',
                    'image' => 'wifiparatodos', //required, will be image name of src
                    'imagePrefix' => 'id',//optional, not required
                    'description' => 'description',//optional, not required
                    'title' => 'name',//optional, not required
                ),
            );
        }
        
}