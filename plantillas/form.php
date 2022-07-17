<main class="container column is-3">
    <h2 class="subtitle"><strong>Calculadora Hidropónica</strong></h2>
    <form action="app/calculoSales.php" method="post">
      
      <div class="field">
      <label class="label">Seleccione el tipo de cultivo</label>
      <div class="select is-success">
        
        <select name="cultivo">
          
          <option value="lechugas">Lechugas</option>
          <option value="berros">Berros</option>
          <option value="acelgas">Acelgas</option>
        </select>
      </div>
   <!-- _________________________________________ -->

      <div class="field">
        <label class="label">Seleccione la bancada</label>
        <div class="select is-success">
          
          <select name="bancada">
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </div>
  

     <!-- _______________________________________ -->

      
      </div>
      <div class="field">
        <label class="label">Volumen litros de agua a dosificar</label>
        <div class="control">
          <input class="input is-success" type="number" name="volumenLitrosAgua"placeholder="litros" required >
        </div>
      </div>

      <div class="field">
        <label class="label">Numero de plantas transplantadas</label>
        <div class="control">
          <input class="input is-success" type="number" name="cantidadPlantas" placeholder="Text input" required >
        </div>
      </div>
    
      <div class="field">
        <label class="label">Fecha de Transplante</label>
        <div class="control">
          <input class="input is-success" name="fechatranplante" type="date" placeholder="dd/mm/aaaa" required>
        </div>
      </div>
      <div class="field">
        <div class="control">
          <button  class="button is-success">Enviar</button>
        </div>
      </div>
    </form>
  </main>