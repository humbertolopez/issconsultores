jQuery(document).ready(function($)
{
	$('#upload_pdftemario').click(function()
	{
		tb_show('','media-upload.php?TB_iframe=true');
		window.send_to_editor = function(html)
		{
			url = $(html).attr('href');
			$('#pdftemario').val(url);
			tb_remove();
		};
		return false;
	});	
});
