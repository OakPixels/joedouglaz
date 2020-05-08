function Food() {
  
  var cols = floor(width/scl);
  var rows = floor(height/scl);
  this.x = floor(random(cols))*scl;
  this.y = floor(random(rows))*scl;
  
  this.show = function() {
    fill(255, 0, 100);
    rect(this.x, this.y, scl, scl);
  }
}
