import {DecisionTreeClassifier as DTClassifier} from 'ml-cart';
import datasetIris from 'ml-dataset-iris';

const trainingSet = datasetIris.getNumbers();
// normaliza os nomes das classes em valores 0, 1 e 2
const predictions = datasetIris.getClasses().map((elem) => datasetIris.getDistinctClasses().indexOf(elem));
const classes = datasetIris.getDistinctClasses();

console.log(trainingSet);
console.log(classes);
console.log(predictions);

const options = {
    gainFunction: 'gini',
    maxDepth: 10,
    minNumSamples: 3,
};

const classifier = new DTClassifier(options);
classifier.train(trainingSet, predictions);
// classifica o conjunto de dados de treinamento de acordo com a árvore de decisão
// o ideal seria separar o conjunto de dados em treinamento e teste e verificar a precisão da árvore
const result = classifier.predict(trainingSet);
const output = result.map(function(elem) {
    if (elem == 0){
        return 'setosa';
    } else if (elem == 1){
        return 'versicolor';
    } else if (elem == 2){
        return 'virginica';
    }
})
console.log(output);