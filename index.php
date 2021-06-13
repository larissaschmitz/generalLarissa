<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Jogo do General</title>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        
            <?php        
                $jogador = "";
                if(isset($_GET['jogador'])){
                    $jogador = $_GET['jogador'];}
                    $aleatorioJ = 0; $aleatorioC = 0;
                    $x = 0;
                    $contador1J = 0; $contador2J = 0; $contador3J = 0; $contador4J = 0; $contador5J = 0; $contador6J = 0; 
                    $jogadas1J = 0; $jogadas2J = 0; $jogadas3J = 0; $jogadas4J = 0; $jogadas5J = 0; $jogadas6J = 0;                    
                    $somaJogadasJ = 0;
                    $trincaJ = 0; $quadraJ = 0; $fullhouseJ = 0; 
                    $seqAltaJ = 0; $seqBaixaJ = 0; $generalJ = 0;
           
                    $contador1C = 0; $contador2C = 0; $contador3C = 0; $contador4C = 0; $contador5C = 0; $contador6C = 0;
                    $jogadas1C = 0; $jogadas2C = 0; $jogadas3C = 0; $jogadas4C = 0; $jogadas5C = 0; $jogadas6C = 0;
                    $somaJogadasC = 0;
                    $trincaC = 0; $quadraC = 0; $fullhouseC = 0; 
                    $seqAltaC = 0; $seqBaixaC = 0; $generalC = 0;


           ?>
    </head>

    <body>
        <center><h1>Jogo do General</h1></center>

        <div class="container">
    
    <div class="row mb-3">
        <form method="get" action="">
        
        <label for="jogador" class="col-sm-2 col-form-label"> Jogador: </label>
        <input type="text" class="form-control" name="jogador" id="jogador" placeholder="Insira o nome do jogador" value="<?php echo "$jogador";?>" />
<br><br>
        <center><input class="btn btn-dark" type="submit" value="Rolar dados!"></center>
