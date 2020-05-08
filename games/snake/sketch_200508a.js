var s;
var scl = 30;
var food;
var x;
var y;

function setup() {
  createCanvas(600, 600);
  s = new Snake();
  frameRate(10);
  food = new Food();
}

function draw() {
  background(51);
  s.death();
  s.update();
  s.show();
  
  if (s.eat(food)) {
    food = new Food();
  };
  
  food.show();
}

function keyPressed() {
  if (keyCode === UP_ARROW) {
    x = 0;
    y = -1;
    if (s.chdir(x, y)) {
      s.dir(x, y);
    }
  } else if (keyCode === DOWN_ARROW) {
    x = 0;
    y = 1;
    if (s.chdir(x, y)) {
      s.dir(x, y);
    }
  } else if (keyCode === RIGHT_ARROW) {
    x = 1;
    y = 0;
    if (s.chdir(x, y)) {
      s.dir(x, y);
    }
  } else if (keyCode === LEFT_ARROW) {
    x = -1;
    y = 0;
    if (s.chdir(x, y)) {
      s.dir(x, y);
    }
  }
}
