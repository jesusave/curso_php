<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">
            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        Las condicionales son símbolos aritméticos. Si la lógica es cierta, entrará. En caso contrario no se cumplirá y nunca llegará a ejecutarse el interior del if o while (ambos usan condicionales). Además podremos concadenar todas las condicionales que necesitemos. El uso de paréntesis está permitido.
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                            <th style="text-align: center">Símbolo</th>
                            <th style="text-align: center">Explicación</th>
                            <th style="text-align: center">Ejemplo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td style="text-align: center">&gt;</td>
                            <td style="text-align: center">es mayor que</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (1 &gt; 0)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">&lt;</td>
                            <td style="text-align: center">es menor que</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (1 &lt; 0)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">&amp;&amp;</td>
                            <td style="text-align: center">y</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (1 &gt; 0 &amp;&amp; 67 &gt; 0)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">||</td>
                            <td style="text-align: center">o</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (1 &gt; 10 || 67 &gt; 0)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">!</td>
                            <td style="text-align: center">no</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (!(1 &gt; 0))</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">==</td>
                            <td style="text-align: center">es igual en valor</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if ('3' == 3)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">===</td>
                            <td style="text-align: center">es igual en valor y tipo</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if ('3' === '3')</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">!=</td>
                            <td style="text-align: center">no es igual</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if ('Doctor' != 'Who')</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">!==</td>
                            <td style="text-align: center">no es igual en valor o tipo</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if ('Doctor' !== 'Who')</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">&gt;=</td>
                            <td style="text-align: center">es mayor o igual que</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (10 &gt;= 10)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">&lt;=</td>
                            <td style="text-align: center">es menor o igual que</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (10 &lt;= 20)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">&lt;=&gt;</td>
                            <td style="text-align: center">-1, 0 y 1 dependiendo de los valores si son superados</td>
                            <td style="text-align: center"><code class="highlighter-rouge">(10 &lt;=&gt; 20) // 1</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">True</td>
                            <td style="text-align: center">Verdad</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (True)</code></td>
                            </tr>
                            <tr>
                            <td style="text-align: center">False</td>
                            <td style="text-align: center">Falso</td>
                            <td style="text-align: center"><code class="highlighter-rouge">if (False)</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>