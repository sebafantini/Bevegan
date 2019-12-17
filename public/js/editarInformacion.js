window.addEventListener('load',function(){

    //Amigas y amigos, esta es una forma de programar la validación de formularios, existen diversas maneras de hacer lo mismo, cada uno de nosotros programamos de forma diferente, lo importante es que ustedes desarrollen su propia lógica y hagan uso de este ejemplo, sólo como para tomar ideas.

    //Esta es otra forma que tenemos para porder iniciar nuestro código JS.
    //window.onload=function(){

    //Aquí capturo el formulario con sus elementos - Esta es una forma de hacerlo
    //var formulario = document.forms[0]
    //Esta es otra forma de capturar el formulario

    let editarInformacion = document.querySelector('.editarInfo');

    //Con esta línea hago que el al cargar el formulario, el cursor se posicione en el campo email
    //editarInformacion.elements.email.focus();
    //Esto lo coloque para que lo puedan ver en la consola
    console.log(editarInformacion);
    //Aquí les dispongo este console.log, para que vean como puedo obtener el valor colocado por el usuario
    console.log(editarInformacion.elements.email.value);

    //También puedo capturar elemento por elemento, es decir cada input
    //let campoEmail = document.querySelector('input[name=email]');
    //console.log(campoEmail);
    //Aquí armo mi función para que se ejecute una vez que el usuario envie ó de enter en cada input

    editarInformacion.onsubmit = function(evento) {
      //Aquí evito que por defecto se envie el formulario
      //Si el formulario pasa las validaciones doy el ingreso al usuario
      //Este console.log, se los coloque, para que vean el evento que se dispara
      console.log("Hola evento"+evento );
      //Si los campos no pasan las validaciones, entonces no envio el formulario, que es la acción por defecto del submit, en el caso contrario este se envía.
      if (!validateRegisterForm()) {
        evento.preventDefault()
      }else{
        editarInformacion.submit()
      }
    }
    //Esta es la función que valida todos los campos del formulario
    function validateRegisterForm() {
      //Esta manera de programarlo en ECMA6, se llama destructuración de código.
      let { email, password, passwordRepeat,
      userName, provincia,municipio, termsCondition } = editarInformacion.elements

      //De esta forma se programaba antes del 2015, es decir almacenaba cada campo por separado
      //var email = formulario.elements.email
      //var password = formulario.elements.password
      //Y así con cada una de las variables
      //Esta es una forma mas corta de hacer un if simple, en ECMA6

      if (!validateEmail(email)) return false;
      if (!validatePassword(password)) return false;
      if (!validatePasswordRepeat(password, passwordRepeat)) return false;
      if (!validateUsername(userName)) return false;
      if(!validateProvincia(provincia)) return false;
      if(!validateMunicipio(municipio)) return false;
      if (!validateTermsCondition(termsCondition)) return false;

      return true;
      }
      //Aquí comoenzo a realizar cada una de las funciones encgadas de hacer las validaciones.
      function validateEmail(email) {
        //Esta es una expresión regular que tome de stack overflow, para validar el email por esta vía.
        let re = /^[a-zA-Z0-9.!#$%&’+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
        let error = document.getElementById('errorEmail');
        //Aquí hago uso del método test() de javascript, encargado de validar una expresión regular, esta retorna un booleano
        if (!re.test(email.value)){
          //Aquí hago uso de las clases de bootstrap, para hacer el efceto visual de los colores por si hay un error o no.
          email.classList.add('is-invalid');
          console.log(errorEmail);
          error.innerHTML= "Debe colocar un email válido";
          error.classList.add('alert-danger');
          //errorEmail.classList.add('alert-danger');
         // email.addEventListener('change',cambioNombre);
        return false;
      }else{
        error.innerHTML= "";
        error.classList.remove('alert-danger');
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
        editarInformacion.elements.password.focus()
        return true;
      }

      }

      function validatePassword(password) {
        //Atrape esta regex desde stack overflow
        let re = /^(?=.[a-z])(?=.[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
        let errorPassword = document.getElementById('errorPassword');

        if (!re.test(password.value)) {
          errorPassword.innerHTML = "Debe especificar una contraseña válida";
          errorPassword.classList.add('alert-danger');
          password.classList.add('is-invalid');
          return false;

        }else{
          errorPassword.innerHTML = "";
          errorPassword.classList.remove('alert-danger');
          password.classList.remove('is-invalid');
          password.classList.add('is-valid');
          editarInformacion.elements.passwordRepeat.focus();
          //Esto se los coloque para que vean que de igual forma pueden enviar una pantalla de alert al usuario, pero usando la libreria sweetalert
          // swal('Error', 'Ingrese una contraseña válida', 'error')
          return true;
        }


      }

      function validatePasswordRepeat(password,repeat){
        console.log(password.value);
        console.log(repeat.value);
        if (password.value != repeat.value) {
          errorPasswordRepeat.innerHTML = "Las conraseñas no coinciden";
          errorPasswordRepeat .classList.add('alert-danger');
          repeat.classList.add('is-invalid');
          return false;

        }else{
          errorPasswordRepeat .innerHTML = "";
          errorPasswordRepeat.classList.remove('alert-danger');
          repeat.classList.remove('is-invalid');
          repeat.classList.add('is-valid');
          editarInformacion.elements.userName.focus();
          // swal('Error', 'Ingrese una contraseña válida', 'error')
          return true;
        }
        //swal('Error', 'Las contraseñas no son iguales', 'error')

      }

      function validateUsername(username) {
        let errorUserName = document.getElementById('errorNombreUsuario');
        if (username.value.length < 6){
          errorUserName.innerHTML = "Nombre de usuario no puede tener menos de 6 digitos";
          errorUserName.classList.add('alert-danger');
          username.classList.add('is-invalid');
          return false;
        } else{
          errorUserName.innerHTML = "";
          errorUserName.classList.remove('alert-danger');
          username.classList.remove('is-invalid');
          username.classList.add('is-valid');
          editarInformacion.elements.termsCondition.focus();
          return true;
        }

       // swal('Error', 'Ingrese un nombre de usuario válido', 'error')

      }
      function validateProvincia(provincia){
        let errorProvincia = document.getElementById('errorProvincia');
        if(provincia.value == ""){
          provincia.classList.add('is-invalid');
          errorProvincia.innerHTML = "Seleccione la provincia";
          errorProvincia.classList.add('text-danger');
          return false;
        }else{
          provincia.classList.add('is-valid');
          provincia.classList.remove('is-invalid')
          errorProvincia.innerHTML = "";
          errorProvincia.classList.remove('text-danger');
          return true;
        }
      }

      function validateMunicipio(municipio){
        let errorMunicipio = document.getElementById('errorMunicipio');
        if(municipio.value == ""){
          municipio.classList.add('is-invalid');
          errorMunicipio.innerHTML = "Seleccione el municipio";
          errorMunicipio.classList.add('text-danger');
          return false;
        }else{
          municipio.classList.add('is-valid');
          municipio.classList.remove('is-invalid')
          errorMunicipio.innerHTML = "";
          errorMunicipio.classList.remove('text-danger');
          return true;
        }
      }

      function validateTermsCondition(termsConditionChecked) {
        let errorTerminos = document.getElementById('errorTerminos');
        if (!termsConditionChecked.checked) {
          console.log('Entro terminos');
          console.log(termsConditionChecked);
          console.log(termsConditionChecked.checked);
          errorTerminos.innerHTML = "Debe aceptar los terminos y condiciones";

          errorTerminos.classList.add('alert-danger');
          termsConditionChecked.classList.add('is-invalid');
          return false;
        }else{
          errorTerminos.innerHTML = "";
          errorTerminos.classList.remove('alert-danger');
          termsConditionChecked.classList.remove('is-invalid');
          termsConditionChecked.classList.add('is-valid');
          console.log("Se va a salir de terminos");
          return true;

        }

       // swal('Error', 'Debe aceptar los términos y condiciones', 'error')
      }

      //Capturar los elementos de provincia y municipio
      let provinciaSeleccionada = document.querySelector('#provincia');
      let municipioSeleccionado = document.querySelector('#municipio');
      let seleccion = "";
      //LLamando a la función palabras de Gise
      armarProvincias();

      //Ejecutando la Función, los datos contra una api siempre vienen en formato json(), pero en formularios nuestros text()
      function armarProvincias(){
        fetch('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre')
        .then(function(respuesta){
          return respuesta.json()
        })
        .then(function(datosProvincia){
          console.log(datosProvincia)
          provinciaSeleccionada.innerHTML = "<option value='' >Seleccione provincia...</option>"
          for (let seleccionProvincia of datosProvincia.provincias) {
            let opcionProvincia = document.createElement('option')
            opcionProvincia.setAttribute('value',seleccionProvincia.id)
            opcionProvincia.innerHTML = seleccionProvincia.nombre
            provinciaSeleccionada.append(opcionProvincia)
          }
        })
      }
      //Aquí determino cual es la provincia que selecciona el usuario y luego entonces se lo mando a la función que muestra los municipios
      provinciaSeleccionada.addEventListener('change',function(){
        seleccion = provinciaSeleccionada.value;
        armarMunicipios(seleccion);
      })
      //Esta es la función que muestra los municipios en base a la provincia seleccionada por el usuario
      function armarMunicipios(seleccion){
        fetch('https://apis.datos.gob.ar/georef/api/municipios?provincia='+seleccion+'&campos=id,nombre&max=100')
        .then(function(respuesta){
          return respuesta.json()
        })
        .then(function(datosMunicipio){
          console.log(datosMunicipio)
          municipioSeleccionado.innerHTML = "<option value='' >Seleccione municipio...</option>"
          for (let seleccionMunicipio of datosMunicipio.municipios) {
            let opcionMunicipio = document.createElement('option')
            opcionMunicipio.setAttribute('value',seleccionMunicipio.id)
            opcionMunicipio.innerHTML = seleccionMunicipio.nombre
            municipioSeleccionado.append(opcionMunicipio)
          }
        })
      }

      //Incorpore el ojo de la contraseña
      //Capturar el elemento
      let ojoPassword = document.getElementById('ojoPassword');
      ojoPassword.addEventListener('click',function(){
        if(ojoPassword.getAttribute('name')=='eye'){
          password.setAttribute('type','text')
          ojoPassword.setAttribute('name','eye-off')
        }else{
          password.setAttribute('type','password')
          ojoPassword.setAttribute('name','eye')
        }
      });

      //Incorpore el ojo de la rectificación de la contraseña
      //Capturar el elemento
      let ojoPasswordRepeat = document.getElementById('ojoPasswordRepeat');
      ojoPasswordRepeat.addEventListener('click',function(){
        if(ojoPasswordRepeat.getAttribute('name')=='eye'){
          passwordRepeat.setAttribute('type','text')
          ojoPasswordRepeat.setAttribute('name','eye-off')
        }else{
          passwordRepeat.setAttribute('type','password')
          ojoPasswordRepeat.setAttribute('name','eye')
        }
      });

      //Se que esto lo puedo mejorar usando el this y así me evito repetir el código, lo que ocurre es que estoy fulllll cansado. y lo programe así. Tienen total libertad para mejorarlo todo lo que deseen y sobre todo compartirlo a todos. La idea es para que lo entiendan y nada mas.

  });