function formularios() {
    let lenguaje = document.getElementById('lenguaje').value;
    if (lenguaje == 'Recepcionista') {
        var length = 8,
            charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
            retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }

        document.getElementById('formulario').innerHTML = `
        
                <form method="POST" action="registrosSecre.php">
               

                <div class="container tamanioContenedor">
                <h1 class="registro" >Registro de Recepcionista</h1> 
                        <div class="row">
                            <div class="col-4 espacio">
                                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                                <input type="text" name="Rnombres" class="form-control" id="Rnombres" aria-describedby="emailHelp" pattern="[A-Za-z ]+"
                                required>
                            </div>
                            <div class="col-4 espacio">
                                <label for="exampleInputPassword1" class="form-label">Apellido Paterno</label>
                                <input type="text" name="AapellidoP" class="form-control" id="AapellidoP" pattern="[A-Za-z ]+"
                                required>
                            </div>
                            <div class="col-4 espacio">
                                <label for="exampleInputPassword1" class="form-label">Apellido Materno</label>
                                <input type="text" name="AapellidoM" class="form-control" id="AapellidoM" pattern="[A-Za-z ]+"
                                required>
                            </div>
                            <div class="col-6 espacio">
                            <label for="exampleInputPassword1" class="form-label">Correo Electrónico</label>
                            <input type="text" name="Rcorreo" class="form-control" id="exampleInputPassword1" onChange="sacarUsuarioS()"required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$">
                            </div>
                            <div class="col-3 espacio">
                                <label for="exampleInputPassword1" class="form-label">Usuario</label>
                                <input type="text" name="RSecre" class="form-control" id="Rusuario" readonly='readonly'  pattern="[A-Za-z ]+"
                                required>
                            </div>
                            <div class="col-3 espacio">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="text" name="Rcontrasena" class="form-control" id="exampleInputPassword1" value="${retVal}" readonly='readonly' required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                            </div>
                            <div class="col-4 espacio">
                                <label for="exampleInputPassword1" class="form-label">Edad</label>
                                <input type="text" name="Redad" class="form-control" id="exampleInputPassword1"  required pattern="[0-9]+">
                            </div>
                            <div class="col-4 espacio">
                                <label for="exampleInputPassword1" class="form-label">Núm. telefónico</label>
                                <input type="text" name="Rnumero" class="form-control" id="Rnumero"  required pattern="[0-9 ]+">
                            </div>
                            <div class="col-4 espacio">
                                <label for="exampleInputPassword1" class="form-label">Núm. Emergencia</label>
                                <input type="text" name="RnumeroEmer" class="form-control" id="RnumeroEmergencia" required pattern="[0-9 ]+">
                            </div>
                            <div class="col-12 espacio">
                                <label for="exampleInputPassword1" class="form-label">Dirección</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Rdireccion" required pattern="[A-Za-z0-9 ]+"></textarea>
                            </div>   
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                

        
        </form>

        

        `;
    } else if (lenguaje == 'Entrenador') {
        var length = 8,
            charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
            retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }
        document.getElementById('formulario').innerHTML = `
        
        <form method="POST" action="registrosEntre.php">
            <div class="container tamanioContenedor">
                <h1 class="registro" >Registro de Entrenador</h1> 
                    <div class="row">
                        <div class="col-4 espacio">
                            <label for="exampleInputEmail1" class="form-label">Nombres</label>
                            <input type="text" name="Enombres" class="form-control" id="ENombre" aria-describedby="emailHelp" pattern="[A-Za-z ]+"
                            required>
                        </div>
                        <div class="col-4 espacio">
                            <label for="exampleInputPassword1" class="form-label">Apellido Paterno</label>
                            <input type="text" name="EapellidoP" class="form-control" id="EapellidoP"  pattern="[A-Za-z ]+"
                            required>
                        </div>
                        <div class="col-4 espacio">
                            <label for="exampleInputPassword1" class="form-label">Apellido Materno</label>
                            <input type="text" name="EapellidoM" class="form-control" id="EapellidoM"  pattern="[A-Za-z ]+"
                            required>
                        </div>
                        <div class="col-6 espacio">
                            <label for="exampleInputPassword1" class="form-label">Correo Electrónico</label>
                            <input type="email" name="Ecorreo" class="form-control" id="exampleInputPassword1" onChange="sacarUsuario()" required pattern="[A-Zaa-z0-9._%+-]+@[A-Zaa-z0-9.-]+\.[A-Zaa-z]{2,}$">
                        </div>
                        <div class="col-3 espacio">
                            <label for="exampleInputPassword1" class="form-label">Usuario</label>
                            <input type="text" name="Eentren" class="form-control" id="Eusuario" readonly='readonly'  pattern="[A-Za-z ]+"
                            required>
                        </div>
                        <div class="col-3 espacio">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="text" name="Econtrasena" class="form-control" id="exampleInputPassword1" value="${retVal}" readonly='readonly' required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        </div>
                        <div class="col-4 espacio">
                            <label for="exampleInputPassword1" class="form-label">Edad</label>
                            <input type="text" name="Eedad" class="form-control" id="Eedad"  required pattern="[0-9]+">
                        </div>
                        <div class="col-4 espacio">
                            <label for="exampleInputPassword1" class="form-label">Núm. telefónico</label>
                            <input type="text" name="Enumero" class="form-control" id="Enumero"  required pattern="[0-9 ]+">
                        </div>
                        <div class="col-4 espacio">
                            <label for="exampleInputPassword1" class="form-label">Núm. Emergencia</label>
                            <input type="text" name="EnumeroEmergencia" class="form-control" id="EnumeroEmergencia"  required pattern="[0-9 ]+">
                        </div>
                        <div class="col-8 espacio">
                            <label for="exampleInputPassword1" class="form-label">Dirección</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Edireccion" required pattern="[A-Za-z0-9 ]+"></textarea>
                        </div>   
                        <div class="col-4 espacio">
                            <label for="exampleInputPassword1" class="form-label">Disciplina</label>
                            <select class="form-select" name="Edisciplina" required>
                                <option  value="0">Seleccione:</option>
                                <option>Gym</option>
                                <option>Ballet</option>
                                <option>Artes marciales</option>
                            </select>
                        </div>   
                    </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>



        

        `;
    } else if (lenguaje == 'Alumno') {
        document.getElementById('formulario').innerHTML = `
        
        <form method="POST" action="registros.php">
            <div class="container tamanioContenedor">
            <h1 class="registro" >Registro de Alumno</h1> 
                <div class="row">
                    <div class="col-4 espacio">
                        <label for="exampleInputEmail1" class="form-label">Nombres</label>
                        <input type="text" name="Anombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[A-Za-z ]+"
                        required>
                    </div>
                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                        <input type="text" name="Aapellido" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z ]+"
                        required>
                    </div>

                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                        <input type="text" name="Atelefono" class="form-control" id="exampleInputPassword1"
                        required>
                    </div>
                        
                    <div class="col-6 espacio">
                        <label for="exampleInputPassword1" class="form-label">Correo Electrónico</label>
                        <input type="text" name="Acorreo" class="form-control" id="exampleInputPassword1" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$">
                    </div>
                    <div class="col-6 espacio">
                        <label for="exampleInputPassword1" class="form-label">Disciplina</label>
                        <select class="form-select" name="disciplina" required>
                            <option >Seleccione:</option>
                            <option>Gym</option>
                            <option>Ballet</option>
                            <option>Artes marciales</option>
                        </select>
                    </div>
                    <div class="col-12 espacio">
                        <label for="exampleInputPassword1" class="form-label">Dirección</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Adireccion"  required pattern="[A-Za-z0-9 ]+"></textarea>
                    </div>
                    <div class="col-4 espacio">
                        <label for="exampleInputEmail1" class="form-label">Tutor</label>
                        <input type="text" name="Atutor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[A-Za-z ]+"
                        required>
                    </div>
                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Núm. emergencia</label>
                        <input type="text" name="Aemergencianum" class="form-control" id="exampleInputPassword1" required pattern="[0-9 ]+">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>


    
                

        `;
    }
}

function sacarUsuario() {
    let ENombre = document.getElementById('ENombre').value;

    let primeraLetraNombre = ENombre.charAt(0);
    let EapellidoP = document.getElementById('EapellidoP').value;
    let EapellidoM = document.getElementById('EapellidoM').value;
    let usuario = primeraLetraNombre + EapellidoP + EapellidoM;
    document.getElementById("Eusuario").value = usuario;
}

function sacarUsuarioS() {
    let Rnombres = document.getElementById('Rnombres').value;

    let RprimeraLetraNombre = Rnombres.charAt(0);
    let AapellidoP = document.getElementById('AapellidoP').value;
    let AapellidoM = document.getElementById('AapellidoM').value;
    let Rusuario = RprimeraLetraNombre + AapellidoP + AapellidoM;
    document.getElementById("Rusuario").value = Rusuario;
}