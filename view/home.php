<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Veiculos - Pesquisa</title>
    <link rel="stylesheet" type="text/css" href="./public/css/index.css" />
</head>
<body onload="selecionaCarro('1')">
<div class="container-fluid">
    <div class="container">
        <div class="title">
            <h1>PESQUISAR VEÍCULOS</h1>
        </div>
        <form id="form-pesquisa" action="./view/cars.php" id="form_veiculos">
            <fieldset class="field-style">
                <legend>Veículo</legend>
                <div class="radio-field">
                    <input  type="radio" onclick="selecionaCarro('1')" name="veiculos_tipo" checked value="carro">Carro
                    <input  type="radio" onclick="selecionaCarro('2')" name="veiculos_tipo" value="moto">Moto
                    <input  type="radio" onclick="selecionaCarro('3')" name="veiculos_tipo" value="caminhao">Caminhão
                </div>
                <div class="br">
                    <div class="radio-field">
                        <label for="type_particular"  >Particular</label>
                        <input  type="checkbox" id="type_particular" name="particular" value="particular-origem">
                        <label for="type_revenda"  >Revenda</label>
                        <input  type="checkbox" id="type_revenda" v name="revenda" alue="revenda-origem">
                        <label for="type_zeroKm" >Zero Km</label>
                        <input  type="checkbox" id="type_zeroKm"name="zero-km"  value="novo-estado">
                        <label for="type_semiNovo"  >Particular</label>
                        <input  type="checkbox" id="type_semiNovo" name="semiNovo" value="seminovo-estado">
                    </div>
                <div class="br">
                <div class="radio-field">
                    <input type="text"  id="cod-v" class="form-list" name="placa" placeholder="Placa ou Código"
                </div>
                </div>
                </div>
            </fieldset>
            <div class="br">
                <label for="marca_id">Marca</label>
                <select name="marca" id="marca_id" class="form-list">
                </select>
            </div>
            <div class="br">
                <label for="modelo_id">Modelo</label>
                <select name="modelo" id="modelo_id" class="form-list">
                </select>
            </div>
            <div class="br">
                <fieldset class="field-style">
                    <legend>Ano</legend>
                            <select name="ano_de" id="ano_id_index" class="form-list form-values">
                                <option value="test">De</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                            </select>
                            <select name="ano_ate" id="ano_id_max" class="form-list form-values">
                                <option value="test">Até</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                            </select>          
                </fieldset>
            </div>
            <div class="br">
                <fieldset class="field-style">
                    <legend>Preço</legend>
                            <select name="min_price" id="min_id_index" class="form-list form-values">
                                <option value="test">Min.</option>
                                <option value="2000">2.000</option>
                                <option value="4000">4.000</option>
                                <option value="6000">6.000</option>
                                <option value="8000">8.000</option>
                                <option value="10000">10.000</option>
                                <option value="12000">12.000</option>
                                <option value="14000">14.000</option>
                                <option value="16000">16.000</option>
                                <option value="18000">18.000</option>
                                <option value="20000">20.000</option>
                                <option value="22000">22.000</option>
                                <option value="24000">24.000</option>
                                <option value="26000">26.000</option>
                                <option value="28000">28.000</option>
                                <option value="30000">30.000</option>
                                <option value="35000">35.000</option>
                                <option value="40000">40.000</option>
                                <option value="45000">45.000</option>
                                <option value="50000">50.000</option>
                                <option value="60000">60.000</option>
                                <option value="70000">70.000</option>
                                <option value="80000">80.000</option>
                                <option value="90000">90.000</option>
                                <option value="100000">100.000</option>
                                <option value="120000">120.000</option>
                                <option value="140000">140.000</option>
                                <option value="160000">160.000</option>
                                <option value="180000">180.000</option>
                                <option value="200000">200.000</option>
                                <option value="250000">250.000</option>
                                <option value="300000">300.000</option>
                                <option value="350000">350.000</option>
                                <option value="400000">400.000</option>

                            </select>
                            <select name="max_price" id="max_id_max" class="form-list form-values" >
                            <option value>Max.</option>
                            <option value="2000">2.000</option>
                            <option value="4000">4.000</option>
                            <option value="6000">6.000</option>
                            <option value="8000">8.000</option>
                            <option value="10000">10.000</option>
                            <option value="12000">12.000</option>
                            <option value="14000">14.000</option>
                            <option value="16000">16.000</option>
                            <option value="18000">18.000</option>
                            <option value="20000">20.000</option>
                            <option value="22000">22.000</option>
                            <option value="24000">24.000</option>
                            <option value="26000">26.000</option>
                            <option value="28000">28.000</option>
                            <option value="30000">30.000</option>
                            <option value="35000">35.000</option>
                            <option value="40000">40.000</option>
                            <option value="45000">45.000</option>
                            <option value="50000">50.000</option>
                            <option value="60000">60.000</option>
                            <option value="70000">70.000</option>
                            <option value="80000">80.000</option>
                            <option value="90000">90.000</option>
                            <option value="100000">100.000</option>
                            <option value="150000">150.000</option>
                            <option value="200000">200.000</option>
                            <option value="250000">250.000</option>
                            <option value="300000">300.000</option>
                            <option value="350000">350.000</option>
                            <option value="400000">400.000</option>
                            <option value="450000">450.000</option>
                            <option value="500000">500.000</option>
                            <option value="600000">600.000</option>
                            <option value="700000">700.000</option>
                            <option value="800000">800.000</option>
                            <option value="900000">900.000</option>
                            <option value="1000000">1.000.000</option>
                            <option value="2000000">2.000.000</option>
                            </select>          
                </fieldset>
            </div>
            <div class="br">
                <input type="submit" class="btn-submit" value="ENVIAR"  id="submit-search">
            </div>
    </form>
</div>
<!-- Script -->

<script src="./public/js/index.js"></script>
</body>
</html>