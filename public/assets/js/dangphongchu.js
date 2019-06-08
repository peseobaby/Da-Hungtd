function readURL(input) {
	if (input.files && input.files[0]) {
		var filesTotal = input.files.length;

		for (i = 0; i < filesTotal; i++) {
			var reader = new FileReader();

			reader.onload = function (e) {
				imgId = "#pre-" + $(input).attr('id');
				console.log(imgId);
				$(imgId).attr('src', e.target.result).addClass('show--img');
			};
			reader.readAsDataURL(input.files[i]);
		}
	}
}