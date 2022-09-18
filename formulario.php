<form action="server_get.php" method="GET">
    <input type="text" name="Nombre" placeholder="Nombre">
    <input type="text" name="Apellido" placeholder="Apellido">
    <input type="date" name="fecha_de_nacimiento" min="1960-01-01" max="2025-05-30" placeholder="fecha">
    <input type="email" name="Email" placeholder="email">
    <select name="Pais" id="">
        <option value="Argentina">Argentina</option>
        <option value="Brasil">Brasil</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Urugay">Uruguay</option>
        <option value="Colombia">Colombia</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Peru">Peru</option>
    </select>
    <select name="Provincia" id="">
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Florianopolis">Florianopolis</option>
        <option value="Asuncion">Asuncion</option>
        <option value="La Rioja">La Rioja</option>
        <option value="La Paz">La Paz</option>
    </select>
    <input type="submit" value="enviar">
    </select>
</div>

</form>