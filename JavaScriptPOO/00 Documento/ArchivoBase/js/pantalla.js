function Pantalla () {
	this._nombre = '';
}

Pantalla.prototype.setNombre = function(nombre) {
	this._nombre = nombre;
}

Pantalla.prototype.getNombre = function() {
	return this._nombre;
}

Pantalla.prototype.mostrar = function() {
	// Código para mostrar la pantalla
}

Pantalla.prototype.ocultar = function() {
	// Código para ocultar la pantalla
}

Pantalla.prototype.destruir = function() {
	// Código para eliminar la pantalla
}