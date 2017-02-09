var addUserFormSubmit = function(){
	$('.submit').click(function(){
		var name = $('input[name="name"]');
		var age = $('input[name="age"]');
		var city = $('input[name="city"]');
		$.post("code.php",
	    {
	    	action: addUser,
	        name: name,
	        age: age,
	        city: city
	    },
	    function(data, status){
	        alert("Data: " + data + "\nStatus: " + status);
	    });
	    return false();
	});
}

$(window).load(function(){
	console.log('123');
	addUserFormSubmit();	
});