<html>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <body>
        <form action="/produtos/store" method="POST">  
        @csrf
            <input type="text"name="nome" placeholder="Nome do produto"/>
            <input type="number"name="preco" placeholder="Preço do produto"/>
            <input type="number"name="quantidade" placeholder="quantidade"/>
            <button>Cadastrar</button>
        </form>
        
        <canvas id="meugrafico" width="400" height="400">
        </canvas>
        
        <div>
            <h1>Listagem de Produtos</h1>
            <script>
                const nomes = <?php echo $nomes;?>;
                const quantidades = <?php echo $quantidades;?>;
                const ctx = document.getElementById('meugrafico').getContext('2d');
                const meuGrafico = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: nomes,
                        datasets: [{
                            label: 'Quantidade',
                            data: quantidades,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                </script>
        </div>
    </body>
</html>