</form> 
    </div>
            <hr>

            <?php
            
            echo "<h3>$jogador: </h3>";
                if(isset($_GET['jogador'])){
                    $vetorJogador = array ();
                    for ($i =0; $i < 5; $i++){
                    $vetorJogador[$i] = rand(1,6);
                    if($vetorJogador[$i] == 1){
                        echo "<img src='img/1.png' width='100' height='100'>";            
                    } else if ($vetorJogador[$i] == 2){
                        echo "<img src='img/2.png' width='100' height='100'>";
                    } else if ($vetorJogador[$i] == 3){
                        echo "<img src='img/3.png' width='100' height='100'>";
                    } else if ($vetorJogador[$i] == 4){
                        echo "<img src='img/4.png' width='100' height='100'>";
                    } else if ($vetorJogador[$i] == 5){
                        echo "<img src='img/5.png' width='100' height='100'>";
                    } else if ($vetorJogador[$i] == 6){
                        echo "<img src='img/6.png' width='100' height='100'>";
                    }
                    
                    
                   //* echo $vetorJogador[$i] . " ";
                        $aleatorioJ = $aleatorioJ + $vetorJogador[$i];
                }

                foreach ($vetorJogador as $dadoJ){
                    if($dadoJ == 1){
                        $contador1J++;
                        if($contador1J > 1){
                            $jogadas1J = $contador1J;
                        }
                    }     
                    
                    if ($dadoJ == 2){
                        $contador2J++;
                        if($contador2J > 1){
                            $jogadas2J = $contador2J * 2;
                        }
                    }

                    if ($dadoJ == 3){
                        $contador3J++;
                        if($contador3J > 1){
                            $jogadas3J = $contador3J * 3;
                        }
                    }

                    if ($dadoJ == 4){
                        $contador4J++;
                        if($contador4J > 1){
                            $jogadas4J = $contador4J * 4;
                        }
                    }

                    if ($dadoJ == 5){
                        $contador5J++;
                        if($contador5J > 1){
                            $jogadas5J = $contador5J * 5;
                        }
                    }

                    if ($dadoJ == 6){
                        $contador6J++;
                        if($contador6J > 1){
                            $jogadas6J = $contador6J * 6;
                        }
                    }
                }  }
                $totalJogadasJ = array($jogadas1J, $jogadas2J, $jogadas3J, $jogadas4J, $jogadas5J, $jogadas6J);
                for($x=0; $x <6; $x++){
                    //*echo $totalJogadas[$x] . "local ";
                    $somaJogadasJ = $somaJogadasJ + $totalJogadasJ[$x];
                     
                }//*echo "<br> Soma das jogadas: $somaJogadas . ";
                echo"<br>";

                if($contador1J == 3){
                    $trincaJ = 20;
                } else if ($contador2J == 3){
                    $trincaJ = 20;
                } else if ($contador3J == 3){
                    $trincaJ = 20;
                } else if ($contador4J == 3){
                    $trincaJ = 20;
                } else if ($contador5J == 3){
                    $trincaJ = 20;
                } else if ($contador6J == 3){
                    $trincaJ = 20;
                }              

                if($contador1J == 4){
                    $quadraJ = 30;
                } else if ($contador2J == 4){
                    $quadraJ = 30;
                } else if ($contador3J == 4){
                    $quadraJ = 30;
                } else if ($contador4J == 4){
                    $quadraJ = 30;
                } else if ($contador5J == 4){
                    $quadraJ = 30;
                } else if ($contador6J == 4){
                    $quadraJ = 30;
                }

                if($contador1J == 2 && $trincaJ == 20){
                    $fullhouseJ = 25;
                } else if ($contador2J == 2 && $trincaJ == 20){
                    $fullhouseJ = 25;
                } else if ($contador3J == 2 && $trincaJ == 20){
                    $fullhouseJ = 25;
                } else if ($contador4J == 2 && $trincaJ == 20){
                    $fullhouseJ = 25;
                } else if ($contador5J == 2 && $trincaJ == 20){
                    $fullhouseJ = 25;
                } else if ($contador6J == 2 && $trincaJ == 20){
                    $fullhouseJ = 25;
                }

               
                if(2 == $vetorJogador[0] && 3 == $vetorJogador[1] && 4 == $vetorJogador[2] &&
                    5 == $vetorJogador[3] && 6 == $vetorJogador[4]){
                        $seqAltaJ = 30;
                    }
                
                if(1 == $vetorJogador[0] && 2 == $vetorJogador[1] && 3 == $vetorJogador[2] &&
                    4 == $vetorJogador[3] && 5 == $vetorJogador[4]){
                        $seqBaixaJ = 40;
                    }
                
                if($contador1J == 5){
                    $generalJ = 50;
                } else if ($contador2J == 5){
                    $generalJ = 50;
                } else if ($contador3J == 5){
                    $generalJ = 50;
                } else if ($contador4J == 5){
                    $generalJ = 50;
                } else if ($contador5J == 5){
                    $generalJ = 50;
                } else if ($contador6J == 5){
                    $generalJ = 50;
                }


                echo"<br><br>";
                

                echo "<h3>Computador: </h3>";
                $vetorComputador = array ();
                for ($j = 0; $j < 5; $j++){
                $vetorComputador[$j] = rand(1, 6);
                if($vetorComputador[$j] == 1){
                    echo "<img src='img/1.png' width='100' height='100'>";            
                } else if ($vetorComputador[$j] == 2){
                    echo "<img src='img/2.png' width='100' height='100'>";
                } else if ($vetorComputador[$j] == 3){
                    echo "<img src='img/3.png' width='100' height='100'>";
                } else if ($vetorComputador[$j] == 4){
                    echo "<img src='img/4.png' width='100' height='100'>";
                } else if ($vetorComputador[$j] == 5){
                    echo "<img src='img/5.png' width='100' height='100'>";
                } else if ($vetorComputador[$j] == 6){
                    echo "<img src='img/6.png' width='100' height='100'>";
                }

                    //*echo $vetorComputador[$j] . " ";
                    $aleatorioC = $aleatorioC + $vetorComputador[$j];
                }

                foreach ($vetorComputador as $dadoC){
                    if($dadoC == 1){
                        $contador1C++;
                        if($contador1C > 1){
                            $jogadas1C = $contador1C;
                        }
                    }
                    
                    if ($dadoC == 2){
                        $contador2C++;
                        if($contador2C > 1){
                            $contador2C = $contador2C * 2;
                        }
                    }

                    if($dadoC == 3){
                        $contador3C++;
                        if($contador3C >1){
                            $jogadas3C = $contador3C * 3;
                        }
                    }

                    if($dadoC == 4){
                        $contador4C++;
                        if($contador4C > 1){
                            $jogadas4C = $contador4C * 4;
                        }
                    }

                    if($dadoC == 5){
                        $contador5C++;
                        if($contador5C > 1){
                            $jogadas5C = $contador5C * 5;
                        }
                    }

                    if($dadoC == 6){
                        $contador6C++;
                        if($contador6C > 1){
                            $jogadas6C = $contador6C * 6;
                        }
                    }
                }
                $totalJogadasC = array($jogadas1C, $jogadas2C, $jogadas3C, $jogadas4C, $jogadas5C, $jogadas6C);
                for($y = 0; $y < 6; $y++){
                    $somaJogadasC = $somaJogadasC + $totalJogadasC[$y];
                }

                if($contador1C == 3){
                    $trincaC = 20;
                } else if ($contador2C == 3){
                    $trincaC = 20;
                }  else if ($contador3C == 3){
                    $trincaC = 20;
                }  else if ($contador4C == 3){
                    $trincaC = 20;
                }  else if ($contador5C == 3){
                    $trincaC = 20;
                }  else if ($contador6C == 3){
                    $trincaC = 20;
                }

                if($contador1C == 4){
                    $quadraC = 30;
                } else if ($contador2C == 4){
                    $quadraC = 30;
                }  else if ($contador3C == 4){
                    $quadraC = 30;
                }  else if ($contador4C == 4){
                    $quadraC = 30;
                }  else if ($contador5C == 4){
                    $quadraC = 30;
                }  else if ($contador6C == 4){
                    $quadraC = 30;
                }

                if ($contador1C == 2 && $trincaC == 20){
                    $fullhouseC = 25;
                } else if ($contador2C == 2 && $trincaC == 20){
                    $fullhouseC = 25;
                } else if ($contador3C == 2 && $trincaC == 20){
                    $fullhouseC = 25;
                } else if ($contador4C == 2 && $trincaC == 20){
                    $fullhouseC = 25;
                } else if ($contador5C == 2 && $trincaC == 20){
                    $fullhouseC = 25;
                } else if ($contador6C == 2 && $trincaC == 20){
                    $fullhouseC = 25;
                }

                if(2 == $vetorComputador[0] && 3 == $vetorComputador[1] && 4 == $vetorComputador[2] &&
                5 == $vetorComputador[3] && 6 == $vetorComputador[4]){
                    $seqAltaC = 30;
                }

                if(1 == $vetorComputador[0] && 2 == $vetorComputador[1] && 3 == $vetorComputador[2] &&
                4 == $vetorComputador[3] && 5 == $vetorComputador[4]){
                    $seqBaixaC = 30;
                }

                if($contador1C == 5){
                    $generalC = 50;
                } else if ($contador2C == 5){
                    $generalC = 50;
                } else if ($contador3C == 5){
                    $generalC = 50;
                } else if ($contador4C == 5){
                    $generalC = 50;
                } else if ($contador5C == 5){
                    $generalC = 50;
                } else if ($contador6C == 5){
                    $generalC = 50;
                }

                $totalJ = $somaJogadasJ + $trincaJ + $quadraJ + $fullhouseJ + $seqAltaJ + $seqBaixaJ + $generalJ + $aleatorioJ;
                $totalC = $somaJogadasC + $trincaC + $quadraC + $fullhouseC + $seqAltaC + $seqBaixaC + $generalC + $aleatorioC;

