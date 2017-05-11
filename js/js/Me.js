function waitall ()
{
	$("document").ready(function()
		{
			$("#Home").click(
				function(){ $("nav>ul>li").removeClass("active");
							$("#Home").addClass("active");
							document.title="Readrid - Home";
							$("#pheader").fadeOut("fast");
							$("#pheader").fadeIn("fast");
						   
			});

			$("#Quotes").click(
				function(){ $("nav>ul>li").removeClass("active");
							$("#Quotes").addClass("active");
							document.title="Readrid - Quotes";
							$("#pheader").fadeOut("fast");
							$("#pheader").fadeIn("fast");
						   
			});

			$("#History").click(
				function(){ $("nav>ul>li").removeClass("active");
							$("#History").addClass("active");
							document.title="Readrid - History";
							$("#pheader").fadeOut("fast");
							$("#pheader").fadeIn("fast");
						   
			});

			$("#Tutorial").click(
				function(){ $("nav>ul>li").removeClass("active");
							$("#Tutorial").addClass("active");
							document.title="Readrid - Tutorial";
							$("#pheader").fadeOut("fast");
							$("#pheader").fadeIn("fast");
						   
			});

			$("#About").click(
				function(){ $("nav>ul>li").removeClass("active");
							$("#About").addClass("active");
							document.title="Readrid - About";
							$("#pheader").fadeOut("fast");
							$("#pheader").fadeIn("fast");
						   
			});


		})

}

