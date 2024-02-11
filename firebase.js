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
//resumen de las cosas que se pueden hacer en firebase, datos para el luis del futuro o para quien le pueda servir xd

/*Crear datos
firebase.database().ref('usuarios/' + "YoSoyLuis").set({
  contraseña: "12345678"
});*/

/* Leer datos
  firebase.database().ref(primeraReferencia)
    .orderByChild('filtro')
    .equalTo('el valor del filtro')
    .once('value')
    .then((snapshot) => {
        snapshot.forEach((childSnapshot) => {
            //si la busqueda encontro algo
          
        });
    })
    .catch((error) => {
      //si no encontro nada
        
    });*/

/* Actualizar datos
firebase.database().ref('Referencia').update({
  NombreDato: dato
});*/

/* Eliminar datos
firebase.database().ref('Referencia').remove();*/

function buscar(usuario, contraseña) {
  firebase.auth().signInWithEmailAndPassword(usuario, contraseña)
      .then((userCredential) => {
        //Redirige al usuario a la página principal
          const user = userCredential.user;
          console.log("Inicio de sesión exitoso:", user);
          window.location.href = "main.html";
      })
      .catch((error) => {
        // Muestra un mensaje de error al usuario
          const errorCode = error.code;
          const errorMessage = error.message;
          console.error("Error en el inicio de sesión:", errorMessage);
      });
}

//Registrar un nuevo usuario
function registrar(usuario, contraseña) {
  firebase.auth().createUserWithEmailAndPassword(usuario, contraseña)
    .then((userCredential) => {
      //Usuario registrado con éxito
      const user = userCredential.user;
      console.log("Usuario registrado:", user);
    })
    .catch((error) => {
      // Error al registrar el usuario
      const errorCode = error.code;
      const errorMessage = error.message;
      console.error("Error al registrar usuario:", errorMessage);
    });
}



