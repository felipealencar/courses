function counterFunc(counter){
    if(counter > 100){
        counter = 0;
    } else {
        counter++;
    }

    return counter;
}

let arrowCounterFunc = (counter) => counter > 100 ? 0 : ++counter;

console.log(counterFunc(5));
console.log(arrowCounterFunc(5));