function validar() {
  let titulo = document.getElementByid("titulo").value;
  let actores = document.getElementById("actores").value;
  let director = document.getElementById("director").value;
  let guion = document.getElementById("guion").value;
  let produccion = document.getElementById("produccion").value;
  let anio = document.getElementById("anio").value;
  let nacionalidad = document.getElementById("nacionalidad").value;
  let nacionalidad2 = document.getElementById("nacionalidad2").value;
  let duracion = document.getElementById("duracion").value;

  resp = true;

  resp = camposCompletos(
    titulo,
    actores,
    director,
    guion,
    produccion,
    anio,
    nacionalidad,
    nacionalidad2,
    duracion
  );

  if (esUnNumero(anio)) return resp;
}

function camposCompletos(
  titulo,
  actores,
  director,
  guion,
  produccion,
  anio,
  nacionalidad,
  nacionalidad2,
  duracion
) {
  if (
    titulo === "" &&
    actores === "" &&
    director === "" &&
    guion === "" &&
    produccion === "" &&
    anio === "" &&
    nacionalidad === "" &&
    nacionalidad2 === "" &&
    duracion === ""
  ) {
    alert("Los datos son requeridos");
    return true;
  } else return false;
}

function esUnNumero(valor) {
  if (isNaN(valor)) return false;
  else return true;
}

function añoValido(anio) {
  const fechaActual = new Date();
  const añoActual = fechaActual.getFullYear();

  if (anio <= añoActual) return true;
  else return false;
}
