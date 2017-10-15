
var scene = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 1200;
        this.canvas.height = 1000;
        //this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);

        this.interval = setInterval(updateScene, 20);
    },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width,
        this.canvas.hieght);
    }
};

function input(event) {
    alert(event.key);
    if (event.key == "w") {
        event.target.valueOf("w");
    }
    if (event.key == "a") {
        event.target.valueOf("a");
    }
    if (event.key == "s") {
        event.target.valueOf("s");
    }
    if (event.key == "d") {
        event.target.valueOf("d");
    }
}

var components = [new component(0,20,500,500), 
                  new component(0,20,250,250)];

function startGame() {
    //
    scene.start();
    /*components.push(new component(0, 20, 
    scene.canvas.width/2, scene.canvas.height/2));*/
}

function updateScene() {
    scene.clear();
    components.foreach(function(c){
        c.update();
        c.draw();
    });
}

function component(type, size, x, y) {
    this.width = this.height = size;
    this.vX = this.vY = 0;
    this.x = x;
    this.y = y;
    this.rotation = 0;
    this.draw = function(){
        this.type = type;
        ctx = scene.context;
        switch(type){
            //Square
            case 0 : 
                ctx.fillRect(this.x, this.y,
                20, 20); break;
            //ADD SHIP
            //ADD ROCK
        };
    };
    this.update = function() {
        this.x += this.vX;
        this.y += this.vY;
    };
}