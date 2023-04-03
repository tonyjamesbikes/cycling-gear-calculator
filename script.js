function calculateDistance() {
	// Get the values from the form
	var chainring = document.getElementById("chainring").value;
	var cassette = document.getElementById("cassette").value;
	var wheelsize = document.querySelector('input[name="wheelsize"]:checked').value;

	// Calculate the gear ratio and gear inches
	var ratio = chainring / cassette;
	var diameter = wheelsize * Math.PI;
	var gear_inches = diameter * ratio;

	// Display the result
	var result = document.getElementById("result");
	result.innerHTML = "With a " + chainring + " tooth chainring and a " + cassette + " tooth cassette on " + wheelsize + " inch wheels, the bike would travel " + gear_inches.toFixed(2) + " inches in one full turn of the pedals.";
}
