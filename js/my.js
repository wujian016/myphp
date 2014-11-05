var s = {name:"wujian",address:"cd hua yang",birthday:new Date(1976,3,11)}
window.onload = function(){
	
	s.name = "guodingci"; 
}

function inherit(p) {
    if (p == null) throw TypeError(); // p must be a non-null object
    if (Object.create)                // If Object.create() is defined...
        return Object.create(p);      //    then just use it.
    var t = typeof p;                 // Otherwise do some more type checking
    if (t !== "object" && t !== "function") throw TypeError();
    function f() {};                  // Define a dummy constructor function.
    f.prototype = p;                  // Set its prototype property to p.
    return new f();                   // Use f() to create an "heir" of p.
}

var p = {
  x:1.0,
  y:1.0,
  get r(){return Math.sqrt(this.x * this.x + this.y + this.y);},
  set r(newvalue){
    var oldvalue = ath.sqrt(this.x * this.x + this.y + this.y);
    var ratio = newvalue/oldvalue;
    this.x *= ratio;
    this.y *=ratio;
  },
  get theta(){return Math.atan2(this.y , this.x);}

};

var serialnum = {
  $n:0,
  get next(){return this.$n++;},
  set next(n){
    if(n >= this.$n) this.$n = n;
    else throw "serial number can not less than current number";
  }

};

Object.defineProperty(Object.prototype,
    "extend",                  // Define Object.prototype.extend
    {
        writable: true,
        enumerable: false,     // Make it nonenumerable
        configurable: true,
        value: function(o) {   // Its value is this function
            // Get all own props, even nonenumerable ones
            var names = Object.getOwnPropertyNames(o);
            // Loop through them
            for(var i = 0; i < names.length; i++) {
                // Skip props already in this object
                if (names[i] in this) continue;
                // Get property description from o
                var desc = Object.getOwnPropertyDescriptor(o,names[i]);
                // Use it to create property on this
                Object.defineProperty(this, names[i], desc);
            }
        }
    });

function classof(o) {
    if (o === null) return "Null";
    if (o === undefined) return "Undefined";
    return Object.prototype.toString.call(o).slice(8,-1);
}

Order.prototype.addNum = function(num){
  this.number += num;
  return this;
}
function Order(amo,num){
  this.amount = amo;
  this.number = num;
  this.addNum(10);
}

Order.prototype.getAmount = function(){return this.amount;}
Order.ZERO = new Order(0,0);
Order.addOrder = function(ord,amo,num){
  ord.amount += amo;  
  ord.number += num;
  return ord;
}
Order.prototype.copy = function(){
  var nw = new Order(this.amount,this.number);
  return nw;
}
