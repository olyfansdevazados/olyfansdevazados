<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Cliques</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: "Courier New", Courier, monospace;
            background-color: #000;
            color: #0f0;
            text-align: center;
            margin: 40px;
        }
        h1 {
            text-shadow: 0 0 10px #0f0, 0 0 20px #0f0;
        }
        canvas {
            max-width: 600px;
            margin: auto;
            border: 1px solid #0f0;
            box-shadow: 0 0 20px #0f0;
            background: #111;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .last-click {
            margin-top: 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <h1>Gráfico de Cliques por Dia</h1>
    <canvas id="clickChart"></canvas>
    <div class="last-click">
        <?php
        // Lê o arquivo log.txt
        $logFile = 'logs.txt';
        if (!file_exists($logFile)) {
            echo "<p class='error'>Arquivo log.txt não encontrado.</p>";
            exit;
        }

        $logs = file($logFile);
        $dataCount = [];
        $lastClickTime = null;

        // Processa o arquivo linha por linha
        foreach ($logs as $line) {
            if (preg_match('/Data: (\d{4}-\d{2}-\d{2}) (\d{2}:\d{2}:\d{2})/', $line, $matches)) {
                $date = $matches[1];
                $time = $matches[2];
                $lastClickTime = "$date $time";

                if (!isset($dataCount[$date])) {
                    $dataCount[$date] = 0;
                }
                $dataCount[$date]++;
            }
        }

        // Exibe a hora do último clique
        if ($lastClickTime) {
            echo "Hora do último clique: $lastClickTime";
        } else {
            echo "<p class='error'>Nenhum clique registrado.</p>";
        }

        // Prepara os dados para o gráfico
        $labels = json_encode(array_keys($dataCount));
        $values = json_encode(array_values($dataCount));
        ?>
    </div>

    <script>
        // Dados do PHP
        const labels = <?php echo $labels; ?>;
        const values = <?php echo $values; ?>;

        // Cria o gráfico
        const ctx = document.getElementById('clickChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Cliques por Dia',
                    data: values,
                    backgroundColor: 'rgba(0, 255, 0, 0.2)',
                    borderColor: 'rgba(0, 255, 0, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#0f0',
                            font: {
                                family: "Courier New",
                                size: 14
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: '#0f0',
                            font: {
                                family: "Courier New",
                                size: 12
                            }
                        },
                        grid: {
                            color: '#333'
                        }
                    },
                    y: {
                        ticks: {
                            beginAtZero: true,
                            color: '#0f0',
                            font: {
                                family: "Courier New",
                                size: 12
                            }
                        },
                        grid: {
                            color: '#333'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
