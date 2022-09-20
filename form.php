<form action="server_get.php" method="GET">
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="text" name="surname" placeholder="Apellido" required>
    <input type="date" name="date_of_birth" min="1960-01-01" max="2025-05-30" placeholder="fecha" required>
    <input type="email" name="email" placeholder="email" required>
    <select name="country" id="" required>
        <option value="Argentina">Argentina</option>
        <option value="Brasil">Brasil</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Urugay">Uruguay</option>
        <option value="Colombia">Colombia</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Peru">Peru</option>
    </select>
    <select name="Province" id="" required>
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Florianopolis">Florianopolis</option>
        <option value="Asuncion">Asuncion</option>
        <option value="La Rioja">La Rioja</option>
        <option value="La Paz">La Paz</option>
    </select>
    <input type="submit" value="enviar">
</form>