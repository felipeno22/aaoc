
	



// When the user clicks on the button, open the modal
function  open_modalConselhos() {


// Get the modal
var modal = document.getElementById("containerModalConselhos");





  modal.style.display = "block";
   modal.style.opacity=1;
   modal.style.pointerEvents="auto";
  
}



// When the user clicks on <span> (x), close the modal
function  close_modalConselhos() {

	// Get the modal
var modal = document.getElementById("containerModalConselhos");




  modal.style.display = "none";
}




// When the user clicks on the button, open the modal
function  open_modalSenha() {
// Get the modal
var modal = document.getElementById("containerModalSenha");






  modal.style.display = "block";
   modal.style.opacity=1;
   modal.style.pointerEvents="auto";
  
}


// When the user clicks on <span> (x), close the modal
function  close_modalSenha() {

  // Get the modal
var modal = document.getElementById("containerModalSenha");


  modal.style.display = "none";
}



function insert_update(crud){
        var desperson = document.forms["idFormUser"]["desperson"].value;
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
          resultado = confirm("Deseja salvar o usuário " +  desperson + " ?");

        if(crud=='update')
          resultado = confirm("Deseja alterar o usuário " +  desperson + " ?");
         
         
         if(resultado)
          return true;
        else
          return false;
    }







function update_password(){
        var despassword = document.forms["idFormUserPass"]["despasswordnovo"].value;
        var despasswordconf = document.forms["idFormUserPass"]["despasswordnovoconf"].value;
       
         var opt=confirm("Deseja alterar a senha?");




         if(opt){
                          if(despassword!='' && despasswordconf!=''){

                               //verficar se as senhas são iguais nos campos
                              //alert("senha atualizada!!");
                              return true;




                          }else{

                                if(despassword=='' && despasswordconf!=''){

                                    //campo confirmar senha vazio
                                    alert(" campo senha vazio!!");
                                    return false;

                                }else if(despassword!='' && despasswordconf==''){

                                    //campo  senha vazio
                                      alert("campo confirmar senha vazio!!");
                                      return false;

                                }else{

                                      //campo senha e de confirmação vazio
                                      alert("campo  de senha e de confirmação vazio!!");
                                      return false;


                                }




                          }




         }else{

            return false;

         }









        var resultado=''

        if(crud=='insert')
          resultado = confirm("Deseja salvar o usuário " +  desperson + " ?");

        if(crud=='update')
          resultado = confirm("Deseja alterar o usuário " +  desperson + " ?");
         
         
         if(resultado)
          return true;
        else
          return false;
    }


