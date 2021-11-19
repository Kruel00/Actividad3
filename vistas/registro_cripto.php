<html>
<div class="tittle-incl">
    <h1>Registro de criptomoneda</h1>
</div>
<div class="form-area">
    <div class="side-form">

    </div>
    <form action="index.php?mostrarCriptomonedas=1" method="POST">
    <div class="form-label">
       
            <label for="txtCripto">Nombre de criptomoneda</label>
    </div>
            <div class="form-control">
            <input type="text" name="criptoName" placeholder="Nombre de criptomoneda">
        </div>
        
        <div class="form-label">
            <label for="txtTpCambio">Valor en dolares</label>
        </div>
            <div class="form-control">
            <input type="text" name="criptoValue" placeholder="Valor">
        </div>
        <div class="form-control">
            <input type="submit" name="saveCrip" id="enviarlo">
        </div>
    </form>
    <div class="cancel-button">
    <button onclick="window.location='index.php'">Cancelar</button>
</div>

</div>

</html>