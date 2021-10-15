async function run(){
    const csvUrl = 'iris.csv';
    const dadosDeTreinamento = await tf.data.csv(csvUrl, {
        hasHeader: true,
        columnConfigs: {
            species: {
                isLabel: true
            }
        },
        delimiter: ','
    });

    await console.log(dadosDeTreinamento);

    const dadosLimpos = await dadosDeTreinamento.map(({xs, ys}) => {
        // normalização
        const labels = [
            ys.species == "Iris-setosa" ? 1 : 0,
            ys.species == "Iris-versicolor" ? 1 : 0,
            ys.species == "Iris-virginica" ? 1 : 0
        ]

        return {xs: Object.values(xs), ys: Object.values(labels)};
    }).batch(10);

    const quantidadeDeCaracteristicas = (await dadosDeTreinamento.columnNames()).length - 1;

    const model = tf.sequential();

    model.add(tf.layers.dense({
        inputShape: [quantidadeDeCaracteristicas],
        activation: "sigmoid",
        units: 5
    }));

    model.add(tf.layers.dense({
        activation: "softmax",
        units: 3
    }));

    model.compile({
        loss: "categoricalCrossentropy",
        optimizer: tf.train.adam(0.06)
    });

    console.log("Sumário do Modelo:", model.summary());

    await model.fitDataset(dadosLimpos, 
        {
            epochs: 100,
            callback: {
                onEpochEnd: async(epoch, logs) => {
                    console.log("Passo de Treinamento: "+epoch+" Perda: "+ logs.loss);
                }
            }
        }
    );

    const tensorFlorDeTeste = tf.tensor2d([4.7,3.2,1.3,0.2], [1, 4]);

    const prediction = model.predict(tensorFlorDeTeste);

    const index = tf.argMax(prediction, axis=1).dataSync();
    console.log(index);
    const nomeDasClasses = ["Setosa", "Virginica", "Versicolor"];

    alert(nomeDasClasses[index]);
}