function Snake() {
  this.x = 0;
  this.y = 0;
  this.xspeed = 1;
  this.yspeed = 0;
  this.total = 0;
  this.tail = [];
  this.highscore = 0;
  
  this.dir = function(x, y) {
    this.xspeed = x;
    this.yspeed = y;
  }
  
  this.eat = function(food) {
    if (this.x == food.x && this.y == food.y) {
      this.total++;
      document.getElementById('score').innerHTML = 'Score: ' + this.total + '   High Score: ' + this.highscore;
      return true;
    } else {
      return false
    }
  }
  
  this.chdir = function(newx, newy) {
    if (this.xspeed === -newx || this.yspeed === -newy) {
      return false;
    } else {
      return true;
    }
  }
  
  this.death = function() {
    for (var i = 0; i < this.tail.length; i++) {
      var pos = this.tail[i];
      var d = dist(this.x, this.y, pos.x, pos.y);
      if (d < 1) {
        if (this.total > this.highscore) {
          this.highscore = this.total;
        }
        this.total = 0;
        this.tail = [];
        document.getElementById('score').innerHTML = 'Score: ' + this.total + '   High Score: ' + this.highscore;
      }
    }
  }
  
  this.update = function() {
    if (this.total === this.tail.length) {
      for (var i = 0; i < this.total-1; i++) {
        this.tail[i] = this.tail[i+1];
      }
    }
    this.tail[this.total-1] = createVector(this.x, this.y);
    
    this.x = this.x + this.xspeed*scl;
    this.y = this.y + this.yspeed*scl;
    
    this.x = this.x, 0, width-scl;
    this.y = this.y, 0, height-scl;
    
    if (this.x < 0) {
      this.x = width-scl;
    }
    
    if (this.x > width-scl) {
      this.x = 0;
    }
    
    if (this.y < 0) {
      this.y = height-scl;
    }
    
    if (this.y > height-scl) {
      this.y = 0;
    }
  }
  
  this.show = function() {
    for (var i = 0; i < this.total; i++) {
      rect(this.tail[i].x, this.tail[i].y, scl, scl);
    }
    rect(this.x, this.y, scl, scl);
  }
}
