<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <marquee scrollamount="20" style="font-size: 30px;">- Exercicios PHP -</marquee>
    <div class="grid-container">
        <!---------------------------------------------------------------
                                Exercicio 01
        ---------------------------------------------------------------->
        <div class="grid-content">
            <?php
            for ($i = 1; $i <= 20; $i++) {
                echo 'numero é ' . $i . "<br>";
            }
            ?>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 02
        ---------------------------------------------------------------->
        <div class="grid-content-2">
            <?php
            for ($i = 1; $i <= 20; $i++) {
                if ($i % 2 == 0) {
                    echo '<span style="margin: 5px;">numero é ' . $i . " / </span>";
                } else {
                    echo '<span style="margin: 5px;">numero é ' . $i . " / </span>";
                }
            }
            ?>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 03
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite o primeiro numero</label><br>
                <input class="input-text" type="number" name="num01-3" placeholder="digite o primeiro numero"><br>
                <label>Digite o segundo numero</label><br>
                <input class="input-text" type="number" name="num02-3" placeholder="digite o segundo numero"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num01-3'])) {
                        $num01 = $_POST['num01-3'];
                        if (isset($_POST['num02-3'])) {
                            $num02 = $_POST['num02-3'];
                            echo 'Resultado é ' . (($num01 + $num02) * $num01);
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 04
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite o primeiro numero</label><br>
                <input class="input-text" type="number" name="num01-4" placeholder="digite o primeiro numero"><br>
                <label>Digite o segundo numero</label><br>
                <input class="input-text" type="number" name="num02-4" placeholder="digite o segundo numero"><br>
                <label>Digite o terceiro numero</label><br>
                <input class="input-text" type="number" name="num03-4" placeholder="digite o segundo numero"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num01-4'])) {
                        $num01 = $_POST['num01-4'];
                        if (isset($_POST['num02-4'])) {
                            $num02 = $_POST['num02-4'];
                            if (isset($_POST['num03-4'])) {
                                $num03 = $_POST['num03-4'];
                                echo 'Antecessor é ' . ((($num01 + $num02 + $num03) / 3) - 1) . "<br>";
                                echo 'Resultado é ' . (($num01 + $num02 + $num03) / 3) . "<br>";
                                echo 'Sucessor é ' . ((($num01 + $num02 + $num03) / 3) + 1) . "<br>";
                            }
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 05
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite o primeiro numero</label><br>
                <input class="input-text" type="number" name="num01-5" placeholder="digite o primeiro numero"><br>
                <label>Digite o segundo numero</label><br>
                <input class="input-text" type="number" name="num02-5" placeholder="digite o segundo numero"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num01-5'])) {
                        $num01 = $_POST['num01-5'];
                        if (isset($_POST['num02-5'])) {
                            $num02 = $_POST['num02-5'];
                            echo 'Resultado é ' . (($num01 * $num01) + ($num02 * $num02));
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 06
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite a velocidade de um objeto em m/s</label><br>
                <input class="input-text" type="number" name="num01-6" placeholder="digite a velocidade"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num01-6'])) {
                        $num01 = $_POST['num01-6'];
                        echo 'Resultado é ' . ($num01 * 3.6) . 'km/h';
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 07
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite a sua altura</label><br>
                <input class="input-text" type="number" name="altura-7" placeholder="digite a velocidade"><br>
                <label>Digite o seu peso</label><br>
                <input class="input-text" type="number" name="peso-7" placeholder="digite a velocidade"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['altura-7'])) {
                        $altura = $_POST['altura-7'];
                        if (isset($_POST['peso-7'])) {
                            $peso = $_POST['peso-7'];
                            $pessoaPeso = $peso / ($altura * $altura);
                            $Array = [17, 18.49, 18.5, 24.99, 25, 29.99, 30, 34.99, 35, 39.99];
                            $texto = ["Abaixo do Peso", "Peso Normal", "Acima do Peso", "Obesidade I", "Obesidade II"];
                            for ($i = 0; $i < sizeof($Array); $i += 2) {
                                if ($pessoaPeso < 17) {
                                    echo 'Muito Abaixo do Peso';
                                    break;
                                } else if ($pessoaPeso >= $Array[$i] && $pessoaPeso <= $Array[$i + 1]) {
                                    echo $texto[$i / 2];
                                    break;
                                } else if ($pessoaPeso > 40) {
                                    echo 'Obesidade III';
                                    break;
                                }
                            }
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 08
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite o valor do produto (desconto aplicado 7%)</label><br>
                <input class="input-text" type="number" name="num-8" placeholder="digite o valor"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num-8'])) {
                        $num = $_POST['num-8'];

                        echo 'O valor Orignial é: ' . $num . '<br>';
                        echo 'O valor DO Desconto é: ' . (($num * 7) / 100) . '<br>';
                        echo 'O valor COM Desconto é: ' . (($num) - (($num * 7) / 100));
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 09
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite o comprimento da caixa</label><br>
                <input class="input-text" type="number" name="num01-9" placeholder="digite o valor"><br>
                <label>Digite a largura da caixa</label><br>
                <input class="input-text" type="number" name="num02-9" placeholder="digite o valor"><br>
                <label>Digite a altura da caixa</label><br>
                <input class="input-text" type="number" name="num03-9" placeholder="digite o valor"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num01-9'])) {
                        $num01 = $_POST['num01-9'];
                        if (isset($_POST['num02-9'])) {
                            $num02 = $_POST['num02-9'];
                            if (isset($_POST['num03-9'])) {
                                $num03 = $_POST['num03-9'];

                                echo 'Volume da caixa é: ' . ($num01 * $num02 * $num03);
                            }
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 10
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite o primeiro numero</label><br>
                <input class="input-text" type="number" name="num01-10" placeholder="digite o valor"><br>
                <label>Digite o segundo numero</label><br>
                <input class="input-text" type="number" name="num02-10" placeholder="digite o valor"><br>
                <label>Digite o terceiro numero</label><br>
                <input class="input-text" type="number" name="num03-10" placeholder="digite o valor"><br>
                <label>Digite o quarto numero</label><br>
                <input class="input-text" type="number" name="num04-10" placeholder="digite o valor"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num01-10'])) {
                        $num01 = $_POST['num01-10'];
                        if (isset($_POST['num02-10'])) {
                            $num02 = $_POST['num02-10'];
                            if (isset($_POST['num03-10'])) {
                                $num03 = $_POST['num03-10'];
                                if (isset($_POST['num04-10'])) {
                                    $num04 = $_POST['num04-10'];
                                    echo 'Media Ponderada: ' . ((($num01 * 1) * ($num02 * 2) * ($num03 * 3) * $num04) / 10) . '<br>';
                                    if (((($num01 * 1) * ($num02 * 2) * ($num03 * 3) * $num04) / 10) < 5) {
                                        echo 'Reprovado';
                                    } else if (((($num01 * 1) * ($num02 * 2) * ($num03 * 3) * $num04) / 10) >= 7) {
                                        echo 'Aprovado';
                                    } else {
                                        echo 'Recuperação';
                                    }
                                }
                            }
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 11
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite a distancia percorrida (em Km)</label><br>
                <input class="input-text" type="number" name="num01-11" placeholder="digite a distancia total"><br>
                <label>Digite o combustivel gasto (em Litros)</label><br>
                <input class="input-text" type="number" name="num02-11" placeholder="digite o consumo de combustivel"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <p>
                    <?php
                    if (isset($_POST['num01-11'])) {
                        $num01 = $_POST['num01-11'];
                        if (isset($_POST['num02-11'])) {
                            $num02 = $_POST['num02-11'];

                            echo 'Consumo Médio é: ' . ($num01 / $num02) . 'Km/L';
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 12
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <label>Digite o valor do produto</label><br>
                <input class="input-text" type="number" name="num01-12" placeholder="digite a distancia total"><br>
                <button class="btn" type="submit">Enviar</button>
                <button class="btn" type="reset">Limpar</button>
                <?php
                if (isset($_POST['num01-12'])) {
                    $num01 = $_POST['num01-12'];
                    $num01 = ($num01 * 16) / 100;

                    echo '<table>';
                    for ($i = 0; $i < 10; $i++) {
                        echo '<tr>';
                        for ($d = 1; $d < 2; $d++) {
                            echo '<td>';
                            echo $i + $d . ' Parcelas ' . ' ' . $num01 / 10;
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                }
                ?>
            </form>
        </div>
        <!---------------------------------------------------------------
                                Exercicio 13
        ---------------------------------------------------------------->
        <div class="grid-content-3">
            <form method="post">
                <?php
                $a = 80000;
                $b = 200000;
                $cont = 0;
                while($a >= $b){
                    $a+=(($a*3)/100);
                    $b+=(($b*1.5)/100);
                    $cont++;
                }
                echo 'contador: ' . $cont;
                ?>
            </form>
        </div>
    </div>


    <!-- Scripts -->
    <script src="index.js"></script>
</body>

</html>