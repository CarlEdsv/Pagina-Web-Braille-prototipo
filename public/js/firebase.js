//configuración de Firebase
const firebaseConfig = {
  apiKey: "AIzaSyBCHGuHTrtAZumNhPUcb8B0DzdalLyAvC8",
  authDomain: "pagina-web-aprendizaje-braille.firebaseapp.com",
  projectId: "pagina-web-aprendizaje-braille",
  storageBucket: "pagina-web-aprendizaje-braille.appspot.com",
  messagingSenderId: "213940169310",
  appId: "1:213940169310:web:184a5ee2fa7e3f0a2862cf",
  measurementId: "G-3EXNQ4K89M"
};

firebase.initializeApp(firebaseConfig);
const database = firebase.database();
const taskList = document.getElementById("taskList");

/*Crear datos
firebase.database().ref('usuarios/' + "YoSoyLuis").set({
  contraseña: "12345678"
});*/

function Leer(Referencia, callback) {
  var UsuarioActivo = localStorage.getItem("UsuarioActivo");
  if (UsuarioActivo) {
    firebase.database().ref('usuarios/' + UsuarioActivo + '/' + Referencia).on('value', function(snapshot) {
      var dato = snapshot.val();
      callback(dato);
    });
  }
}

function ObtenerDatos(Referencia, filtro) {
  return new Promise((resolve, reject) => {
      firebase.database().ref(Referencia)
          .orderByKey() // Ordena por clave (en este caso, el ID del usuario)
          .equalTo(filtro) // Filtra por el valor de filtro (en este caso, el ID del usuario)
          .once('value')
          .then((snapshot) => {
              snapshot.forEach((childSnapshot) => {
                  const usuario = childSnapshot.val().usuario;
                  resolve(usuario); // Resuelve la promesa con el valor del usuario
              });
          })
          .catch((error) => {
              reject(error); // Rechaza la promesa con el error
          });
  });
}

// Llamada a la función para obtener el usuario con ID AMfYwXNJQIOrv6FZjVXlGSZ5Hah2 y guardar el resultado en una variable
/*ObtenerDatos('usuarios', 'AMfYwXNJQIOrv6FZjVXlGSZ5Hah2')
  .then((usuarioObtenido) => {
      console.log("Usuario obtenido:", usuarioObtenido);
  })
  .catch((error) => {
      console.error("Error al obtener datos:", error);
  });
  */


  function agregar(Referencia, dato) {
    var UsuarioActivo = localStorage.getItem("UsuarioActivo");
    if (UsuarioActivo) {
      var updateObj = {};
      updateObj[Referencia] = dato;
      firebase.database().ref('usuarios/' + UsuarioActivo).update(updateObj);
    }
  }

/* Eliminar datos
firebase.database().ref('Referencia').remove();*/

function IniciarSesion(usuario, contraseña) {
  firebase.auth().signInWithEmailAndPassword(usuario, contraseña)
      .then((userCredential) => {
        //Redirige al usuario a la página principal
          const user = userCredential.user;
          var nombreUsuario = user.uid;
          
          // Guardar el nombre de usuario en localStorage
          localStorage.setItem("UsuarioActivo", nombreUsuario);

         // console.log("Inicio de sesión exitoso:", user);
          window.location.href = "/";
        
      })
      .catch((error) => {
        // Muestra un mensaje de error al usuario
          const errorCode = error.code;
          const errorMessage = error.message;
          console.error("Error en el inicio de sesión:", errorMessage);
      });
}

//Registrar un nuevo usuario
function registrar(correo, contraseña, usuario) {
  firebase.auth().createUserWithEmailAndPassword(correo, contraseña)
    .then((userCredential) => {
      //Usuario registrado con éxito
      const user = userCredential.user;
      var nombreUsuario = user.uid;
      localStorage.setItem("UsuarioActivo", nombreUsuario);

        firebase.database().ref('usuarios/' + user.uid).set({
        usuario: usuario
      });

      alert("Usuario registrado");

      //Recarga la página despues de dos segundos
      setTimeout(function() {
        location.reload();
    }, 500);
    })
    .catch((error) => {
      //Error al registrar el usuario
      const errorCode = error.code;
      const errorMessage = error.message;
      alert("Error al registrar usuario:", errorMessage);
    });
}



