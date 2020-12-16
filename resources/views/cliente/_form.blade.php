<legend>Dados Cliente</legend>
<label>Nome:</label>
<input type="text" name="NomeCliente" placeholder="Digite aqui" value ="{{old('NomeCliente', $cliente['NomeCliente'])}}" required />
<br/>
<label > Facebook:</label>
<input type="email" name="facebook" placeholder="Digite aqui" value ="{{old('facebook',$cliente['facebook'])}}"/>
<br/>
<label> Data Nascimento:</label>
<input type="date" name="DataNascimento" value ="{{old('DataNascimento', $cliente['DataNascimento'])}}" required />
<br/>
<label> Telefone:</label>
<input type="number" name="telefone" value ="{{old('telefone', $cliente['telefone'])}}" required/>
<br/>
<label> CPF:</label>
<input type="number" name="CPF" placeholder="Digite aqui" value ="{{old('CPF', $cliente['CPF'])}}" required/>
<br/>
<label > RG:</label>
<input type="number" name="RG" placeholder="Digite aqui" value ="{{old('RG', $cliente['RG'])}}" required/>
<br/>
<label> Sexo: </label>
<select name="sexo" required>
    <option value="">--</option>
    <option value="1"@if(old('sexo', $cliente['sexo']) == 1) selected @endif>masculino</option>
    <option value="2"@if(old('sexo', $cliente['sexo']) == 2) selected @endif>feminino</option>
</select>
<br/>
</div >
</select>
<fieldset> 
<legend>Endereço</legend>
<label>Rua:</label>
<input type="text" name="rua" placeholder="Digite aqui" value ="{{old('rua', $cliente['rua'])}}" required/>
<br/>
<label> Numero:</label>
<input type="number" name="numero" placeholder="Digite aqui" value ="{{old('numero', $cliente['numero'])}}" required/>
<br/>
<label> CEP:</label>
<input type="number" name="CEP" placeholder="Digite aqui" value ="{{old('CEP', $cliente['CEP'])}}" required/>
<br/>
<label> Cidade:</label>
<select name="cidade" required>
<option value="">--</option>
<option value="1"@if(old('cidade', $cliente['cidade']) == 1) selected @endif>Maceio</option>
<option value="2"@if(old('cidade', $cliente['cidade']) == 2) selected @endif>Pilar</option>
<option value="3"@if(old('cidade', $cliente['cidade']) == 3) selected @endif>Rio Largo</option>
<option value="4"@if(old('cidade', $cliente['cidade']) == 4) selected @endif>Arapiraca</option>
</select>
<br/>
<label> Bairro: </label>
<select name="bairro" required>
<option value="">--</option>
<option value="1"@if(old('bairro', $cliente['bairro']) == 1) selected @endif>Barro Duro</option>
<option value="2"@if(old('bairro', $cliente['bairro']) == 2) selected @endif>Trapiche</option>
<option value="3"@if(old('bairro', $cliente['bairro']) == 3) selected @endif>Centro</option>
<option value="4"@if(old('bairro', $cliente['bairro']) == 4) selected @endif>Farol</option>
</select>
<br/>
<label>Estado:</label>
<select name="estado" required>
<option value="">--</option>
<option value="1"@if(old('estado', $cliente['estado']) == 1) selected @endif>Alagoas</option>
<option value="2"@if(old('estado', $cliente['estado']) == 2) selected @endif>Pernanbuco</option>
<option value="3"@if(old('estado', $cliente['estado']) == 3) selected @endif>Bahia</option>
<option value="4"@if(old('estado', $cliente['estado']) == 4) selected @endif>Piaui</option>
<option value="5"@if(old('estado', $cliente['estado']) == 5) selected @endif>Fortaleza</option>
</select><br/>