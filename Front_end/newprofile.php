<form id="new_form" action="../Back_end/profile.php" method="POST">
        <table> 
            <tr>
                <th>Login :</th>
                <td><input type="text" name="login"></td>
            </tr> 
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="password"></td>
            </tr> 
            <tr>
                <th>Nom :</th>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <th>Prénom :</th>
                <td><input type="text" name="prénom"></td>
            </tr>
            <tr>
                <th>Age :</th>
                <td><select name="age">
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select></td>
            </tr>
            <tr>
                <th>Sexe :</th>
                <td><select name="select">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Créer mon compte" /></td>
            </tr>
        </table>
    </form>