


function mostraImg(){

	let photo= document.getElementById('image-preview');
let file=document.getElementById('imginformation');

		let reader=	new FileReader();


		reader.onload=()=>{

			photo.src=reader.result;
		

		}
			

			reader.readAsDataURL(file.files[0]);

			
		



}

