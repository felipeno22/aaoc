





function insert_update_legis(crud){
        var legislacao = document.forms["idFormLegis"]["legislacao"].value;
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
          resultado = confirm("Deseja salvar a legislação  ?");

        if(crud=='update')
          resultado = confirm("Deseja alterar a legislação   ?");
         
         if(resultado)
          return true;
        else
          return false;
    }


