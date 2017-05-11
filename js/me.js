function waitall ()
{
	$("document").ready(function()
		{
			$("#home").click(
				function(){ $("nav ul li").removeClass("active");
							$("#home").addClass("active");
							document.title="Readrid - Home";
							
						   
			});

			$("#quotes").click(
				function(){ $("nav ul li").removeClass("active");
							$("#quotes").addClass("active");
							document.title="Readrid - Quotes";
						
						   
			});

			$("#downloads").click(
				function(){ $("nav ul li").removeClass("active");
							$("#downloads").addClass("active");
							document.title="Readrid - History";
							
						   
			});

			$("#tutorial").click(
				function(){ $("nav ul li").removeClass("active");
							$("#tutorial").addClass("active");
							document.title="Readrid - Tutorial";
							
						   
			});

			$("#about").click(
				function(){ $("nav ul li").removeClass("active");
							$("#about").addClass("active");
							document.title="Readrid - About";
						
						   
			});


			$("#srch").click(
				function(){ 
							$("#srch").addClass("active");
							// $("#srch").addClass("coll");
							document.title="Readrid - About";
						
						   
			});


		})

}


