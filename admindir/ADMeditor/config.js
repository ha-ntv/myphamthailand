/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	    config.filebrowserBrowseUrl = 'ADMeditor/kcfinder/browse.php';

        config.filebrowserImageBrowseUrl = 'ADMeditor/kcfinder/browse.php?type=images';

        config.filebrowserFlashBrowseUrl = 'ADMeditor/kcfinder/browse.php?type=Flash';

        config.filebrowserUploadUrl = 'ADMeditor/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

        config.filebrowserImageUploadUrl = 'ADMeditor/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

        config.filebrowserFlashUploadUrl = 'ADMeditor/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
        
        

};
CKEDITOR.config.entities = false;