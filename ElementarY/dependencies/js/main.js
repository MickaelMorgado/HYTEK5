/* CKEDITOR */

	var ckEditorID;
	ckEditorID = 'ckeExample';

	function fnConsolePrint(){  //console.log($('#' + ckEditorID).val());
		alert(CKEDITOR.instances[ckEditorID].getData());
	}

	CKEDITOR.config.forcePasteAsPlainText = true;
	CKEDITOR.replace( ckEditorID,{
		toolbar:[
		{ items : [ 'Bold','Italic','Underline','Strike','-','RemoveFormat' ] },
		{ items : [ 'Format'] },
		{ items : [ 'Link','Unlink' ] },
		{ items : [ 'Indent','Outdent','-','BulletedList','NumberedList'] },
		{ items : [ 'Undo','Redo'] }]
	});