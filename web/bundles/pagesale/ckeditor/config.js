/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	config.filebrowserBrowseUrl = "http://local.symfony/bundles/pagesale/ckfinder/ckfinder.html";
	config.filebrowserImageBrowseUrl = "http://local.symfony/bundles/pagesale/ckfinder/ckfinder/ckfinder.html?type=Images";
	config.filebrowserFlashBrowseUrl = "http://local.symfony/bundles/pagesale/ckfinder/ckfinder/ckfinder.html?type=Flash";
	config.filebrowserUploadUrl = "http://local.symfony/bundles/pagesale/ckfinder/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
	config.filebrowserImageUploadUrl = "http://local.symfony/bundles/pagesale/ckfinder/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
	config.filebrowserFlashUploadUrl = "http://local.symfony/bundles/pagesale/ckfinder/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";
	
	
	
};
