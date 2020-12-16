<legend>Dados Animal</legend>
    <label>Nome Animal:</label>
        <input type="text" name="NomeAnimal" placeholder="Digite aqui" value ="{{old('NomeAnimal', $animal['NomeAnimal'])}}" required/>
        <br/>
    <label > Responsavel:</label>
        <input type="text" name="responsavel" placeholder="Digite aqui" value ="{{old('responsavel', $animal['responsavel'])}}" required/>
        <br/>
    <label> Data Nascimento:</label>
        <input type="date" name="DataNascimento" value ="{{old('DataNascimento', $animal['DataNascimento'])}}" required/>
        <br/>
    <label> Data da Ultima Vacina:</label>
        <input type="date" name="DataVacina" value ="{{old('DataVacina', $animal['DataVacina'])}}" required/>
        <br/>
    <label> Cor:</label>
        <input type="text" name="cor" placeholder="Digite aqui" value ="{{old('cor', $animal['cor'])}}" required/>
        <br/>
    <label > Altura:</label>
        <input type="text" name="altura" placeholder="Digite aqui" value ="{{old('altura', $animal['altura'])}}" required/>
        <br/>
    <label > Peso:</label>
        <input type="text" name="peso" placeholder="Digite aqui" value ="{{old('peso', $animal['peso'])}}" required/>
        <br/>
    <label> Sexo: </label>
        <select name="sexo" required >
            <option value="">--</option>
            <option value="1"@if(old('sexo', $animal['sexo']) == 1) selected @endif>fêmea</option>
            <option value="2"@if(old('sexo', $animal['sexo']) == 2) selected @endif>macho</option>
        </select>
        <br/>
    <label> Especie: </label>
        <select name="especie" required>
            <option value="">--</option>
            <option value="1"@if(old('especie', $animal['especie']) == 1) selected @endif>gato</option>
            <option value="2"@if(old('especie', $animal['especie']) == 2) selected @endif>cão</option>
        </select>
        <br/>
    <label>Raça:</label>
        <select name="raca" required>
            <option value="">--</option>
            <option value="1"@if(old('raca', $animal['raca']) == 1) selected @endif>siamês</option>
            <option value="2"@if(old('raca', $animal['raca']) == 2) selected @endif>maine</option>
            <option value="3"@if(old('raca', $animal['raca']) == 3) selected @endif>pengala</option>
            <option value="4"@if(old('raca', $animal['raca']) == 4) selected @endif>persa</option>
            <option value="5"@if(old('raca', $animal['raca']) == 5) selected @endif>pitbull</option>
            <option value="6"@if(old('raca', $animal['raca']) == 6) selected @endif>buldogue</option>
            <option value="7"@if(old('raca', $animal['raca']) == 7) selected @endif>labrador</option>
            <option value="8"@if(old('raca', $animal['raca']) == 8) selected @endif>pastor alemão</option>
        </select><br/>