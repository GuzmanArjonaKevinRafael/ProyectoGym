function cambiar() {
    let tipoDepago = document.getElementById('TipoPag');
    let pago = document.getElementById('tipoDepago').value;
    if(pago == "pagoatrasado"){
        tipoDepago.innerHTML =
        ` <br><label class="form-label" for="exampleInputPassword1">Seleccionar Disciplina</label>
        <select class="form-select" name="Cantidad"  id="" require>
          <option id="" value="0" default>Seleccionar</option>
          <option  value="385" id="valorgym" >Gimnasio</option>
          <option  value="440" id="ballet" >Ballet</option>
          <option id="" value="340" id="artesmar" >Artes Marciales</option>
        </select>`
    }else if(pago == "pagonormal"){
        tipoDepago.innerHTML =
        ` <br><label class="form-label" for="exampleInputPassword1">Seleccionar Disciplina</label>
        <select class="form-select" name="Cantidad" id="" require>
          <option id="" value="0" default>Seleccionar</option>
          <option  value="350" id="valorgym" >Gimnasio</option>
          <option  value="400" id="ballet" >Ballet</option>
          <option id="" value="300" id="artesmar" >Artes Marciales</option>
        </select>`
    }
}
