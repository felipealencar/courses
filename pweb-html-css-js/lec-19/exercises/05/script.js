var x = 10;

function foo() {
  var y = 20; // free variable
  function bar() {
    var z = 15; // free variable
    console.log(x, y, z);
    return x + y + z;
  }
  return bar;
}

let a = foo();
console.log(a());