//*tabela de dados

            echo "<hr>
            <h2><center>Resultados:</center></h2>
            <center><br><table border='1' class='table-dark table-hover table table-bordered'>
            <tr>
                <th></th>
                <th>$jogador</th>
                <th>Computador</th>
            </tr>

            <tr>
                <td>Jogada 1</td>
                <td>$jogadas1J</td>
                <td>$jogadas1C</td>
                
            </tr>
    
            <tr>
                <td>Jogada 2</td>
                <td>$jogadas2J</td>
                <td>$jogadas2C</td>
            </tr>

            <tr>
                <td>Jogada 3</td>
                <td>$jogadas3J</td>
                <td>$jogadas3C</td>
            </tr>
            <tr>
                <td>Jogada 4</td>
                <td>$jogadas4J</td>
                <td>$jogadas4C</td>
            </tr>
            <tr>
                <td>Jogada 5</td>
                <td>$jogadas5J</td>
                <td>$jogadas5C</td>
            </tr>
            <tr>
                <td>Jogada 6</td>
                <td>$jogadas6J</td>
                <td>$jogadas6C</td>
            </tr>
            <tr>
                <td>Trinca</td>
                <td>$trincaJ</td>
                <td>$trincaC</td>
            </tr>
            <tr>
                <td>Quadra</td>
                <td>$quadraJ</td>
                <td>$quadraC</td>
            </tr>
            <tr>
                <td>Full House</td>
                <td>$fullhouseJ</td>
                <td>$fullhouseC</td>
            </tr>
            <tr>
                <td>Sequencia alta</td>
                <td>$seqAltaJ</td>
                <td>$seqAltaC</td>
            </tr>
            <tr>
                <td>Sequencia baixa</td>
                <td>$seqBaixaJ</td>
                <td>$seqBaixaC</td>
            </tr>
            <tr>
                <td>General</td>
                <td>$generalJ</td>
                <td>$generalC</td>
            </tr>
            <tr>
                <td>Aleatório</td>
                <td>$aleatorioJ</td>
                <td>$aleatorioC</td>
            </tr>

          </table></center><hr>
          
          <p> Total de pontos de $jogador: $totalJ.<br>
            Total de pontos do Computador: $totalC.<br></p><hr><br>";


                if($totalJ > $totalC){
                    echo "<h4><center>Vencedor: $jogador.</center></h4>";
                } else if ($totalC > $totalJ){
                    echo "<h4><center>Vencedor: Computador.</center></h4>";
                } else {
                    echo "<h4><center>Empate.</center></h4>";
                }

          ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </div>
    </body>
</html>