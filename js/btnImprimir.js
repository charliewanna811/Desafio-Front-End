$(function() {
		/*
		* Initialise example carousel
		*/
		$("#feature > div").scrollable({interval: 2000}).autoscroll();
		
		/*
		* Initialise print preview plugin
		*/
		// Add link for print preview and intialise
		$('#aside').prepend('<a class="print-preview">Imprimir Pdf</a>');
		$('a.print-preview').printPreview();
		
		});