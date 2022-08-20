


function mostraImg(){

	let photo= document.getElementById('image-previewInfo');
let file=document.getElementById('imginformation');

		let reader=	new FileReader();


		reader.onload=()=>{

			photo.src=reader.result;
		

		}
			

			reader.readAsDataURL(file.files[0]);

			
		



}




function insert_update_info(crud){
        var title = document.forms["idFormInfo"]["title"].value;
       /* var deslogin = document.forms["idFormUser"]["deslogin"].value;
        var despassword = document.forms["idFormUser"]["despassword"].value;

        if (desperson == "") {
            alert("Favor informar o seu nome!");
            return false;     
        }
        else{
            alert("Olá, " + desperson + " !");
            return true;
        }*/

        var resultado=''

        if(crud=='insert')
          resultado = confirm("Deseja salvar o  informativo " +  title + " ?");

        if(crud=='update')
          resultado = confirm("Deseja alterar o informativo " +  title + " ?");
         
         if(resultado)
          return true;
        else
          return false;
    }


