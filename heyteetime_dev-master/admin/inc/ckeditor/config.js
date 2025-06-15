/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'kr';
	// config.uiColor = '#AADC6E';

	config.extraPlugins = 'videodetector';

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbar = [
	/*
        ['Font', 'FontSize'],

        ['BGColor', 'TextColor' ],

        ['Bold', 'Italic', 'Strike', 'Superscript', 'Subscript', 'Underline', 'RemoveFormat'],   

        ['BidiLtr', 'BidiRtl'],

        '/',

        ['Image', 'VideoDetector','SpecialChar', 'Smiley'],

        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],

        ['Blockquote', 'NumberedList', 'BulletedList'],

        ['Link', 'Unlink'],

        ['Source'],

        ['Undo', 'Redo']
	*/
		
     



       ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],

		['Preview','-','Templates', 'Cut','Copy','-', 'Scayt','-','Source'],

    

       '/',



       ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],



        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],



        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],



        ['Link','Unlink','Anchor'],

		 '/',

       ['Image','Table','HorizontalRule','Smiley','SpecialChar'],



     


        ['Styles','Format','Font','FontSize'],



        ['TextColor','BGColor'],
		
		



	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	//config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	//config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

	
	config.filebrowserUploadMethod = 'form';

	config.filebrowserImageUploadUrl = '/inc/ckeditor/upload.php';
};
